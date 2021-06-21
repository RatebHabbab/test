<?php

use App\Models\Note;
use App\Models\Page;
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

Route::get('/pages/{page}/notes', function (Page $page) {
    // return $page;
    return view('add-note', [
        'page' => $page
    ]);
});

Route::post('/pages/{page}/notes', function (Page $page) {
    $note = new Note();
    $note->page_id = $page->id;
    $note->note = request('note');
    $note->save();

    return 'success';
});

Route::get('test_page_relation', function(){
    return Note::first()->page()->get();
});

Route::get('test_note_relation', function(){
    return Page::first()->notes()->get();
});
