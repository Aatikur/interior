<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Document;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer(['web.include.header','web.include.footer'], function($view){
              $header_data ="";
              $doc = Document::where('status',1)->first();
               $header_data = ['doc'=>$doc];
               $view->with('header_data',$header_data);
         });
    }
    
}
