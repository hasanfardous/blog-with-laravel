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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', function(){
    return view('blog.blogs');
});

Route::get('/blog/single/{id}', function(){
    return view('blog.single');
});

// Admin
Route::get('/admin/all-blogs', function(){
    $blogs = DB::table('all_blogs')->get();
    
    return view('admin.all-blogs', compact('blogs'));
})->name('all_blogs_route')->middleware('auth');

Route::get('/admin/create-blog', function(){
    return view('admin.create-blog');
})->middleware('auth');

Route::post('/admin/all-blogs', function(){
    $title = request('title');
    $content = request('content');
    
    DB::table('all_blogs')->insert(array(
        'title' => $title,
        'content' => $content
    ));

    Session::flash('blog-posted', 'Post has been created successfully!');

    return redirect('/admin/all-blogs');
});

Route::get('/admin/blog/edit/{id}', function($id){
    $blog = DB::table('all_blogs')->find($id);
    
    return view('admin.edit', compact('blog'));
})->middleware('auth');

Route::post('/admin/blog/edit/{id}', function($id){
    $title = request('title');
    $content = request('content');
    
    DB::table('all_blogs')->where('id', $id)->update(array(
        'title' => $title,
        'content' => $content,
        'updated_at' => date('Y-m-d H:i:s')
    ));
    
    return redirect()->route('all_blogs_route')->with('post-updated', 'The post has been updated successfully!');
});

Route::get('/admin/blog/delete/{id}', function($id){
    DB::table('all_blogs')->where('id', $id)->delete();

    return redirect()->route('all_blogs_route')->with('post-deleted', 'The post has been deleted successfully!');
});