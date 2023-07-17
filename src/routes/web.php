<?php
    use Illuminate\Support\Facades\Route;
    use Jatinbphp\Contactform\Http\Controllers\ContactFormController;

    // Route::get('contact',  function(){
    //     return 'Hello from the contact form package';
    // });
    Route::get('/contact', [ContactFormController::class, 'contactForm']);
?>