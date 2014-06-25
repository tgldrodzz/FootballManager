<?php namespace TGLD\Providers;

use Illuminate\Support\ServiceProvider;

class FacadeServiceProvider extends ServiceProvider {

    /**
     * Register in IoC container
     */
    public function register()
    {
        /**
         * Binding for Member
         */
        $this->app->bind('Member', 'TGLD\Member\MemberService');

        /**
         * Binding for Club
         */
        $this->app->bind('Club', 'TGLD\Club\ClubService');
    }

}