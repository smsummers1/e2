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
            'total_guesses' => 'int(3)',
            'date' => 'timestamp'
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
                'total_guesses' => $faker->numberBetween(1, 50)
                //'date' => $faker->dateTime('now', null)
                //kept getting an error when I used faker data for the timestamp, so I just allowed the database to populate that field instead of the faker application
                //here is the error I kept getting:  
                //PHP Recoverable fatal error:  Object of class DateTime could not be converted to string in /Applications/XAMPP/xamppfiles/htdocs/e2/p4/vendor/susanbuck/e2core/src/Database.php on line 33

                //Recoverable fatal error: Object of class DateTime could not be converted to string in /Applications/XAMPP/xamppfiles/htdocs/e2/p4/vendor/susanbuck/e2core/src/Database.php on line 33
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
