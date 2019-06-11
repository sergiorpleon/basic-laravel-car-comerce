<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
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
        $users = User::orderBy('id','ASC')->paginate(10);

        return view('admin.user.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.user.create');

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
            'name'=>'required|unique:users|max:255',
            
        ]);

        $user = User::create([
            'name'=>$request->get('name'),
            'email'=>str_slug($request->get('email')),
            'password'=>\Hash::make($request->get('password')),
            'last_name'=>$request->get('last_name'),
            'type'=>$request->get('type'),
            'user'=>$request->get('user'),
            'active'=>$request->get('active'),
            'address'=>$request->get('address'),
            //'created_at' => new DateTime,
            //'updated_at' => new DateTime,
        ]);

        $message = $user ? 'Usuario creado correctamente' : 'El usuario no pudo crearse';

        return redirect()->route('user.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\User  $user
     * @return Response
     */
    public function show(User $user)
    {
        //
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\User  $user
     * @return Response
     */
    public function edit(User $user)
    {
        //
        return view('admin.user.edit')->with('user',$user);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  \App\User  $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->fill($request->all());
        //$user->updated_at = new DateTime;

        $updated = $user->save();

        $message = $updated ? 'Usuario actualizado correctamente' : 'El usuario no pudo actualizar';

        return redirect()->route('user.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return Response
     */
    public function destroy(User $user)
    {
        //
        $deleted =$user->delete();

        $message = $deleted ? 'Usuario eliminado correctamente' : 'El usuario no pudo eliminar';

        return redirect()->route('user.index')->with('message', $message);
 
    }
}
