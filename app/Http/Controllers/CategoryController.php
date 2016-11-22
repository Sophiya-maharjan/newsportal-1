<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Category;
use Illuminate\Support\Str;
use DB;
use App;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $details['data']= Category::all();
        // $details['data']= DB::table('category')->get();
        // return view('/category/categoryDisplay')
        //
       return redirect('/category/categoryDisplay', 'home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/category/categoryAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = new Category;
        $name = $request->categoryName;
        $slug = Str::slug($name);
        
        $category->categoryName = $name;
        $category->categorySlug = $slug;
        

        $category->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $details['data']= Category::all();
        //$details['data']= DB::table('category')->get();
        return view('/category/categoryDisplay')->with($details);
       
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $result['data'] = DB::select('select * from category where id =:id',[':id'=>$id]);
//var_dump($result);die();
        //$result['data'] = Category::find($id);
        return view('/category/categoryEdit')->with($result);
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
        $category = Category::find($id);
        

        $name = $request->categoryName;
        $slug=Str::slug($name);
        $category->categoryName = $name;
        $category->categorySlug = $slug;
    
          $category->save();
          return redirect('/category/categoryDisplay');
        //var_dump($name);

       
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
        Category::find($id)->delete();
        return redirect('/category/categoryDisplay');
       // return (Redirect::category/show);
    }
}
