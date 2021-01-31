<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

use App\Models\User;
use App\Models\Book;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'carolina@ejcm.com.br',
            'password' => 'senha123'
        ]);

        User::factory()->count(5)->create()->each(function ($user) {
            $book = Book::factory()->count(2)->make();

            // Estabelecendo a relacao entre User e Book
            $user->books()->saveMany($book);
        });
    }
}
