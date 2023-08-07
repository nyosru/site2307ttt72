<?php

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



$docRoutes = function () {
    Route::get('/', function () {
        return view('doc.index');
    });
};

Route::domain('doc.local')->group($docRoutes);
Route::domain('doc2.local')->group($docRoutes);
// Route::domain('складдокументов.рф')->group($docRoutes);
// складдокументов.рф
Route::domain('xn--80aefaf0adenlhe2ayl.xn--p1ai')->group($docRoutes);

$tttRoutes = function () {
    Route::get('/', function () {
        return view('ttt.welcome');
    });
};

Route::domain('ttt72.local')->group($tttRoutes);
Route::domain('ttt72.ru')->group($tttRoutes);
Route::domain('ттт72.рф')->group($tttRoutes);
// ттт72.рф
Route::domain('xn--72-qmcaa.xn--p1ai')->group($tttRoutes);




if (1 == 1) {
    
    $r = function () {
        Route::get('/', function () {
            return view('index_empty', ['domain' => $_SERVER['HTTP_HOST']]);
        });
    };


    $d = [];
    $d['АТРАКТОР.РФ'] = 'xn--80aa4aqhdjd.xn--p1ai';
    $d['snimok-ok.ru'] = 'snimok-ok.ru';
    $d['земельныйкадастр.рф'] = 'xn--80aalcakqihin5bmo2koa.xn--p1ai.';
    $d['мистерзеленка.рф'] = 'xn--80ajaaiesgeq2akn.xn--p1ai.';
    $d['мистерзелёнка.рф'] = 'xn--80ajahdpgdo0ajm4r.xn--p1ai.';
     
    // xn----8sbnbjdshdq2akn0t.xn--p1ai.
    $d['мистер-зелёнка.рф'] = 'xn----8sbnbjdshdq2akn0t.xn--p1ai.';
    // IDN: мистер-зелёнка.рф

    // xn--72-jlcysfhth6f.xn--p1ai.
    $d['продукты72.рф'] = 'xn--72-jlcysfhth6f.xn--p1ai.';
    // IDN: продукты72.рф

    // xn--80agoddredzph.xn--p1ai.
    $d['сноукайтинг.рф'] = 'xn--80agoddredzph.xn--p1ai.';
    // IDN: сноукайтинг.рф

    foreach ($d as $d1 => $d2) {
        Route::domain($d2)->group($r);
    }

    // //АТРАКТОР.РФ
    // Route::domain('xn--80aa4aqhdjd.xn--p1ai')->group($r);
    // Route::domain('snimok-ok.ru')->group($r);
    // // земельныйкадастр.рф
    // Route::domain('xn--80aalcakqihin5bmo2koa.xn--p1ai.')->group($r);
    // // IDN: мистерзеленка.рф
    // Route::domain('xn--80ajaaiesgeq2akn.xn--p1ai.')->group($r);
    // // IDN: мистерзелёнка.рф
    // Route::domain('xn--80ajahdpgdo0ajm4r.xn--p1ai.')->group($r);
}