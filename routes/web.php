<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\VerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // dd(app());
    return view('welcome');
});

Route::get('/test', function () {
  
    app()->make('first_service_provider');
});

Route::get('/test-session', function (Request $request) {
   
    // session(['name'=>'Data']);
    $request->session()->put('age','28');

});

Route::get('/all-session', function(Request $request){
//    return $request->session()->all();
   $request->session()->flush();
});




// class crud route
Route::get('class', [App\Http\Controllers\Admin\ClassController::class, 'index'])->name('class.index');






// Route::get('/{roll}', function($roll){
//     return "my roll is $roll";
// });

// Web User Login/Registration Route Controller
Auth::routes();
Auth::routes(['verify'=>true]);

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');



Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');

// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/password/change', [App\Http\Controllers\VerificationController::class, 'password_change'])->name('password.change')->middleware('verified');


// change password
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');