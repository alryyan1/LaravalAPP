<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $collection = collect([1,2,3])->reverse()->tap(function($otherCollection){
        $otherCollection->each(function($val){
            dump("in tap".$val);
        });
    });
    // return view('welcome');
});


require __DIR__.'/auth.php';
