<?php

namespace Jatinbphp\Contactform\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jatinbphp\Contactform\Models\ContactForm;
use Log;
use Validator;

class ContactFormController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index() {
        $contactForms = ContactForm::all();
        return view('contactForm::index', compact('contactForms'));
    }
    public function contactForm() {
        
        return view('contactForm::create');
    }
    public function Submit() {
        $v = Validator::make($this->request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'message' => 'required',
        ]);
     
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        ContactForm::create($this->request->all());
        return redirect()->back()->with('success', 'Contact form submitted successfully!');
    }
    
}