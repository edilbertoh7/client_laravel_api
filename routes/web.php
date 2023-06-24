<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ClientsController;

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

/*Route::get('/', function () {
    $response = Http::get('http://localhost:8000/api/clients');
    $data = $response->json();
    //dd($data);
    foreach ($data as $client) {
        echo $client['name'].'->'.$client['email'];
        echo "<br>" ;

    }
});*/

Route::get('/', [ClientsController::class, 'index']);
Route::get('/client', [ClientsController::class, 'create']);
Route::post('/clients', [ClientsController::class, 'store'])->name('clients.store');
Route::get('/client/{id}', [ClientsController::class, 'view'])->name('client.view');
Route::post('/client/update', [ClientsController::class, 'update'])->name('client.update');
Route::get('/client/delete/{id}', [ClientsController::class, 'delete'])->name('client.delete');


