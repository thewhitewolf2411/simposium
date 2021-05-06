<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\HtmlString;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->greeting('Poštovani,')
                ->subject('Registracija REKOG')
                ->line('Ljubazno molim da potvrdite svoju e-mail adresu, klikom na dugme u nastavku.')
                ->line('Hvala na potvrdi Vašeg e-maila. ')
                ->action('Potvrdi e-mail', $url)
                ->line(new HtmlString('<br>Ukoliko imate poteškoća s klikom na dugme "Potvrdi e-mail", kopirajte i zalijepite donji URL u svoje web pretraživanje, ćime ćete potvrditi Vašu e-mail adresu. <br>' . $url))
                ->salutation(new HtmlString('<br>'));
        });
    }
}
