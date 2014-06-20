<?php
namespace TGLD\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class FacadeServiceProvider
 * @package TGLD\Providers
 */
class RepositoryServiceProvider extends ServiceProvider{

    /**
     * Register the service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'TGLD\Repositories\Member\MemberRepositoryInterface',
            'TGLD\Repositories\Member\EloquentMemberRepository'
        );
    }
}