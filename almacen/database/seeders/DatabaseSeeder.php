<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(tipoAdquisicion::class);
        $this->call(areaSeeder::class);
        $this->call(campusSeeder::class);
        $this->call(edificioSeeder::class);
        $this->call(equipoSeeder::class);
        $this->call(personaleSeeder::class);
        $this->call(firmaSeeder::class);
        $this->call(consultaSeeder::class);

        User::create([
            'name' => 'Abraham Duran',
            'email' => 'a@gmail.com',
            'password' => 'admin123',
        ]);

    }
}
