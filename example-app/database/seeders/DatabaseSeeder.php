<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'camnhi',
        //     'email' => 'camnhi@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'phone' => '213456789',
        //     'image' => 'abc' . '.png',

        // ]);

        // for ($i = 0; $i < 10; $i++) {
        //     # code...

        //     DB::table('users')->insert([
        //         'name' => Str::random(10),
        //         'phone' => random_int(1000000000, 9999999999),
        //         'image' => Str::random(10) . '.png',
        //         'email' => Str::random(10) . '@gmail.com',
        //         'password' => Hash::make('123456'),
        //     ]);
        // }
        $this->call(UserSeeder::class);
        $this->call(UserFavoriteSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(FavoriteSeeder::class);
    }
}
