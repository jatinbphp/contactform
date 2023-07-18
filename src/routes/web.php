<?php
    use Illuminate\Support\Facades\Route;
    use Jatinbphp\Contactform\Http\Controllers\ContactFormController;

    // Route::get('contact',  function(){
    //     return 'Hello from the contact form package';
    // });
    Route::group([ 'middleware' =>['web']], function ($router) {
        Route::get('/contact', [ContactFormController::class, 'contactForm']);
        Route::post('/submit-contact-form', [ContactFormController::class, 'Submit'])->name('contactFormSubmit');
    });
?>