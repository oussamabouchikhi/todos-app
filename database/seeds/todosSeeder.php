<?php

use Illuminate\Database\Seeder;

class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // generate 5 fake todos
        //! if you change number dont forget to migrate (php artisan migrate:refresh) then (php artisan db:seed)
        // or php artisan migrate:refresh --seed (shortcut for both)
        factory(App\Todo::class, 5)->create();
    }
}
