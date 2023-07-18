<?php
    use Illuminate\Support\Facades\Route;
    use Jatinbphp\Contactform\Http\Controllers\ContactFormController;

    // Route::get('contact',  function(){
    //     return 'Hello from the contact form package';
    // });
    Route::group([ 'middleware' =>['web'], 'prefix' => 'contact'], function ($router) {
        Route::get('/', [ContactFormController::class, 'index'])->name('contact.index');
        Route::get('/create', [ContactFormController::class, 'contactForm'])->name('contact.create');
        Route::post('/submit-contact-form', [ContactFormController::class, 'Submit'])->name('contactFormSubmit');
    });
?>