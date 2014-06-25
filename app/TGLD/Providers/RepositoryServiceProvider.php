<?php namespace TGLD\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register bindings with IoC container
     */
    public function register()
    {
        /**
         * Binding for Member Interface
         */
        $this->app->bind(
            'TGLD\Repositories\Member\MemberRepositoryInterface',
            'TGLD\Repositories\Member\EloquentMemberRepository'
        );

        /**
         * Binding for Club Interface
         */
        $this->app->bind(
            'TGLD\Repositories\Club\ClubRepositoryInterface',
            'TGLD\Repositories\Club\EloquentClubRepository'
        );
    }
}