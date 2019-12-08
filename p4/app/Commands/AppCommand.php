<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }
    
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'win' => 'tinyint(1)',
            'numGuesses' => 'int(11)',
        ]);
        
        dump('Migration Complete.');
    }
    
    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 posts
        for ($i = 0; $i < 10; $i++) {

            # Set up a round
            $round = [
                'win' => $faker->numberBetween(0,1),
                'numGuesses' => $faker->numberBetween(1, 50),
            ];

            # Insert the round
            $this->app->db()->insert('rounds', $round);
        }
        dump('Seed Complete.');   
    }
    
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
