<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Indie Surya",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos magni, pariatur explicabo velit facere voluptatibus obcaecati quo accusamus aperiam. Asperiores similique sit ipsum cum sapiente, vero doloremque eveniet magnam quasi corrupti iure nostrum molestias quas reprehenderit perspiciatis sed magni, voluptate eos illo temporibus praesentium omnis fugit delectus. Architecto ea laborum itaque optio eveniet assumenda illum! Ipsum dicta eum numquam odio doloremque? Laudantium qui nesciunt neque distinctio, suscipit ad soluta veritatis enim facere reiciendis, laboriosam ullam. Impedit voluptatem facere provident reiciendis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Indra Surya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ut nulla maxime, laboriosam quisquam recusandae earum libero dignissimos quis temporibus, velit harum a doloribus dolorem architecto deserunt soluta unde voluptatem ex? Necessitatibus ratione libero sit? Et quo hic provident quod modi impedit eius laudantium dolor sequi quisquam pariatur aut corporis officiis ducimus quia ipsam explicabo, tempore laboriosam nisi in corrupti officia! Hic pariatur voluptatum exercitationem iure laborum molestiae iste asperiores laudantium mollitia optio, voluptas natus distinctio eveniet delectus placeat adipisci cumque, at nihil unde dicta vel nam tenetur. A laboriosam voluptate perspiciatis laudantium labore necessitatibus, pariatur tempore nobis vero quo."
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug',$slug);
    }
}