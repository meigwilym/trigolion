<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('users:create', function () {
    
    \App\User::create([
        'name' => $this->ask('Name?'),
        'email' => $this->ask('Email?'),
        'password' => bcrypt($this->secret('Password?')),
    ]);
    $this->info('Account created ');

})->describe('Display an inspiring quote');
