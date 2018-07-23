<?php

use Illuminate\Database\Seeder;
use App\Models\Uso;
use App\Models\Zona;



class UsosZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $zonaID = Zona::where('sigla', '=', 'AOP_I')->first()->id; 

        // $usoID  = Uso::where('codigo', '=', 'R1')->first()->id;
        $usoID = 1;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T']); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P']); $usoID++;


        $zonaID = Zona::where('sigla', '=', 'AOP_II')->first()->id; 
        $usoID = 1;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;


        $zonaID = Zona::where('sigla', '=', 'AAC_a')->first()->id; 
        $usoID = 1;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;

        $zonaID = Zona::where('sigla', '=', 'AAC_b')->first()->id; 
        $usoID = 1;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;

        $zonaID = Zona::where('sigla', '=', 'ARA_a')->first()->id; 
        $usoID = 1;

            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;


        $zonaID = Zona::where('sigla', '=', 'ARA_b')->first()->id; 
        $usoID = 1;

            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'T' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'A' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
            DB::table('usos_zonas')->insert(['zonas_id' => $zonaID ,'usos_id' => $usoID, 'uso' => 'P' ]); $usoID++;
    }
}
