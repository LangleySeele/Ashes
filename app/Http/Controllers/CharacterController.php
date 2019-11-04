<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Character;
use Barryvdh\DomPDF\Facade as PDF;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $characters=Character::all();
        return view( 'index',compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        //$character = new Character();
        //$character->name=$request->input('name');
        //$character->last_name=$request->input('last_name')
        //$character->save();
        //return 'Guardado';
        //return $request->all();
        //
        //return $request->input('name');
        if ($request->hasFile('avatar')) {
            $file= $request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path( ).'/images/',$name);

            $character= new Character();
            $character->name=$request->input('name');
            $character->last_name=$request->input('last_name');
            $character->epithet=$request->input('epithet');
            $character->race=$request->input('race');
            $character->gender=$request->input('gender');
            $character->height=$request->input('height');
            $character->age=$request->input('age');
            $character->weapons=$request->input('weapons');
            $character->affiliation=$request->input('affiliation');
            $character->description=$request->input('description');
            //imagen
            $character->avatar=$name;
            $character->save();
            //return 'Guardado';
            return redirect('characters/');
            //return $name;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        //
        //return view('show');
        //$character=Character::find($id);
        return view('show',compact('character'));
        //return $character;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
        return view('edit',compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        //
        $character->fill($request->except('avatar'));
        if ($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();

            $character->avatar=$name;
            $file->move(public_path( ).'/images/',$name);
        }
        $character->save();
        return redirect('characters/');
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
        /**$trainer=Character::find($id);
        if ($trainer->delete($id))
        {
        return redirect('characters/');
        }
        else return 'El '.$id. "No se pudo borrar";
        */

        $data=Character::findOrFail($id);

        if(file_exists('images/'.$data->avatar) AND !empty($data->avatar)){
            unlink('images/'.$data->avatar);
        }
        try{
            $data->delete();
            $bug=0;
        }
        catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            echo "success";
            return redirect('characters/');
        }else{
            echo 'error';
        }
    }

    public function pdf()
    {
        $characters=Character::all();
        $pdf=PDF::loadView('pdf.listcharacters', compact('characters'));
        //$pdf->save(storage_path().'_filename.pdf');
        return $pdf->download('Characters.pdf');
    }

    public function pdfch(Character $id)
    {
        $pdf=PDF::loadView('pdf.info',['character'=>$id]);
        return $pdf->download('info.pdf');
    }

}
