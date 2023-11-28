<?php

namespace Database\Seeders;
use App\Models\PostsSocial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PostsSocial::factory(10)->create();
    }
}
