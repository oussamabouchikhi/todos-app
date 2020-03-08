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
        // generate 10 fake todos
        factory(App\Todo::class, 10)->create();
    }
}
