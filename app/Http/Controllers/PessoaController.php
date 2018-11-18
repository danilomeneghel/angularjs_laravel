<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Models\Pessoas;
use App\Http\Requests;

class PessoaController extends Controller {
    // Listar pessoas
    public function lista() {
    	return Pessoas::all();
    }

    // Cadastrar pessoa
    public function novo(Request $request) {
    	$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw

    	return Pessoas::insertGetId($data);
    }

    // Editar pessoa
	  public function editar($id, Request $request) {
  		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw

  		$res = Pessoas::where('id',$id)->update($data);

  		return ["status" => ($res)?'ok':'erro'];
    }

	  // Excluir pessoa
    public function excluir($id) {
    	$res = Pessoas::where('id',$id)->delete();

    	return ["status" => ($res)?'ok':'erro'];
    }
}
