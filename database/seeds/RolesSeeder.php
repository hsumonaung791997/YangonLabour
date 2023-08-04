<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin=Role::create([

        	"name" =>"SuperAdmin",
        	"slug" => "superadmin",
        	"permissions" =>json_encode([
        		'main-place' =>true,
        		'internal-place' =>true,
        		'external-page' =>true,

        	]),

        ]);

           $reguser=Role::create([

        	"name" =>"Region Users",
        	"slug" => "reguser",
        	"permissions" =>json_encode([
        		'external-page' =>true,

        	]),

        ]);

        $disuser=Role::create([

        	"name" =>"disUser",
        	"slug" => "disuser",
        	"permissions" =>json_encode([
        		'city-page' =>true,

        	]),

        ]);

         $townuser=Role::create([

            "name" =>"townUser",
            "slug" => "tounUser",
            "permissions" =>json_encode([
                'create-post' =>true,

            ]),

        ]);

        
   }
}
