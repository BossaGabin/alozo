<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use App\Models\Artisan;
use App\Models\DevisHasFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DevisController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $validateData = $request->validate([
            
            'price' => 'required',
            'delivery_date' => 'required',
            'content' => 'required', 
            // 'images' => 'required',
            'images.*' =>['image','mimes:jpeg,jpg,png']         
            
        ]);
        $validateData['annonces_id'] = $id;
        $validateData['artisans_id'] = Artisan::select('id')->where('user_id',Auth::user()->id)->first()->id;
        
        
        try {
            $devis = Devis::create($validateData);
            
            foreach ($request->file('images') as $image) {
                $path =  Storage::disk('public')->put('devis', $image);
                // dd($path, $devis->id);
                DevisHasFile::create([
                    'path' => $path,
                    'devis_id' => $devis->id
                ]);
            }
            return back()->with('success', "Votre devis a été envoyé");
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Devis::find($id)->delete();
        return  back();
    }
    public function statuts($id){
        $devis = DB::table('devis')->select('statut')->where('id', '=', $id)->first();
    
        if ($devis->statut == '1') {
            $statut = '0';
        }else{
            $statut = '1';
        }
        $values = array('statut' =>$statut);
        DB::table('devis')->where('id',$id)->update($values);
        return back();
    }
}
