<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'	=> 'Navegar usuarios',
            'slug' =>	'users.index',
            'description' => 'Lista y Navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'	=> 'Ver detalle de  usuarios',
            'slug' =>	'users.show',
            'description' => 'Ver en detalle cada usuarios del sistema',
        ]);

        Permission::create([
            'name'	=> 'Edición de usuarios',
            'slug' =>	'users.edit',
            'description' => 'Editar cualquier dato de un usuarios del sistema',
        ]);

        Permission::create([
            'name'	=> 'Eliminar usuarios',
            'slug' =>	'users.destroy',
            'description' => 'Eliminar cualquier usuarios del sistema',
        ]);



        // Roles
        Permission::create([
            'name'	=> 'Navegar roles',
            'slug' =>	'roles.index',
            'description' => 'Lista y Navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'	=> 'Ver detalle de  rol',
            'slug' =>	'roles.show',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'	=> 'Creacion de roles',
            'slug' =>	'roles.create',
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'	=> 'Edición de roles',
            'slug' =>	'roles.edit',
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'	=> 'Eliminar rol',
            'slug' =>	'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema',
        ]);

    }
}
