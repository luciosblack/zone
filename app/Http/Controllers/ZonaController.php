<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use App\Models\Uso;
use App\Models\Consulta;

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

		//converte os dados da ZONA pesquisados em JSON
		$dados_zona = json_encode($zona, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
			
		//salvado a consulta
		$consulta = new Consulta;
		$consulta->validador 	= strtr(bcrypt($consulta->id), '+/', '-_');
		$consulta->endereco 		= $logradouro;
		$consulta->valores  		= $dados_zona;
		$consulta->save();
		  
		$qrcode = $consulta->validador;

		//configura o formato de dat e hora
		setlocale(LC_ALL, 'pt_BR.UTF-8');
		//date_default_timezone_set('America/Sao_Paulo');
	
		//cria variável com a data da criação da consulta
		$dt_validade = gmstrftime(" %d de %B de %Y", strtotime( $consulta->created_at ));


		return view('relatorio', compact('logradouro', 'zona','qrcode','dt_validade'));
	}
	 
	public function imprimirValidacao($validacao) 
	{

		$consulta = Consulta::where('validador', $validacao)->first();

		$logradouro = $consulta->endereco;

		// Buscar a zona pelo id
		$zona = json_decode($consulta->valores);

		//configura o formato de dat e hora
		setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
		date_default_timezone_set('America/Sao_Paulo');
	
		//cria variável com a data da criação da consulta
		$dt_validade = gmstrftime(" %d de %B de %Y", strtotime( $consulta->created_at ));

		//coloca o qrcode na variável para enviar ao relatorio 
		$qrcode = $validacao;

		return view('relatorio', compact('logradouro', 'zona','qrcode','dt_validade'));
		
	}
	 
	 
}
