<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Graph;
use App\Node;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        factory(Graph::class, 50)->create();
        factory(Node::class, 50)->create();

    }
}
