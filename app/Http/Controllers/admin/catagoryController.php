<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\newcatagory;
class catagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $datas=newcatagory::all();
        return view('admin.catagory.manage-catagory',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 //https://www.youtube.com/watch?v=QRmlguCnY2k

      $catagory=new newcatagory;

      $catagory->name=$request->catagory;
       // $request->validate([
       //  'catagory' => 'required|max:255',]);default error show
       $request->validate([
        'catagory' => 'required|max:20',],

        [
        'catagory.required' => 'Please enter valid catagory',
        'catagory.max' => 'Catagory name less then 20 chars',
     
    ]);

      $catagory->url=str_replace(' ','-',$request->catagory);
      $catagory->status=$request->status;
      $catagory->save();
       Session::put('success','Category Saved Successfully');
        return redirect('/manage-catagory');
    }

 
        


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=newcatagory::find($id);
        return view ('admin.catagory.edit-category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    $category_id =  $request->category_id;
    $category = newcatagory::find($category_id);
    $category->name = $request->catagory;
    $category->url = str_replace(' ', '-', $request->newcatagory);
    $category->status = $request->status;
    $category->save();
     Session::put('success','Category Updated Successfully');
     return redirect('/manage-catagory');
    }
   



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $catagory=newcatagory::find($id);
       $catagory->delete();
       Session::put('success','Category Delete Successfully');
       return back()->with('Success','Data deleted');
    }
}
