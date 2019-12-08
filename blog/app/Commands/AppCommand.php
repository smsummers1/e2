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
        $this->app->db()->createTable('posts', [
            'title' => 'varchar(255)',
            'content' => 'text',
        ]);
        
        dump('Migration Complete.');
    }
    
    public function seed()
    {
        
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 posts
        for ($i = 0; $i < 10; $i++) {

            # Set up a post
            $post = [
                'title' => $faker->words(rand(2,5), true),
                'content' => $faker->sentences(rand(3,10), true),
            ];

            # Insert the post
            $this->app->db()->insert('posts', $post);
        }
        
        dump('Seed Complete.');   
    }
    
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}

