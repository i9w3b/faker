<?php

namespace I9W3b\Faker;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

/**
 * Class     FakerServiceProvider
 *
 * @package  I9W3b\Faker
 * @author   I9W3b <suportemarcelosena@gmail.com>
 */
class FakerServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAlias();
    }

     /**
     * Register alias.
     *
     * @return void
     */
    protected function registerAlias()
    {
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('I9Faker', '\Faker\Factory');
    }
}
