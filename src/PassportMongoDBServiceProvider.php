<?php

namespace MyanmarCyberYouths\Laravel\MongoDB;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Bridge\RefreshTokenRepository as PassportRefreshTokenRepository;
use Laravel\Passport\Passport;
use MyanmarCyberYouths\Laravel\MongoDB\Commands\ClientCommand;
use MyanmarCyberYouths\Laravel\MongoDB\Commands\InstallCommand;
use MyanmarCyberYouths\Laravel\MongoDB\Passport\AuthCode;
use MyanmarCyberYouths\Laravel\MongoDB\Passport\Bridge\RefreshTokenRepository;
use MyanmarCyberYouths\Laravel\MongoDB\Passport\Client;
use MyanmarCyberYouths\Laravel\MongoDB\Passport\PersonalAccessClient;
use MyanmarCyberYouths\Laravel\MongoDB\Passport\Token;

class PassportMongoDBServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Passport::useAuthCodeModel(AuthCode::class);
        Passport::useClientModel(Client::class);
        Passport::usePersonalAccessClientModel(PersonalAccessClient::class);
        Passport::useTokenModel(Token::class);

        $this->app->bind(PassportRefreshTokenRepository::class, function () {
            return $this->app->make(RefreshTokenRepository::class);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
                ClientCommand::class,
            ]);
        }
    }
}
