<?php

use Illuminate\Database\Seeder;

class UsosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		DB::table('usos')->insert(['codigo' => 'R1',		'descricao' => 'Residencial Unifamiliar']);
		DB::table('usos')->insert(['codigo' => 'R2',		'descricao' => 'Residencial Multifamiliar']);
		DB::table('usos')->insert(['codigo' => 'R3',		'descricao' => 'Grupamento Residencial']);
		
		DB::table('usos')->insert(['codigo' => 'C1',		'descricao' => 'Comércio e Serviço Vicinal - Até 70,00 m2']);
		DB::table('usos')->insert(['codigo' => 'C2',		'descricao' => 'Comércio e Serviço Local - De 70,01 m2 a 300,00 m2']);
		DB::table('usos')->insert(['codigo' => 'C3',		'descricao' => 'Comércio e Serviço Regional - Acima de 300,00 m2']);
		
		DB::table('usos')->insert(['codigo' => 'I1',		'descricao' => 'Indústrias Artesanais']);
		DB::table('usos')->insert(['codigo' => 'I2',		'descricao' => 'Indústrias de Pequeno Porte']);
		DB::table('usos')->insert(['codigo' => 'I3',		'descricao' => 'Indústrias de Médio Porte']);
		DB::table('usos')->insert(['codigo' => 'I4',		'descricao' => 'Indústrias de Grande Porte']);
		
		DB::table('usos')->insert(['codigo' => 'IEd1',	'descricao' => 'Institucional - Educação 1 - Até 100,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IEd2',	'descricao' => 'Institucional - Educação 2 - De 100,01 m2 a 500,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IEd3',	'descricao' => 'Institucional - Educação 3 - Acima de 500,00 m2']);
		
		DB::table('usos')->insert(['codigo' => 'IS1',	'descricao' => 'Institucional - Saúde 1 - Até 100,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IS2',	'descricao' => 'Institucional - Saúde 2 - De 100,01 m2 a 500,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IS3',	'descricao' => 'Institucional - Saúde 3 - Acima de 500,00 m2']);
		
		DB::table('usos')->insert(['codigo' => 'IECL1',	'descricao' => 'Institucional - Esporte, Cultura e Lazer 1 - Até 100,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IECL2',	'descricao' => 'Institucional - Esporte, Cultura e Lazer 2 - De 100,01 m2 a 300,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IECL3',	'descricao' => 'Institucional - Esporte, Cultura e Lazer 3 - Acima de 300,00 m2']);
		
		DB::table('usos')->insert(['codigo' => 'IR',		'descricao' => 'Institucional - Religioso']);
		
		DB::table('usos')->insert(['codigo' => 'ISer1',	'descricao' => 'Institucional - Serviços 1 - Até 100,00 m2']);
		DB::table('usos')->insert(['codigo' => 'ISer2',	'descricao' => 'Institucional - Serviços 2 - De 100,01 m2 a 300,00 m2']);
		DB::table('usos')->insert(['codigo' => 'ISer3',	'descricao' => 'Institucional - Serviços 3 - Acima de 300,00 m2']);

		DB::table('usos')->insert(['codigo' => 'IT1',	'descricao' => 'Institucional - Transporte 1 - Até 100,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IT2',	'descricao' => 'Institucional - Transporte 2 - De 100,01 m2 a 300,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IT3',	'descricao' => 'Institucional - Transporte 3 - De 300,01 m2 a 700,00 m2']);
		DB::table('usos')->insert(['codigo' => 'IT4',	'descricao' => 'Institucional - Transporte 4 - Acima de 700,00 m2']);

		DB::table('usos')->insert(['codigo' => 'M1',		'descricao' => 'Misto - Residencial, Comercial e Rep. Serv.']);
		DB::table('usos')->insert(['codigo' => 'M2',		'descricao' => 'Misto - Residencial e Industrial Artesanal']);
		DB::table('usos')->insert(['codigo' => 'M3',		'descricao' => 'Misto - Residencial e Industrial']);
		DB::table('usos')->insert(['codigo' => 'M4',		'descricao' => 'Misto - Industrial, Comercial e Prestador de Serviços']);

		DB::table('usos')->insert(['codigo' => 'RU',		'descricao' => 'Rural']);


	}
}
