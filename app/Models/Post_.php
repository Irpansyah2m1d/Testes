<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Irpansyah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus magni inventore, adipisci mollitia doloribus modi exercitationem praesentium iure sunt! Sunt veritatis quibusdam hic sint eligendi inventore veniam sapiente! Harum ut sunt vitae officiis amet assumenda illum. Quibusdam voluptas doloribus illum laborum porro eveniet nihil aliquid deserunt molestias omnis beatae ex, incidunt dolorem? Alias officia inventore quidem ex porro fugit voluptatum? Modi praesentium porro vitae optio unde doloribus illum autem perspiciatis pariatur quisquam error doloremque quidem maxime, cumque deleniti corrupti necessitatibus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Panca",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque nesciunt delectus fugiat accusamus, animi veniam commodi illo, a porro exercitationem excepturi saepe. Voluptates adipisci perferendis, doloremque iusto natus dignissimos quo necessitatibus nulla exercitationem voluptate earum laboriosam, ut magni dolores ratione aut minus similique quam molestias amet. Commodi aliquid a accusantium perferendis? Possimus nesciunt reprehenderit qui sit ad? Fugit blanditiis excepturi, doloremque ad aliquam velit quae sit tempore voluptate porro non necessitatibus accusamus? Recusandae quasi, repellendus reiciendis dignissimos pariatur obcaecati laboriosam nobis voluptates, architecto eum animi. Doloribus ab, earum molestiae, adipisci vero illum qui suscipit reprehenderit iste praesentium, perferendis accusantium vitae!"
        ]
        ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        // $posts = self::$blog_post;
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
