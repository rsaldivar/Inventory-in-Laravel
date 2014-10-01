<?php

/**
* Agregamos usuarios por default a la base de datos.
*/
class UsersTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'username'  => 'administrator',
            'email'     => 'roberto.saldivararm@gmail.com',
            'name'=> 'Administrator',
            'password' => Hash::make('adminadmin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        )); 
        User::create(array(
            'username'  => 'admin',
            'email'     => 'admin',
            'name'=> 'Administrator',
            'password' => Hash::make('adminadmin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}