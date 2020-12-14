<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about', function () {
//    $name = 'osama abu twahena';
//    $age  = '19';

//    // return view('about')->with('name',$name)->with('age',$age);
//    return view('about',compact('osama'));
// });

// Route::post('send', function (Request $request) {
//     $name = $request->myname;
//    return view('about',compact('name'));
// });

// Route::get('tasks', function () {

//     $tasks =[
//         'Task 1',
//         'Task 2',
//         'Task 3'
//     ];

//     //$tasks =[
//     //    '1' => 'Task 1',
//     //    '2' => 'Task 2',
//     //    '3' => 'Task 3'
//     //];
//     //dd($tasks[1]);
//     return view('tasks',compact('tasks'));

// });

// Route::get('task/show/{id}', function ($id) {

//     $tasks =[
//         'Task 1',
//         'Task 2',
//         'Task 3'
//     ];

//     //$tasks =[
//     //    '1' => 'Task 1',
//     //    '2' => 'Task 2',
//     //    '3' => 'Task 3'
//     //];
//     $task = $tasks[$id];
//     //dd($tasks);
//     return view('show',compact('task'));

// });

Route::get('tasks', function () {

    //$tasks = DB::table('tasks')->get();

    $tasks = DB::table('tasks')->get();

    //dd($tasks);
    return view('tasks', compact('tasks'));

});

Route::get('tasks/show/{id}', function ($id) {

    $task = DB::table('tasks')->find($id);

    //dd($task);

    return view('show', compact('task'));
});
