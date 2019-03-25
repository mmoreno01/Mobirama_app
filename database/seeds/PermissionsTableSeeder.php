<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // users

        Permission::create([
            'name' => 'Navergar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

       
        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',
            'description' => 'Ver en detalle de  cada usuario del sistema ',
        ]);

       
        Permission::create([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

      
        Permission::create([
            'name' => 'Eliminiar usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema',
        ]);

        // Roles

         Permission::create([
            'name' => 'Navergar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);

       
        Permission::create([
            'name' => 'Ver detalle de rol',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle de  cada rol del sistema ',
        ]);

        Permission::create([
            'name' => 'Creacion de roles',
            'slug' => 'roles.create',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);
      
        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);

        
        Permission::create([
            'name' => 'Eliminiar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema',
        ]);

        

        //products

        Permission::create([
            'name' => 'Navergar productos',
            'slug' => 'products.index',
            'description' => 'Lista y navega todos los productos del sistema',
        ]);

       
        Permission::create([
            'name' => 'Ver detalle de roproductol',
            'slug' => 'products.show',
            'description' => 'Ver en detalle de  cada producto del sistema ',
        ]);

        Permission::create([
            'name' => 'Creacion de productos',
            'slug' => 'products.create',
            'description' => 'Lista y navega todos los productos del sistema',
        ]);
      
        Permission::create([
            'name' => 'Edicion de productos',
            'slug' => 'products.edit',
            'description' => 'Lista y navega todos los productos del sistema',
        ]);

        
        Permission::create([
            'name' => 'Eliminiar producto',
            'slug' => 'products.destroy',
            'description' => 'Eliminar cualquier producto del sistema',
        ]);
    }
}
