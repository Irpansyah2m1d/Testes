<?php

namespace Database\Seeders;

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
       User::factory(5)->create();
       
        // User::create([
        //     "name" => "Irpansyah",
        //     "email" => "irpansyah810@gmail.com",
        //     "password" => bcrypt(12345)
        // ]);
        // User::create([
        //     "name" => "Alim Perdana",
        //     "email" => "alim@gmail.com",
        //     "password" => bcrypt(12345)
        // ]);

        // Post::create([
        //     "title" => "Judul Post Pertama",
        //     "category_id" => 1,
        //     "user_id" => 2,
        //     "slug" => "judul-post-pertama",
        //     "excerp" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quia maiores unde,",
        //     "body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quia maiores unde, non accusantium blanditiis placeat natus illo velit numquam recusandae quam.</p> <p> Cumque eos dolores ipsa perferendis repudiandae a? Praesentium soluta assumenda fuga minima quisquam saepe, architecto iusto fugiat minus, laboriosam quibusdam, quas hic voluptatibus facere dicta deserunt ullam explicabo dolor temporibus commodi! Officia sequi quibusdam sed iure reprehenderit harum natus, facere quae. </p> <p> quisquam iste repudiandae eligendi eius, laborum laudantium soluta dolor! Rerum ex doloremque recusandae, sequi, magnam harum possimus exercitationem maxime ad dicta natus officiis hic blanditiis reiciendis expedita similique! Accusantium quaerat consequatur quis molestias est corrupti iusto? Rem repellendus, ipsa ea nihil neque libero omnis velit iste voluptas.</p>"
        // ]);
        // Post::create([
        //     "title" => "Judul Post Kedua",
        //     "category_id" => 1,
        //     "user_id" => 2,
        //     "slug" => "judul-post-kedua",
        //     "excerp" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quia maiores unde,",
        //     "body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quia maiores unde, non accusantium blanditiis placeat natus illo velit numquam recusandae quam.</p> <p> Cumque eos dolores ipsa perferendis repudiandae a? Praesentium soluta assumenda fuga minima quisquam saepe, architecto iusto fugiat minus, laboriosam quibusdam, quas hic voluptatibus facere dicta deserunt ullam explicabo dolor temporibus commodi! Officia sequi quibusdam sed iure reprehenderit harum natus, facere quae. </p> <p> quisquam iste repudiandae eligendi eius, laborum laudantium soluta dolor! Rerum ex doloremque recusandae, sequi, magnam harum possimus exercitationem maxime ad dicta natus officiis hic blanditiis reiciendis expedita similique! Accusantium quaerat consequatur quis molestias est corrupti iusto? Rem repellendus, ipsa ea nihil neque libero omnis velit iste voluptas.</p>"
        // ]);
        // Post::create([
        //     "title" => "Judul Post Ketiga",
        //     "category_id" => 2,
        //     "user_id" => 2,
        //     "slug" => "judul-post-ketiga",
        //     "excerp" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quia maiores unde,",
        //     "body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quia maiores unde, non accusantium blanditiis placeat natus illo velit numquam recusandae quam.</p> <p> Cumque eos dolores ipsa perferendis repudiandae a? Praesentium soluta assumenda fuga minima quisquam saepe, architecto iusto fugiat minus, laboriosam quibusdam, quas hic voluptatibus facere dicta deserunt ullam explicabo dolor temporibus commodi! Officia sequi quibusdam sed iure reprehenderit harum natus, facere quae. </p> <p> quisquam iste repudiandae eligendi eius, laborum laudantium soluta dolor! Rerum ex doloremque recusandae, sequi, magnam harum possimus exercitationem maxime ad dicta natus officiis hic blanditiis reiciendis expedita similique! Accusantium quaerat consequatur quis molestias est corrupti iusto? Rem repellendus, ipsa ea nihil neque libero omnis velit iste voluptas.</p>"
        // ]);
        // Post::create([
        //     "title" => "Judul Post Keempat",
        //     "category_id" => 3,
        //     "user_id" => 1,
        //     "slug" => "judul-post-keempat",
        //     "excerp" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quia maiores unde,",
        //     "body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quia maiores unde, non accusantium blanditiis placeat natus illo velit numquam recusandae quam.</p> <p> Cumque eos dolores ipsa perferendis repudiandae a? Praesentium soluta assumenda fuga minima quisquam saepe, architecto iusto fugiat minus, laboriosam quibusdam, quas hic voluptatibus facere dicta deserunt ullam explicabo dolor temporibus commodi! Officia sequi quibusdam sed iure reprehenderit harum natus, facere quae. </p> <p> quisquam iste repudiandae eligendi eius, laborum laudantium soluta dolor! Rerum ex doloremque recusandae, sequi, magnam harum possimus exercitationem maxime ad dicta natus officiis hic blanditiis reiciendis expedita similique! Accusantium quaerat consequatur quis molestias est corrupti iusto? Rem repellendus, ipsa ea nihil neque libero omnis velit iste voluptas.</p>"
        // ]);
        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);
        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);
        Post::factory(20)->create();
    }
}
