<?php
/**
 * Created by PhpStorm.
 * User: adamwaheed
 * Date: 18/12/2018
 * Time: 3:16 PM
 */

namespace Atolon\RequestWorkflow;


use Illuminate\Support\ServiceProvider;

class ModeratorServiceProvider extends ServiceProvider
{

    public function boot()
    {


        $this->loadMigrationsFrom(__DIR__.'/migrations');

    }

    public function register()
    {

    }
}