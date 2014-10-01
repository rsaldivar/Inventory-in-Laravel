<?php

/**
* Agregamos los perfiles que puede tomar un Usuario
*/
class ProfilesTableSeeder extends Seeder {
    public function run(){
        //PERFILES PARA UN ADMINITRADOR DE SISTEMA
        DB::table('profiles')->insert(array(
            'name'              => 'Administrator General',
            'description'       => 'ABC Usuarios, ABC Perfiles, ABC Permisos',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Administrator Usuarios',
            'description'       => 'Asigna, Crear, Elimina y Modifica Usuarios',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Administrator Perfiles',
            'description'       => 'Asigna, Crear, Elimina y Modifica Perfiles',
            'status'            => 'active'
        )); 

        DB::table('profiles')->insert(array(
            'name'              => 'Administrator Permisos',
            'description'       => 'Asigna, Crear, Elimina y Modifica Permisos',
            'status'            => 'active'
        )); 
        //PERFILES DE UN EMPLEADO
        ));  DB::table('profiles')->insert(array(
            'name'              => 'Empleado Consulta',
            'description'       => 'Consulta de Inventario',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Empleado Alta',
            'description'       => 'Empleado que da de ALta productos',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Empleado Baja',
            'description'       => 'Empleado que modifica productos',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Empleado Modifica',
            'description'       => 'Empleado que elimina productos',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Empleado ABC',
            'description'       => 'Super Empleado',
            'status'            => 'active'
        )); 
        //PERFILES PARA UN CLIENTE
        DB::table('profiles')->insert(array(
            'name'              => 'Cliente Consulta',
            'description'       => 'Consulta Productos',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Cliente Alta',
            'description'       => 'Consulta Productos',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Cliente Baja',
            'description'       => 'Consulta Productos',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Cliente Modifica',
            'description'       => 'Consulta Productos',
            'status'            => 'active'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Cliente ABC',
            'description'       => 'Consulta Productos',
            'status'            => 'active'
        )); 
    }
}