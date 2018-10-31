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
    return view('test');
});

//this is for admin panel service part
Route::get('/service/',function(){
    
    $services=DB::table("services")->get();
    return view('admin.services.service',compact('services'));
    });

Route::post('/test',function(){
    
    $id=isset($_POST['id'])?$_POST['id']:'the post is not rech';
    $temp=DB::table('services')->where('id',$id)->first();
    $title=$temp->title;
    $brif=$temp->des;
    $content=$temp->content;




    $x = ['title' => $title, 'brif' => $brif ,'content'=>$content ,'req'=>$id ];
    return json_encode($x);

    
    });


?>
