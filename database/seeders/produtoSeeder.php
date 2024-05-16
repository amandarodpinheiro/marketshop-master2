<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('produtos')->insert([
            [
                'nome'=>'camiseta vermelha',
                'descricão' =>'camiseta para ser usada como camiseta, cor é vermelha.',
                'Valor' => 129,
                'foto' =>'https://br.freepik.com/fotos-vetores-gratis/camiseta-vermelha'
            ],
              [
            
                'nome' => 'perfume importado',
                'descrição' =>'perfume importado La vie Est Belle',
                'Valor'=> '400,00',
                'Foto'=> 'https://www.belezanaweb.com.br/la-vie-est-belle-lancome-eau-de-parfum-perfume-feminino-100ml/'
              ],
                
              ['nome'=> 'perfume importado',
                'descrição'=> 'perfume importado good girl',
                'valor'=> '470,00',
                'foto'=> 'https://www.lapartier.com.br/perfume-importado-feminino-good-girl-carolina-herrera-eau-de-parfum-100-ml'
            ],
         
        ]);
    
    }
}
