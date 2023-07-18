<?php

namespace Jatinbphp\Contactform\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jatinbphp\Contactform\Models\ContactForm;
use Log;

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
    public function contactForm() {
        Log::info("All Country API");
        // echo 121254;
        return view('contactForm::index');
        //return response()->json(['languages' => getLanguages() ], 200);
    }
    public function Submit() {
        // dd($this->request->all());
        ContactForm::create($this->request->all());
    }
    
}