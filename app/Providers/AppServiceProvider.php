<?php

namespace App\Providers;
use Schema;
use Config;
use App\Models\SmtpSetting;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //toget all data from database
        if (\Schema::hasTable('smtp_settings'))
        {
            $smtpsetting = SmtpSetting::first();
            if($smtpsetting)
            {

                $data = [
                    'driver' =>$smtpsetting->mailer,
                    'host' => $smtpsetting->host,
                    'post' => $smtpsetting->post,
                    'username' => $smtpsetting->username,
                    'password' => $smtpsetting->password,
                    'encryption'=> $smtpsetting->encryption,
                    'from'=> [
                        'address'=> $smtpsetting->from_address,
                         'name' =>'Kejayangu',
                    ]

                    ];
                    Config::set('mail', $data);
            }
        }
    }
}
