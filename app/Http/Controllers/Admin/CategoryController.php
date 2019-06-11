<?php

namespace App\Http\Controllers\Admin;

use App\Category;
//use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id','ASC')->paginate(10);

        return view('admin.category.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());

        $this->validate($request, [
            'name'=>'required|unique:categories|max:255',
            'color'=>'required',
        ]);

        $category = Category::create([
            'name'=>$request->get('name'),
            'slug'=>str_slug($request->get('name')),
            'description'=>$request->get('description'),
            'color'=>$request->get('color'),
        ]);

        $message = $category ? 'Category creada correctamente' : 'La categoria no pudo crearse';

        return redirect()->route('category.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return Response
     */
    public function show(Category $category)
    {
        //
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return Response
     */
    public function edit(Category $category)
    {
        //
        return view('admin.category.edit')->with('category',$category)->paginate(10);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  \App\Category  $category
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $category->fill($request->all());
        $category->slug = str_slug($request->get('name'));

        $updated = $category->save();

        $message = $updated ? 'Category actualizada correctamente' : 'La categoria no pudo actualizar';

        return redirect()->route('category.index')->with('message', $message);
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        //
        $deleted =$category->delete();

        $message = $deleted ? 'Category eliminada correctamente' : 'La categoria no pudo eliminar';

        return redirect()->route('category.index')->with('message', $message);
 
    }
}
