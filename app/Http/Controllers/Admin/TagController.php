<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
//use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Controllers\Controller;

use App\Http\Middleware\RolePermission as role;

class TagController extends Controller
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
        $tags = Tag::orderBy('id','ASC')->paginate(10);

        return view('admin.tag.index',compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.tag.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TagStoreRequest  $request
     * @return Response
     */
    public function store(TagStoreRequest $request)
    {

        //dd($request->all());
        $tag = Tag::create([
            'name'=>$request->get('name'),
            'slug'=>str_slug($request->get('name')),
            'description'=>$request->get('description'),
        ]);

        $message = $tag ? 'Tag creada correctamente' : 'La tag no pudo crearse';

        return redirect()->route('tag.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return Response
     */
    public function show(Tag $tag)
    {
        //
        return $tag;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return Response
     */
    public function edit(Tag $tag)
    {
        //
        return view('admin.tag.edit')->with('tag',$tag);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TagUpdateRequest  $request
     * @param  \App\Tag  $tag
     * @return Response
     */
    public function update(TagUpdateRequest $request, Tag $tag)
    {
        $tag->fill($request->all());
        $tag->slug = str_slug($request->get('name'));

        $updated = $tag->save();

        $message = $updated ? 'Tag actualizada correctamente' : 'La tag no pudo actualizar';

        return redirect()->route('tag.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return Response
     */
    public function destroy(Tag $tag)
    {
        //
        $deleted =$tag->delete();

        $message = $deleted ? 'Tag eliminada correctamente' : 'La tag no pudo eliminar';

        return redirect()->route('tag.index')->with('message', $message);
 
    }
}
