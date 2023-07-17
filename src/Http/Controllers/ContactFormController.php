<?php

namespace Jatinbphp\Contactform\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Jatinbphp\Contactform\ContactFormServiceProvider;
use Log;

class ContactFormController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
    }
    public function contactForm() {
        Log::info("All Country API");
        // echo 121254;
        return view('contactForm::index');
        //return response()->json(['languages' => getLanguages() ], 200);
    }
    
}