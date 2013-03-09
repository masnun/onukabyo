<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username = "masnun";
        $user->password = Hash::make("1234");
        $user->email = "masnun@gmail.com";
        $user->name = "Abu Ashraf Masnun";

        $user->save();

    }
}