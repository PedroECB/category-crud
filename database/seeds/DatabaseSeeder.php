<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('CategoriaTableSeeder');
    }

}

 class CategoriaTableSeeder extends Seeder
{
    public function run()
    {
        
        DB::insert('insert into categorias (categoria, descricao) values (?, ?)', ['Eletrônicos', '@EletronicosMobile']);

        DB::insert('insert into categorias (categoria, descricao) values (?, ?)', ['Celulares', '@MobilesEngines']);

        DB::insert('insert into categorias (categoria, descricao) values (?, ?)', ['Computadores', '@PcGamers']);
        
    }
}
