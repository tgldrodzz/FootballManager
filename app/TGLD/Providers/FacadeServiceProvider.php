<?php
namespace TGLD\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class FacadeServiceProvider
 * @package TGLD\Providers
 */
class FacadeServiceProvider extends ServiceProvider{

    /**
     * Register the service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Member',
            'TGLD\FacadeServices\Member\MemberService'
        );
    }
}