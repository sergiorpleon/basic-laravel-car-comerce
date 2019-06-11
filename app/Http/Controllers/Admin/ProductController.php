<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\Tag;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\PRoductUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ProductController extends Controller
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
        $products = Product::orderBy('id','ASC')->paginate(10);

        return view('admin.product.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $categories = Category::orderby('name','ASC')->pluck('name', 'id');
        $tags = Tag::orderby('name','ASC')->get();

        return view('admin.product.create', compact('categories', 'tags'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProductStoreRequest $request)
    {
        //
        //dd($request->all());

        $product = Product::create([
            'name'=>$request->get('name'),
            'slug'=>str_slug($request->get('name')),
            'description'=>$request->get('description'),
            'extract'=>$request->get('extract'),
            'price'=>$request->get('price'),
            'image'=>$request->get('image'),
            'visible'=>$request->get('visible'),
            'category_id'=>$request->get('category_id'),
        ]);

        //configurar para que guarde en carpeta public
        //config > filesystems
        //'disks' => [ 'public' => ['root' => public_path(),
        if($request->file('image')){
            $path = Storage::disk('public')->put('image', $request->file('image'));
            $product->fill(['image' => asset($path)])->save();
        }

        $product->tags()->attach($request->get('tags'));

        $message = $product ? 'Producto creado correctamente' : 'El producto no pudo crearse';

        return redirect()->route('product.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Product  $product
     * @return Response
     */
    public function show(Product $product)
    {
        //
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Product  $product
     * @return Response
     */
    public function edit(Product $product)
    {
        $categories = Category::orderby('name','ASC')->pluck('name', 'id');
        $tags = Tag::orderby('name','ASC')->get();
        //
        return view('admin.product.edit', compact('product', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  \App\Product  $product
     * @return Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        //
        $product->fill($request->all());
        $product->slug = str_slug($request->get('name'));

        $updated = $product->save();

        $message = $updated ? 'Producto actualizado correctamente' : 'El producto no pudo actualizar';

        return redirect()->route('product.index')->with('message', $message);
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        //
        $deleted =$product->delete();

        $message = $deleted ? 'Producto eliminado correctamente' : 'El producto no pudo eliminar';

        return redirect()->route('product.index')->with('message', $message);
    }
}
