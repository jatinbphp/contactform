<?php

    namespace Jatinbphp\Contactform;
    use Illuminate\Support\ServiceProvider;

    class ContactFormServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactForm');
        }
        public function register()
        {
      }
   }
?>