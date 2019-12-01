<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Controllers\Controller;
use App\Dialog;
use App\Character;
use Barryvdh\DomPDF\Facade as PDF;

class DialogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$dialogs=Dialog::all();
        $dialogs=Dialog::escena($request->get('escena'))->orderBy('escena', 'ASC')->paginate();
        return view( 'dialog',compact('dialogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagUpdateRequest $request)
    {
        $dialog= new Dialog();
        $dialog->escena=$request->input('escena');
        $dialog->ch_id=$request->input('ch_id');
        $dialog->dialogo=$request->input('dialogo');
        $dialog->save();
        //return 'Guardado';
        return redirect('/dialog');
        //return $name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dialog $dialog)
    {
        //
        //return view('show');
        //$character=Character::find($id);
        return view('showd',compact('dialog'));
        //return $character;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dialog $dialog)
    {
        //
        return view('editd',compact('dialog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, Dialog $dialog)
    {
        //
        $dialog->fill($request->all());
        $dialog->save( );
        return "update";
        //$dialog->fill($request->except('avatar'));
        //if ($request->hasFile('avatar')){
            //$file=$request->file('avatar');
            //$name=time().$file->getClientOriginalName();

           //$character->avatar=$name;
            //$file->move(public_path( ).'/images/',$name);
        //}
        //$character->save();
        //return redirect('characters/');
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
        $dialog=Dialog::find($id);
        if ($dialog->delete($id))
        {
        return redirect('/dialog');
        }
        else return 'El '.$id. "No se pudo borrar";
        
    }

    public function pdf()
    {
        $dialogs=Dialog::all();
        $pdf=PDF::loadView('pdf.listdialogs', compact('dialogs'));
        //$pdf->save(storage_path().'_filename.pdf');
        return $pdf->download('Dialogs.pdf');
    }

    public function pdfch(Dialog $id)
    {
        $pdf=PDF::loadView('pdf.infod',['dialog'=>$id]);
        return $pdf->download('infod.pdf');
    }
}


