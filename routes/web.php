<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});


Route::view('dashboard','dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/step1', [App\Http\Controllers\Auth\RegisterController::class, 'step1'
]);

Route::post('/step1fa', [App\Http\Controllers\Auth\RegisterController::class, 'step1fa'
]);                       
Route::get('docusign',[DocusignController::class, 'index'])->name('docusign');
Route::get('connect-docusign',[DocusignController::class, 'connectDocusign'])->name('connect.docusign');
Route::get('docusign/callback',[DocusignController::class,'callback'])->name('docusign.callback');
Route::get('sign-document',[DocusignController::class,'signDocument'])->name('docusign.sign');
Route::post('/step2fa', [App\Http\Controllers\Auth\RegisterController::class, 'step2fa'
]);  

Route::post('/step3fa', [App\Http\Controllers\Auth\RegisterController::class, 'step3fa'
]); 
Route::post('/step3', [App\Http\Controllers\Auth\RegisterController::class, 'step3'
]); 
Route::view('agreement','agreement');

Route::post('/step4fa', [App\Http\Controllers\Auth\RegisterController::class, 'step4fa'
]); 
Route::get('/step2', [App\Http\Controllers\Auth\RegisterController::class, 'step2'
]);
Route::get('welcome-main',[App\Http\Controllers\averfication::class, 'create'
]);


// Route::post('swog',[App\Http\Controllers\swogcontroller::class, 'swog'
// ]);
// Route::view('welcome-main','welcome-main');

// Route::post('/registercreate', [App\Http\Controllers\Auth\RegisterController::class, 'create'
// ]);
Route::view('index','index');
Route::view('about','about');
// Route::view('login','login');
Route::view('loginuser','login');
Route::view('welcome-main2','welcome-main');
Route::view('identity-doc2','identity-doc2');
Route::view('yourself','yourself');
Route::view('usertable','usertable');

Route::view('agreement','agreement');
Route::view('agreement','agreement');
Route::view('more-about','more-about');
 
Route::view('yourself','yourself');
Route::view('investor','investor');
Route::view('afilate','afilate');
Route::view('welcomepage','welcomepage');
Route::view('horizon-fund','horizon-fund');
Route::view('portfolio','portfolio');
Route::view('verification','verification');
Route::view('verification2','verification2');
Route::view('entity-verification','entity-verification');
Route::view('entity-verification2','entity-verification2');
Route::view('swog2','swog2');
Route::view('swog3','swog3');
Route::view('swog4','swog4');
Route::view('swog5','swog5');
Route::view('swog6','swog6');
Route::view('swog8','swog8');
Route::view('swog7','swog7');
Route::view('swog9','swog9');
Route::view('swog10','swog10');
Route::view('swog11','swog11');
Route::view('swog12','swog12');
Route::view('swog13','swog13');
Route::view('swog14','swog14');
Route::view('swog15','swog15');
Route::view('swog16','swog16');
Route::view('swog','swog');

Route::view('swog17','swog17');
Route::view('finace-create-account','finace-create-account');
Route::view('goal','goal');
// Route::view('goal2','goal2');
// Route::view('goal3','goal3');
// Route::view('goal4','goal4');
// Route::view('goal5','goal5');
// Route::view('goal6','goal6');
// Route::view('thankyou','thankyou');






Route::post('goal2',[App\Http\Controllers\investmentdetail::class, 'step1'
]);

Route::post('goal3',[App\Http\Controllers\investmentdetail::class, 'step2'
]);

Route::post('goal4',[App\Http\Controllers\investmentdetail::class, 'step3'
]);

Route::post('goal5',[App\Http\Controllers\investmentdetail::class, 'step4'
]);

Route::post('goal6',[App\Http\Controllers\investmentdetail::class, 'step5'
]);

Route::post('thankyou',[App\Http\Controllers\investmentdetail::class, 'step6'
]);


// Route::view('horizon-fund','horizon-fund');
// Route::view('horizon-fund','horizon-fund');

Route::view('welcome2','welcome2');
Route::view('welcome-main','welcome-main');

// Route::view('identity-doc','identity-doc');
Route::view('identity-doc2','identity-doc2');

// Route::view('entity-verification','entity-verification');

Route::view('finace-advisor','finace-advisor');
// Route::view('more-about','more-about');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
