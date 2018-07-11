<?php

use Illuminate\Database\Seeder;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		DB::table('zonas')->insert([	'nome'						=> 'Área de Ocupação Prioritária 1',
												'sigla'						=> 'AOP1',
												'testada'					=> '10',
												'area'						=> '125',
												'coeficiente_min'			=> '0.4',
												'coeficiente_bas'			=> '1.0',
												'coeficiente_max'			=> '6.0',
												'afastamento'				=> '2.5',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/50m2',
											]);

		DB::table('zonas')->insert([	'nome'						=> 'Área de Ocupação Prioritária 2',
												'sigla'						=> 'AOP2',
												'testada'					=> '20',
												'area'						=> '1000',
												'coeficiente_min'			=> '0.3',
												'coeficiente_bas'			=> '1.0',
												'coeficiente_max'			=> '4.5',
												'afastamento'				=> '10.0',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/100m2',
											]);											

		DB::table('zonas')->insert([	'nome'						=> 'Área de Adensamento Controlado',
												'sigla'						=> 'AAC',
												'testada'					=> '10',
												'area'						=> '125',
												'coeficiente_min'			=> '0.3',
												'coeficiente_bas'			=> '1.0',
												'coeficiente_max'			=> '4.0',
												'afastamento'				=> '3.0',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/50m2',
											]);

		DB::table('zonas')->insert([	'nome'						=> 'Área de Restrição ao Adensamento',
												'sigla'						=> 'ARA',
												'testada'					=> '10',
												'area'						=> '125',
												'coeficiente_min'			=> '0.2',
												'coeficiente_bas'			=> '1.0',
												'coeficiente_max'			=> '3.0',
												'afastamento'				=> '4.0',
												'tx_ocupacao'				=> '70%',
												'tx_permeabilidade'		=> '20%',
												'vagas_estacionamento'	=> '1/50m2',
											]);
											

    }
}
