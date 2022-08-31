<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Virgi Septian',
                'email' => 'virgiseptian77@gmail.com',
                'password' => bcrypt('123')
            ]
        );

        Category::create([
            'name' => 'Web Programming' , 
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal' , 
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Post Pertama', 
            'slug' => 'judul-post-pertama', 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis tenetur et similique sit, quisquam esse illo dolores eos placeat culpa ab ratione accusamus repudiandae quibusdam sed voluptas fuga consequuntur laboriosam molestiae nesciunt nemo nisi ut.', 
            'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis tenetur et similique sit, quisquam esse illo dolores eos placeat culpa ab ratione accusamus repudiandae quibusdam sed voluptas fuga consequuntur laboriosam molestiae nesciunt nemo nisi ut. Repellat, illo officiis perferendis rerum consequatur ipsam natus accusamus animi voluptatem in vel iure. Error mollitia deserunt eos. Non fugiat officiis neque cupiditate cumque autem rem hic repudiandae quia omnis eos dicta quos pariatur doloribus nemo libero est, delectus, quaerat soluta voluptate mollitia nesciunt et ipsa facere! Tempore in adipisci</p> <p>nesciunt possimus ipsam doloribus vero enim, dolorem nemo iusto sed alias saepe soluta ducimus minus sint architecto eaque accusamus exercitationem quidem necessitatibus asperiores! Temporibus sapiente molestias eum illum itaque autem nostrum debitis officia quis? Quia animi cum, dicta doloremque architecto vel recusandae deleniti adipisci asperiores odio dignissimos veritatis voluptatem libero nulla sunt possimus. Harum aperiam inventore minima consequuntur distinctio corporis iure deserunt officia incidunt?</p> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis veniam quod nobis temporibus consequatur incidunt, impedit maxime totam minus officiis quia eveniet sed reprehenderit, nostrum ut fugit ipsam iusto accusantium tempora est. Laudantium suscipit sit doloribus dolore tenetur! Sapiente, ab?</p>',
            'category_id' => 1, 
            'user_id' => 1 
        ]);
         
        Post::create([
            'title' => 'Judul Post Kedua', 
            'slug' => 'judul-post-kedua', 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis tenetur et similique sit, quisquam esse illo dolores eos placeat culpa ab ratione accusamus repudiandae quibusdam sed voluptas fuga consequuntur laboriosam molestiae nesciunt nemo nisi ut.', 
            'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis tenetur et similique sit, quisquam esse illo dolores eos placeat culpa ab ratione accusamus repudiandae quibusdam sed voluptas fuga consequuntur laboriosam molestiae nesciunt nemo nisi ut. Repellat, illo officiis perferendis rerum consequatur ipsam natus accusamus animi voluptatem in vel iure. Error mollitia deserunt eos. Non fugiat officiis neque cupiditate cumque autem rem hic repudiandae quia omnis eos dicta quos pariatur doloribus nemo libero est, delectus, quaerat soluta voluptate mollitia nesciunt et ipsa facere! Tempore in adipisci</p> <p>nesciunt possimus ipsam doloribus vero enim, dolorem nemo iusto sed alias saepe soluta ducimus minus sint architecto eaque accusamus exercitationem quidem necessitatibus asperiores! Temporibus sapiente molestias eum illum itaque autem nostrum debitis officia quis? Quia animi cum, dicta doloremque architecto vel recusandae deleniti adipisci asperiores odio dignissimos veritatis voluptatem libero nulla sunt possimus. Harum aperiam inventore minima consequuntur distinctio corporis iure deserunt officia incidunt?</p> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis veniam quod nobis temporibus consequatur incidunt, impedit maxime totam minus officiis quia eveniet sed reprehenderit, nostrum ut fugit ipsam iusto accusantium tempora est. Laudantium suscipit sit doloribus dolore tenetur! Sapiente, ab?</p>',
            'category_id' => 1, 
            'user_id' => 1 
        ]);
         
        Post::create([
            'title' => 'Judul Post Ketiga', 
            'slug' => 'judul-post-ketiga', 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis tenetur et similique sit, quisquam esse illo dolores eos placeat culpa ab ratione accusamus repudiandae quibusdam sed voluptas fuga consequuntur laboriosam molestiae nesciunt nemo nisi ut.', 
            'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nobis tenetur et similique sit, quisquam esse illo dolores eos placeat culpa ab ratione accusamus repudiandae quibusdam sed voluptas fuga consequuntur laboriosam molestiae nesciunt nemo nisi ut. Repellat, illo officiis perferendis rerum consequatur ipsam natus accusamus animi voluptatem in vel iure. Error mollitia deserunt eos. Non fugiat officiis neque cupiditate cumque autem rem hic repudiandae quia omnis eos dicta quos pariatur doloribus nemo libero est, delectus, quaerat soluta voluptate mollitia nesciunt et ipsa facere! Tempore in adipisci</p> <p>nesciunt possimus ipsam doloribus vero enim, dolorem nemo iusto sed alias saepe soluta ducimus minus sint architecto eaque accusamus exercitationem quidem necessitatibus asperiores! Temporibus sapiente molestias eum illum itaque autem nostrum debitis officia quis? Quia animi cum, dicta doloremque architecto vel recusandae deleniti adipisci asperiores odio dignissimos veritatis voluptatem libero nulla sunt possimus. Harum aperiam inventore minima consequuntur distinctio corporis iure deserunt officia incidunt?</p> <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis veniam quod nobis temporibus consequatur incidunt, impedit maxime totam minus officiis quia eveniet sed reprehenderit, nostrum ut fugit ipsam iusto accusantium tempora est. Laudantium suscipit sit doloribus dolore tenetur! Sapiente, ab?</p>',
            'category_id' => 2, 
            'user_id' => 1 
        ]);
         

    }
}
