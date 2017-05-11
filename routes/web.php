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
    // anonima), si es verdadera pasa al primer parametro si es falso pasa al segundo
 list($premium, $free) = $courses->partition->isPremium();

  dd($courses->toArray(), $premium->toArray(), $free->toArray());
});
