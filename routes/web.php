<?php

use Illuminate\Support\Facades\Route;

Route::get('/test/{room}/{id}', function ($room, $id) {
   return 'roomが' . $room . 'でidは' . $id . 'です';
});
