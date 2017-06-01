<?php
/* Arquivo Controller, onde todas as informacoes e returns são dadas */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nota;
use Redirect;
use App\http\Controllers\Controller;
use DB;
use Auth;

class NotasController extends Controller
{
    public function index() {

    	$notas = Nota::where('id_usuario', '=', Auth::id())->get();

    	return view('notas/lista', ['notas' => $notas]);
    }
    public function novo() {
    	return view('notas/formulario');
    }
    public function salvar(Request $request) {

        $this->validate($request, [
            'd1_p1' => 'required|max:10',
            'd1_p2' => 'required|max:7',
            'atv_d1' => 'required|max:3',
            'd1_p3' => 'required|max:10'
            ]);        

        $nota = new Nota();

        $nota = $nota -> create($request -> all());


        \Session::flash('mensagem_sucesso', 'Notas Cadastradas com sucesso!');

        return Redirect::to('notas/novo');
    }

    public function editar($id) {

       $nota = Nota::findOrFail($id);

       return view('notas/formulario', ['nota' => $nota]);

   }
    public function atualizar($id, Request $request) {

   $nota = Nota::findOrFail($id);

   $nota->update($request->all());

   \Session::flash('mensagem_sucesso', 'Notas Atualizadas com sucesso!');


   return Redirect::to('notas/'.$nota->id.'/editar');
}

   public function deletar($id) {
   $nota = Nota::findOrFail($id);

   $nota->delete();

   \Session::flash('mensagem_sucesso', 'Notas Removidas com sucesso!');


   return Redirect::to('notas');
}
   public  function mostrar() {

    $notas = Nota::where('id_usuario', '=', Auth::id())->get();

    return view('notas/mostrar', ['notas' => $notas]);

}
  public function sobre() {
    return view('/sobre');
  }

  public function mercado() {
    return view('/mercado');
  }
  
  public function materias() {
    return view('/materias');
  }

  public function home() {
    return view('/welcome');
  }
}
