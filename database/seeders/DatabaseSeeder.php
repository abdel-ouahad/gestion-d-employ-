<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Departement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if ($this->command->confirm('do you want refresh the database before seeding ? ', true)
        ) {
            $this->command->call('migrate:refresh');
            $this->command->info('the database was refreshed and seeding succesfully !');
        }

        \App\Models\User::factory(1)->create();


        
        // $depart = Departement::all();
        // \App\Models\Employe::factory(100)->make()->each(function($employe)use ($depart){
        //     $employe->departements_id = $depart->random()->id;
        //     $employe->save();
        // });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
