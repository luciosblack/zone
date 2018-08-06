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

		
		//cria variável com a data da criação da consulta
		//$dt_validade = gmstrftime(" %d de %B de %Y", strtotime( $consulta->created_at ));

		$dt_validade = $this->dataEmPortugues(strtotime($consulta->created_at), false);

		return view('relatorio', compact('logradouro', 'zona','qrcode','dt_validade'));
	}
	 
	public function imprimirValidacao($validacao) 
	{

		$consulta = Consulta::where('validador', $validacao)->first();

		$logradouro = $consulta->endereco;

		// Buscar a zona pelo id
		$zona = json_decode($consulta->valores);

		
		//cria variável com a data da criação da consulta
		$dt_validade = $this->dataEmPortugues(strtotime($consulta->created_at), false);

		//coloca o qrcode na variável para enviar ao relatorio 
		$qrcode = $validacao;

		return view('relatorio', compact('logradouro', 'zona','qrcode','dt_validade'));
		
	}

	function dataEmPortugues ($timestamp, $hours = FALSE) {

		$dia_num = date("w", $timestamp);// Dia da semana.

		if($dia_num == '0'){
			$dia_nome = "Domingo";
		}elseif($dia_num == '1'){
			$dia_nome = "Segunda";
		}elseif($dia_num == '2'){
			$dia_nome = "Terça";
		}elseif($dia_num == '3'){
			$dia_nome = "Quarta";
		}elseif($dia_num == '4'){
			$dia_nome = "Quinta";
		}elseif($dia_num == '5'){
			$dia_nome = "Sexta";
		}else{
			$dia_nome = "Sábado";
		}

		$dia_mes = date("d", $timestamp);// Dia do mês

		$mes_num = date("m", $timestamp);// Nome do mês

		if($mes_num == '01'){
			$mes_nome = "Janeiro";
		}elseif($mes_num == '02'){
			$mes_nome = "Fevereiro";
		}elseif($mes_num == '03'){
			$mes_nome = "Março";
		}elseif($mes_num == '04'){
			$mes_nome = "Abril";
		}elseif($mes_num == '05'){
			$mes_nome = "Maio";
		}elseif($mes_num == '06'){
			$mes_nome = "Junho";
		}elseif($mes_num == '07'){
			$mes_nome = "Julho";
		}elseif($mes_num == '08'){
			$mes_nome = "Agosto";
		}elseif($mes_num == '09'){
			$mes_nome = "Setembro";
		}elseif($mes_num == '10'){
			$mes_nome = "Outubro";
		}elseif($mes_num == '11'){
			$mes_nome = "Novembro";
		}else{
			$mes_nome = "Dezembro";
		}
		$ano = date("Y", $timestamp);// Ano

		date_default_timezone_set("America/Sao_Paulo"); // Set time-zone
		$hora = date ("H:i", $timestamp);

		if ($hours) {
			return /* $dia_nome.", ". */$dia_mes." de ".$mes_nome." de ".$ano." - ".$hora;
		}
		else {
			return /* $dia_nome.", ". */$dia_mes." de ".$mes_nome." de ".$ano;
		}
	}
	 
}
