<?php

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


// Datos de prueba
use App\Course;

//use App\AlertFacade as Alert;
use Facades\App\Alert;


// convertimos un array en colecciones
$courses = collect([
    new Course(['title' => 'OOP', 'premium' => true]),
    new Course(['title' => 'Primeros pasos con Laravel', 'premium' => false]),
    new Course(['title' => 'Git', 'premium' => true]),
    new Course(['title' => 'Laravel 5.4', 'premium' => false]),
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('courses', function () use ($courses){
 /**
   // mostramos los cursos pagos
   $premium = $courses->filter(function ($course){
       return $course->premium;
   }) ;
    // mostramos los cursos gratuitos
    $free = $courses->reject(function ($course){
        return $course->premium;
    }) ;
 */
 /**
   // mensajes de orden superior
    $premium = $courses->filter->premium;
    $free = $courses->reject->premium;
  */
 /**
    // llamamos en cada uno de los cursos el metodo archive() con map
    //$courses->map->archive();

    $premium = $courses->filter->isPremium();
    $free = $courses->reject->isPremium();
 */
  //usamos el metodo partition para separar una coleccion dependiendo de la condicion en el callback(funcion
    // anonima) o en su defecto usamos un mensaje de orden superior, si es verdadera pasa al primer parametro
    // si es falso pasa al segundo
 list($premium, $free) = $courses->partition->isPremium();

  dd($courses->toArray(), $premium->toArray(), $free->toArray());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('images', function (){
    return view('images');
});

Route::get('dashboard', function (){
    // recordar crear un alias en conf
    Alert::message('Bienvenido de nuevo!', 'success');

   /**session()->flash('alert', [
       'message' => 'Bienvenido de nuevo!',
       'type' => 'success'
   ]);**/

   return view('dashboard');
});

//Route::resource('products', 'ProductController');
Route::prefix('admin')->middleware('guest')->group(function (){
    //nueva interfaz fluida para definir rutas
    Route::name('products.edit')
        ->get('products/{product}/edit', 'ProductController@edit');

    Route::name('products.update')
        ->put('products/{product}', 'ProductController@update');
});

Route::get('welcome', function () {
    return view('welcome');
});

