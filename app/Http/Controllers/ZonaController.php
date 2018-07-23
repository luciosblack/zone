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
}
