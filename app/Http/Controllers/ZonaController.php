<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use App\Models\Uso;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
	public function buscaZona(Request $request)
	{
		//$zona = DB::table('zonas')->where('sigla', $request->sigla)->first();   
		
		$zona = Zona::where('sigla', $request->sigla)->with('usos')->first();

		//$z2 = Zona::find($zona->id)->usos()->get();

		$resposta = [
			$zona->toJson(),
			$zona->usos,
		];
		
		return json_encode($zona);
    }

    public function imprimirRelatorio(Request $request) {

   		$logradouro = $request->campo_pesquisa;
   		$id_zona = $request->id_zona;

   		// Buscar a zona pelo id
   		$zona = Zona::find($id_zona)->with('usos')->first();

   		return view('relatorio', compact('logradouro', 'zona'));

    }
}
