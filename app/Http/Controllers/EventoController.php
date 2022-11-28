<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventoRequest;
use App\Models\ModelEvento;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EventoExport;


class EventoController extends Controller
{
  private $objEvento;

  public function __construct()
  {
      $this->objEvento = new ModelEvento();
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $evento = ModelEvento::all()->sortBy('codigo_evento');
    return view('index',compact('evento'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(EventoRequest $request)
  {

    $reg=$this->objEvento->create([

        'nome_evento'=>$request->nome_evento,
        'local_evento'=>$request->local_evento,
        'data_evento'=>$request->data_evento,
        'status'=>$request->status,
    ]);
    if($reg){
        return redirect('eventos');
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($codigo_evento)
  {
    $evento=ModelEvento::find($codigo_evento);
    return view('show',compact('evento'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($codigo_evento)
  {
    $evento=$this->objEvento->find($codigo_evento);
    return view('create',compact('evento'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(EventoRequest $request, $codigo_evento)
  {

    $this->objEvento->where(['codigo_evento'=>$codigo_evento])->update([
        'nome_evento'=>$request->nome_evento,
        'local_evento'=>$request->local_evento,
        'data_evento'=>$request->data_evento,
        'status'=>$request->status,
    ]);
    return redirect('eventos');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($codigo_evento)
  {
    $delete=ModelEvento::destroy($codigo_evento);
    return($delete)?"sim":"não";
  }


  public function export()
  {
      return Excel::download(new EventoExport, 'export_eventos.xlsx');
  }
}
