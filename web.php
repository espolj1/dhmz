<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\InstallController;
use App\Http\Controllers\MeteorologicalStationController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\StationCategoryController;
use App\Http\Controllers\StationOwnerController;
use App\Http\Controllers\StationTypeController;
use App\Http\Controllers\SensorTypeController;
use App\Models\station_type;
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

/*Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');*/
Route::get('/', 'App\\Http\\Controllers\\HomeController@dashboard')->name('dashboard');


/*Route::get('/sensors_types', [SensorTypeController::class, 'index'])*/
Route::get('/sensors_types', 'App\\Http\\Controllers\\SensorTypeController@index')
->name('sensors_types.index');

Route::get('/sensors_types/delete/{sensor_type}', [SensorTypeController::class, 'destroy'])
->name('sensors_types.destroy');

Route::get('/sensors', 'App\\Http\\Controllers\\SensorController@index')
->name('sensors.index');

Route::get('sensors/delete/{sensor}', [SensorController::class, 'destroy'])
->name('sensors.destroy');

Route::get('/certificates', 'App\\Http\\Controllers\\CertificateController@index')
->name('certificates.index');

Route::get('certificates/delete/{certificat}', [CertificateController::class, 'destroy'])
->name('certificates.destroy');

Route::get('/cities', 'App\\Http\\Controllers\\CityController@index')
->name('cities.index');

Route::get('cities/delete/{city}', [CityController::class, 'destroy'])
->name('cities.destroy');

Route::get('/station_owners', 'App\\Http\\Controllers\\StationOwnerController@index')
->name('station_owners.index');

Route::get('station_owners/delete/{station_owner}', [StationOwnerController::class, 'destroy'])
->name('station_owners.destroy');

Route::get('/station_types', 'App\\Http\\Controllers\\StationTypeController@index')
->name('station_types.index');

Route::get('station_types/delete/{station_type}',[StationTypeController::class, 'destroy'])
->name('station_types.destroy');

Route::get('/meteorological_stations', 'App\\Http\\Controllers\\MeteorologicalStationController@index')
->name('meteorological_stations.index');

Route::get('meteorological_stations/delete/{meteorological_station}', [MeteorologicalStationController::class, 'destroy'])
->name('meteorological_stations.destroy');

Route::get('/installed', 'App\\Http\\Controllers\\InstallController@index')
->name('installed.index');

Route::get('installed/delete/{install}', [InstallController::class, 'destroy'])
->name('installed.destroy');

Route::get('/station_categories', 'App\\Http\\Controllers\\StationCategoryController@index')
->name('station_categories.index');

Route::get('station_categories/delete/{station_category}', [StationCategoryController::class, 'destroy'])
->name('station_categories.destroy');


Route::post('/sensors_types', 'App\\Http\\Controllers\\SensorTypeController@store');
Route::post('/sensors', 'App\\Http\\Controllers\\SensorController@store');
Route::post('/certificates', 'App\\Http\\Controllers\\CertificateController@store');
Route::post('/cities', 'App\\Http\\Controllers\\CityController@store');
Route::post('/station_owners', 'App\\Http\\Controllers\\StationOwnerController@store');
Route::post('/station_types', 'App\\Http\\Controllers\\StationTypeController@store');
Route::post('/meteorological_stations', 'App\\Http\\Controllers\\MeteorologicalStationController@store');
Route::post('/installed', 'App\\Http\\Controllers\\InstallController@store');
Route::post('/station_categories', 'App\\Http\\Controllers\\StationCategoryController@store');