<?php

use Illuminate\Database\Seeder;
use App\Models\Zona;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		DB::table('zonas')->insert([	'nome'						=> 'Área de Ocupação Prioritária I',
												'sigla'						=> 'AOP_I',
												'testada'					=> '10,00 m',
												'area'						=> '125,00 m2 cada lote',
												'coeficiente_min'			=> '0,4',
												'coeficiente_bas'			=> '1,0',
												'coeficiente_max'			=> '6,0',
												'afastamento'				=> '2,50 m',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/50 m2',
											]);

		DB::table('zonas')->insert([	'nome'						=> 'Área de Ocupação Prioritária II',
												'sigla'						=> 'AOP_II',
												'testada'					=> '20,00 m',
												'area'						=> '1000,00 m2 cada lote',
												'coeficiente_min'			=> '0,3',
												'coeficiente_bas'			=> '1,0',
												'coeficiente_max'			=> '4,5',
												'afastamento'				=> '10,00 m',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/100 m2',
											]);											

		DB::table('zonas')->insert([	'nome'						=> 'Área de Adensamento Controlado I',
												'sigla'						=> 'AAC_I',
												'testada'					=> '10,00 m',
												'area'						=> '125,00 m2 cada lote',
												'coeficiente_min'			=> '0,3',
												'coeficiente_bas'			=> '1,0',
												'coeficiente_max'			=> '4,0',
												'afastamento'				=> '3,00 m',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/50 m2',
											]);

		DB::table('zonas')->insert([	'nome'						=> 'Área de Adensamento Controlado II',
												'sigla'						=> 'AAC_II',
												'testada'					=> '10,00 m',
												'area'						=> '125,00 m2 cada lote',
												'coeficiente_min'			=> '0,3',
												'coeficiente_bas'			=> '1,0',
												'coeficiente_max'			=> '4,0',
												'afastamento'				=> '3,00 m',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/50 m2',
											]);


		DB::table('zonas')->insert([	'nome'						=> 'Área de Restrição ao Adensamento I',
												'sigla'						=> 'ARA_I',
												'testada'					=> '10,00 m',
												'area'						=> '125,00 m2 cada lote',
												'coeficiente_min'			=> '0,2',
												'coeficiente_bas'			=> '1,0',
												'coeficiente_max'			=> '3,0',
												'afastamento'				=> '4,00 m',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/50 m2',
											]);

		DB::table('zonas')->insert([	'nome'						=> 'Área de Restrição ao Adensamento II',
												'sigla'						=> 'ARA_II',
												'testada'					=> '10,00 m',
												'area'						=> '125,00 m2 cada lote',
												'coeficiente_min'			=> '0,2',
												'coeficiente_bas'			=> '1,0',
												'coeficiente_max'			=> '3,0',
												'afastamento'				=> '4,00 m',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/50 m2',
											]);
											

    }
}
