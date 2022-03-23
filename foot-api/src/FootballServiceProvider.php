<?php

namespace Lushidev\FootApi;

use Illuminate\Support\ServiceProvider;
use Lushidev\FootApi\FootballApi;
use GuzzleHttp\Client;
use App;
class FootballServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
  $this->app->bind('football', function()
        {
            $client = new Client([
                'base_uri'  => getenv('FOOTBALL_API_URL'),
                'headers'   =>  [
                    "X-RapidAPI-Host" => getenv('RAPID_URL_HOST'),
                    'X-RapidAPI-Key' => getenv('APIFOOTBALL_API_KEY')
                ]
            ]);

            return new FootballApi($client);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
