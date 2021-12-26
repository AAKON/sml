<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;
use Rainwater\Active\Active;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/
/**
 * @description Show the home page of the site
 */

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
/**
 * @description Show the home page of the site
 */

Broadcast::channel('chat', function ($user) {
    // $user = User::all();
    // $users = Active::users()->get();
    $users = $user;
    return $users;
});

