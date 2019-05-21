<?php

use Illuminate\Database\Seeder;

class menu_type_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['article','gallery','pages','portofolio','promo','product','service','video'];


        for($i=0;$i<count($name);$i++){

            App\MenuType::create([
                'name'=> $name[$i],
                'slug'=> str_slug($name[$i]),
                'route'=> $name[$i].'.index',
            ]);
        }
    }
}
