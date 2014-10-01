<?php

/**
* Agregamos los permisos que tiene el Perfil de usuario
*/
class PermissionsTableSeeder extends Seeder {
    public function run(){

        DB::table('profiles')->insert(array(
            'name'              => 'Administratar'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Administra Productos   '
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Administra Clientes'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Administra Empleados'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Administra Usuarios'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Consulta Productos'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Consulta Clientes'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Consulta Empleados'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Consulta Usuarios'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Consulta Usuario Perfil'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Alta Productos'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Alta Clientes'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Alta Usuarios'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Alta Empleados'
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Elimina Productos '
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Elimina Clientes '
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Elimina Empleados '
        )); 
        DB::table('profiles')->insert(array(
            'name'              => 'Elimina Usuarios '
        )); 
    }
}