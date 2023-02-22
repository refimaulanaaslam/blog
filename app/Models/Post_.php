<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [ 
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Refi maulana",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero laboriosam velit voluptas, maxime dolore ut iusto corrupti consequuntur, consectetur blanditiis magnam quam animi aliquid repellendus. Tempore numquam magni repellat earum.",
            "article" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vero praesentium nesciunt alias, temporibus odio! Nemo, cum! Tempora eaque sequi saepe cum cumque perferendis, totam laborum repellendus aspernatur voluptatem ex labore in dolores eum obcaecati exercitationem, corporis illum molestiae sed voluptates. Mollitia sit, ex quae praesentium tempora dignissimos quia? Optio architecto fuga fugit nobis, delectus quos maiores minus corporis? Incidunt ut omnis ipsam quo, porro voluptatibus ipsum? Enim aperiam minus est excepturi praesentium reiciendis sit voluptates. Asperiores nulla magni vel consequuntur eius odio dolores ea? Illo dolorum laborum, quidem inventore, mollitia officia voluptates sed esse totam eveniet omnis, sunt optio!

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facere maiores accusamus repellat dolor nesciunt qui blanditiis doloremque quas sunt. Iste, dolorem in cum omnis animi perferendis maxime architecto tempora sed veritatis natus. Maiores delectus molestiae sapiente totam, iure ipsum dolores cum, odit possimus enim quibusdam unde asperiores ex harum corporis omnis, labore porro sunt distinctio impedit? Architecto eveniet omnis, illum velit unde perferendis qui ea neque dolorem mollitia, accusamus ipsum! Dolorum ab ea beatae magnam sit. Sapiente iste at repellendus laboriosam consequuntur recusandae accusamus sequi, perferendis praesentium! Laudantium suscipit maxime nisi sint quasi quas excepturi perspiciatis ut totam asperiores?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatem officia veritatis quo illo itaque magnam adipisci veniam asperiores, minima accusantium provident omnis mollitia totam architecto, atque velit fugiat soluta qui. Ratione quos, doloremque autem nobis error in repudiandae non asperiores, repellat quidem pariatur vero porro facilis, sequi ducimus ex vel esse! Earum soluta dignissimos incidunt non blanditiis fuga quis eum explicabo dolore nemo unde perferendis accusantium, iure reiciendis maxime placeat pariatur debitis odio atque inventore provident officiis. Sed consectetur debitis perferendis adipisci atque, nostrum blanditiis fugiat error recusandae saepe ratione harum voluptas dolores sequi nam beatae porro quo quae?
            
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatem officia veritatis quo illo itaque magnam adipisci veniam asperiores, minima accusantium provident omnis mollitia totam architecto, atque velit fugiat soluta qui. Ratione quos, doloremque autem nobis error in repudiandae non asperiores, repellat quidem pariatur vero porro facilis, sequi ducimus ex vel esse! Earum soluta dignissimos incidunt non blanditiis fuga quis eum explicabo dolore nemo unde perferendis accusantium, iure reiciendis maxime placeat pariatur debitis odio atque inventore provident officiis. Sed consectetur debitis perferendis adipisci atque, nostrum blanditiis fugiat error recusandae saepe ratione harum voluptas dolores sequi nam beatae porro quo quae?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatem officia veritatis quo illo itaque magnam adipisci veniam asperiores, minima accusantium provident omnis mollitia totam architecto, atque velit fugiat soluta qui. Ratione quos, doloremque autem nobis error in repudiandae non asperiores, repellat quidem pariatur vero porro facilis, sequi ducimus ex vel esse! Earum soluta dignissimos incidunt non blanditiis fuga quis eum explicabo dolore nemo unde perferendis accusantium, iure reiciendis maxime placeat pariatur debitis odio atque inventore provident officiis. Sed consectetur debitis perferendis adipisci atque, nostrum blanditiis fugiat error recusandae saepe ratione harum voluptas dolores sequi nam beatae porro quo quae?"
            
        ],
      
        [
            "title" => "Judul kedua",
            "slug" => "judul-kedua",
            "author" => "Maulana",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero laboriosam velit voluptas, maxime dolore ut iusto corrupti consequuntur, consectetur blanditiis magnam quam animi aliquid repellendus. Tempore numquam magni repellat earum.",
            "article" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vero praesentium nesciunt alias, temporibus odio! Nemo, cum! Tempora eaque sequi saepe cum cumque perferendis, totam laborum repellendus aspernatur voluptatem ex labore in dolores eum obcaecati exercitationem, corporis illum molestiae sed voluptates. Mollitia sit, ex quae praesentium tempora dignissimos quia? Optio architecto fuga fugit nobis, delectus quos maiores minus corporis? Incidunt ut omnis ipsam quo, porro voluptatibus ipsum? Enim aperiam minus est excepturi praesentium reiciendis sit voluptates. Asperiores nulla magni vel consequuntur eius odio dolores ea? Illo dolorum laborum, quidem inventore, mollitia officia voluptates sed esse totam eveniet omnis, sunt optio!

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facere maiores accusamus repellat dolor nesciunt qui blanditiis doloremque quas sunt. Iste, dolorem in cum omnis animi perferendis maxime architecto tempora sed veritatis natus. Maiores delectus molestiae sapiente totam, iure ipsum dolores cum, odit possimus enim quibusdam unde asperiores ex harum corporis omnis, labore porro sunt distinctio impedit? Architecto eveniet omnis, illum velit unde perferendis qui ea neque dolorem mollitia, accusamus ipsum! Dolorum ab ea beatae magnam sit. Sapiente iste at repellendus laboriosam consequuntur recusandae accusamus sequi, perferendis praesentium! Laudantium suscipit maxime nisi sint quasi quas excepturi perspiciatis ut totam asperiores?
            
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatem officia veritatis quo illo itaque magnam adipisci veniam asperiores, minima accusantium provident omnis mollitia totam architecto, atque velit fugiat soluta qui. Ratione quos, doloremque autem nobis error in repudiandae non asperiores, repellat quidem pariatur vero porro facilis, sequi ducimus ex vel esse! Earum soluta dignissimos incidunt non blanditiis fuga quis eum explicabo dolore nemo unde perferendis accusantium, iure reiciendis maxime placeat pariatur debitis odio atque inventore provident officiis. Sed consectetur debitis perferendis adipisci atque, nostrum blanditiis fugiat error recusandae saepe ratione harum voluptas dolores sequi nam beatae porro quo quae?
            
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatem officia veritatis quo illo itaque magnam adipisci veniam asperiores, minima accusantium provident omnis mollitia totam architecto, atque velit fugiat soluta qui. Ratione quos, doloremque autem nobis error in repudiandae non asperiores, repellat quidem pariatur vero porro facilis, sequi ducimus ex vel esse! Earum soluta dignissimos incidunt non blanditiis fuga quis eum explicabo dolore nemo unde perferendis accusantium, iure reiciendis maxime placeat pariatur debitis odio atque inventore provident officiis. Sed consectetur debitis perferendis adipisci atque, nostrum blanditiis fugiat error recusandae saepe ratione harum voluptas dolores sequi nam beatae porro quo quae?
            
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatem officia veritatis quo illo itaque magnam adipisci veniam asperiores, minima accusantium provident omnis mollitia totam architecto, atque velit fugiat soluta qui. Ratione quos, doloremque autem nobis error in repudiandae non asperiores, repellat quidem pariatur vero porro facilis, sequi ducimus ex vel esse! Earum soluta dignissimos incidunt non blanditiis fuga quis eum explicabo dolore nemo unde perferendis accusantium, iure reiciendis maxime placeat pariatur debitis odio atque inventore provident officiis. Sed consectetur debitis perferendis adipisci atque, nostrum blanditiis fugiat error recusandae saepe ratione harum voluptas dolores sequi nam beatae porro quo quae?"
        
        ]
    ];
    

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){

        $posts = static::all();

        return $posts->firstWhere("slug", $slug);
    }
}


