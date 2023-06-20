<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class DynamicDBController extends Controller
{
    public function dynamic($db)
    {
        // Config::set('database.connections.mysql.database', $db);

        Config::set("database.connections.dynamic_db", array(
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => $db,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ));
        // Artisan::call('cache:forget spatie.permission.cache');
        // Artisan::call('cache:clear');
        // Artisan::call('config:clear');
        // Artisan::call('config:cache');
        // Artisan::call('view:clear');
        // Artisan::call('route:clear');

        // return 'db update';

        dd(Config::get('database.connections'));
    }
}
