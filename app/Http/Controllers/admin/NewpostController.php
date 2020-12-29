<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;   //table direction class
use Session;   
use Redirect;
class NewpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('newcatagories')->where('status',1)->get();
        return view('admin.post.add-post',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // echo $name= $request->post_name; 
     //  $user = Auth::user();   
     //  $data['name'] = $request->post_name;
     //  $data['url'] = str_replace(' ', '-', $request->post_name);
      
     //  $data['category_id'] = $request->newcatagories;
     //  $data['user_id'] = $user->name;  //auth user hota name neva
     //  $data['description'] = $request->description;
     //  $data['status'] = $request->status;
     
     // $t=time();  //time data getClientOriginalName  a value unique hova
     // $postImage = $request->file('post_name');
     // $imageName = $t.$postImage->getClientOriginalName();
     // $uploadPath = 'admin/post_image/';  //foler fath
     // $postImage->move($uploadPath,$imageName);
     // $imageUrl = $uploadPath.$imageName;
     // $data['image'] = $imageUrl;

     // $check = DB::table('newposts')->insert($data);
     // if(!empty($check)){
     //    Session::put('success','Post Save Successfully');
     //    //return Redirect::to('/add-post');
     // }else{
     //    Session::put('success','Post Save Unsuccessful');
       // return Redirect::to('/add-post'); 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
