<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run()
    {
        $this->call(Pessoas::class);
                
        $this->command->info('Tables seeded!');
    }
}