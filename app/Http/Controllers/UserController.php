<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

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
        // if (!Gate::allows('access-admin')) {
        //     abort('403');
        //  }            
        $users = User::orderBy("created_at", "desc")->get();
        
        return view('admin/listeClients', compact("users"));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $request->validate([
            'name' => 'required',
        ]);

        $users = User::findOrFail($id);
        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->profil = $request->input('profil')??'user.jpg';
        $users->adresse = $request->input('adresse');
        $users->sexe = $request->input('sexe');
        $users->ville_id = $request->input('ville_id');
        $users->save();
        return back();
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
     public function admin($id){
        $user = DB::table('users')->select('admin')->where('id', '=', $id)->first();
    
        if ($user->admin == '1') {
            $admin = '0';
        }else{
            $admin = '1';
        }
        $values = array('admin' =>$admin);
        DB::table('users')->where('id',$id)->update($values);
        return back();
    }
}
