<?php

namespace App\Providers;

use App\Model\Contact;
use App\Model\Social;
use App\Model\Trainning;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

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
        //   \Artisan::call('config:cache');
        //   \Artisan::call('cache:clear');

//        Artisan::call('storage:link');
//           \Artisan::call('config:cache');
//           \Artisan::call('cache:clear');



        $social=Social::orderby('id','desc')->first();
        $contact=Contact::orderby('id','desc')->first();
        $trainings=Trainning::orderby('id','desc')->get();
        return view()->share(['contact'=>$contact ,'social'=>$social,'trainings'=>$trainings]);
    }
}
