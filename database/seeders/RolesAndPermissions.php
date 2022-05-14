<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cache roles y permisos
         app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
         // creando los permisos
 
       // this can be done as separate statements
         // Rol super admin
         $role1 = Role::create(['name' => 'admin']);
         $role2 = Role::create(['name' => 'productor']); 
          // Rol admin
         
         // Rol invitado
       //  $role3 = Role::create(['name' => 'invitado']);

          // Rol usuarios del sistema
          Permission::create(['name' => 'admin.producto'])->syncRoles([$role1,$role2]);
          Permission::create(['name' => 'admin.user'])->syncRoles([$role1]);
          Permission::create(['name' => 'product.edit'])->syncRoles([$role2]);
         // Permission::create(['name' => 'product.carrito'])->syncRoles([$role3,$role1]);

    }
}
