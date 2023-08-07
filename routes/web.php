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


# XN--80AA4AQHDJD.XN--P1AI
# ( IDN = АТРАКТОР.РФ )
if (1 == 1) {
    $r = function () {
        Route::get('/', function () {
            return view('atraktor.index');
        });
    };
    Route::domain('xn--80aa4aqhdjd.xn--p1ai')->group($r);
}

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