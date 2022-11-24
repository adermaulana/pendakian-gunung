<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'Ade Rahmat Maulana',
            'username' => 'adermaulana',
            'email' => 'adermaulana15@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Dandi Saputra',
        //     'email' => 'dandisaputra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'nama' => 'Nature',
            'slug' => 'nature'
        ]);

        Category::create([
            'nama' => 'Mountain',
            'slug' => 'mountain'
        ]);

        Category::create([
            'nama' => 'Hiking',
            'slug' => 'hiking'
        ]);

        Category::create([
            'nama' => 'Destination',
            'slug' => 'destination'
        ]);

        Category::create([
            'nama' => 'Human',
            'slug' => 'human'
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'HTML',
        //     'slug' => 'html',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rem doloremque similique possimus tempore quasi necessitatibus voluptates.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rem doloremque similique possimus tempore quasi necessitatibus voluptates. Dolore omnis inventore eius porro ullam assumenda repellat labore, odit ipsum aliquid tempora vel impedit, quos a rem ipsa recusandae doloribus laboriosam nobis eveniet quo quam voluptatem natus? At nemo debitis quibusdam quasi illum sit ratione error perferendis, officia, pariatur obcaecati incidunt nam velit distinctio est illo! Magnam neque maxime provident cumque ab quisquam mollitia explicabo architecto harum reiciendis, dolore pariatur officiis facere inventore atque, at enim eos similique deserunt eveniet adipisci dignissimos! Iure natus cum autem veniam corrupti totam libero labore laudantium.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Komunikasi',
        //     'slug' => 'komunikasi',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rem doloremque similique possimus tempore quasi necessitatibus voluptates.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rem doloremque similique possimus tempore quasi necessitatibus voluptates. Dolore omnis inventore eius porro ullam assumenda repellat labore, odit ipsum aliquid tempora vel impedit, quos a rem ipsa recusandae doloribus laboriosam nobis eveniet quo quam voluptatem natus? At nemo debitis quibusdam quasi illum sit ratione error perferendis, officia, pariatur obcaecati incidunt nam velit distinctio est illo! Magnam neque maxime provident cumque ab quisquam mollitia explicabo architecto harum reiciendis, dolore pariatur officiis facere inventore atque, at enim eos similique deserunt eveniet adipisci dignissimos! Iure natus cum autem veniam corrupti totam libero labore laudantium.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'LARAVEL 9',
        //     'slug' => 'laravel-9',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rem doloremque similique possimus tempore quasi necessitatibus voluptates.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rem doloremque similique possimus tempore quasi necessitatibus voluptates. Dolore omnis inventore eius porro ullam assumenda repellat labore, odit ipsum aliquid tempora vel impedit, quos a rem ipsa recusandae doloribus laboriosam nobis eveniet quo quam voluptatem natus? At nemo debitis quibusdam quasi illum sit ratione error perferendis, officia, pariatur obcaecati incidunt nam velit distinctio est illo! Magnam neque maxime provident cumque ab quisquam mollitia explicabo architecto harum reiciendis, dolore pariatur officiis facere inventore atque, at enim eos similique deserunt eveniet adipisci dignissimos! Iure natus cum autem veniam corrupti totam libero labore laudantium.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

    }
}    
