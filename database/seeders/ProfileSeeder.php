<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Profile::factory(20)->create();
        /*DB::table('profiles')->insert([
            'name' => Str::random(20),
            'email' => Str::random(10)."@gmail.com",
            'password' => bcrypt('password'),
            'bio' => Str::random(255),
        ]);*/
    }
}
