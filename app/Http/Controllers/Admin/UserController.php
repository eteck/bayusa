<?php

namespace bayusa\Http\Controllers\Admin;

use Illuminate\Http\Request;

use bayusa\Http\Requests;
use bayusa\Http\Controllers\Controller;
use bayusa\User;
use bayusa\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('name')->get();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::orderBy('name')->lists('name','id');
        return view('admin.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            $this->validate($request, [
              'name' => 'required|max:255',
              'last_name' => 'required|max:555',
              'address' => 'required|max:555',
              'email' => 'required|email|max:255|unique:users',
              'username' => 'required|max:255|unique:users',
              'password' => 'required|confirmed|min:6',
              'role' => 'required',
            ]);

            //dd('Role request:'.$request['role']);

            $user = User::create([
                'name' => $request['name'],
                'last_name' => $request['last_name'],
                'address' => $request['address'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'username'=> $request['username'],
                'role_id'=> $request['role'] ,
                'active'=> $request['active'] ? 1: 0,
            ]);

            $message = $user ? 'Usuario agregado correctamente!' : 'El usuario no pudo agregarse!';
            //dd($message);
            return redirect()->route('admin.user.index')->with('message', $message);
            
        }catch(\Exception $e){
            $message = 'El usuario no pudo agregarse!';
            //dd($message." error: ". $e);
            return redirect()->route('admin.user.index')->with('message', $message);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::orderBy('name')->lists('name','id');
        //dd($roles);
        return view('admin.user.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
              'name' => 'required|max:255',
              'last_name' => 'required|max:555',
              'address' => 'required|max:555',
              'email' => 'required|email|max:255',
              'password' => $request['password'] != "" ? 'confirmed|min:6' : '',
              'role_id' => 'required',
            ]);

        $user->name = $request['name'];
        $user->last_name = $request['last_name'];
        $user->address = $request['address'];
        $user->email = $request['email'];
        if($request['password'] != "") $user->password = $request['password'];
        $user->role_id = $request['role_id'];
        $user->active = $request['active'] ? 1: 0;

        $updated = $user->save();

        $message = $updated ? 'Usuario actualizado correctamente' : 'El Usuario no se pudo actualizar correctamente';

        return redirect()->route('admin.user.index')->with('message', $message); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $deleted = $user->delete();

        $message = $deleted ? 'Usuario eliminado exitosamente!':'¡Error al eliminar el usuario!';

        return redirect()->route('admin.user.index')->with('message',$message);
    }
}
