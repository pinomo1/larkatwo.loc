<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artisan')->insert([

            'title' => 'Woman claims husband wants to name baby girl after his ex-lover sparking.',
            'sub_text' => "<p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>",
            'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis dapibus odio, id consequat tortor finibus non. Vivamus velit neque, fermentum vehicula augue at, lobortis ultricies velit. Etiam id venenatis sapien. Maecenas eu placerat mi, vitae maximus nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut tellus sapien, lacinia id euismod et, convallis a velit. Sed eu nulla ac leo rutrum eleifend. Vivamus pharetra vel mi vulputate gravida. Nulla eget metus ullamcorper, molestie tellus non, interdum mauris. Aliquam erat volutpat. Suspendisse quis turpis vel massa varius vulputate. Etiam dolor erat, accumsan sit amet aliquet non, vestibulum sit amet diam. In at mollis diam, vel vulputate ipsum. Donec tempus porttitor mi non lobortis. Vestibulum tortor ante, blandit id metus ac, ultrices luctus nisi. Nullam et felis ac elit viverra semper in dignissim dolor.</p><p>Donec volutpat lacus tempus ligula eleifend condimentum sed id justo. Vestibulum eget lectus venenatis, pellentesque elit non, dapibus sem. Fusce cursus ex nibh, nec condimentum elit sagittis ut. Aenean ultrices bibendum nibh et aliquam. Cras mi nunc, feugiat malesuada purus vel, commodo pulvinar orci. Suspendisse vestibulum, tortor vitae suscipit hendrerit, ex eros viverra dolor, eu dictum lorem eros ac sapien. Integer vel turpis lorem. Aliquam justo risus, malesuada nec magna nec, condimentum dictum lectus. Integer posuere nibh dolor, vitae finibus leo sollicitudin at. Nullam vel dui sagittis, cursus ligula porttitor, congue mi. Vestibulum hendrerit rutrum cursus. Quisque interdum aliquet lacus, quis congue velit rhoncus in. Nulla aliquet nisi ac eros varius, in suscipit magna porta. Proin interdum lacus ac volutpat congue. Morbi ultrices arcu vitae nulla tincidunt, a euismod sem sollicitudin.</p><p>Morbi rhoncus nibh a augue facilisis, id egestas mi convallis. Suspendisse suscipit, leo et aliquet auctor, dui lorem lobortis mauris, et cursus mauris lorem dapibus ipsum. Aenean volutpat magna tempus rutrum viverra. Proin eu augue nulla. Mauris ultricies gravida magna non posuere. Pellentesque eget facilisis leo, in condimentum eros. Mauris tempus consequat nunc vitae condimentum. Ut et odio nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque tempor auctor dolor et rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque hendrerit odio vel ornare egestas.</p>",
            'img' => 'blog1.png',
            'data' => date("Y-m-d"),
            'user_id' => '1',
            'category_id' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        
        DB::table('artisan')->insert([

            'title' => 'Woman claims husband wants to name baby girl after his ex-lover sparking.',
            'sub_text' => "<p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>",
            'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis dapibus odio, id consequat tortor finibus non. Vivamus velit neque, fermentum vehicula augue at, lobortis ultricies velit. Etiam id venenatis sapien. Maecenas eu placerat mi, vitae maximus nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut tellus sapien, lacinia id euismod et, convallis a velit. Sed eu nulla ac leo rutrum eleifend. Vivamus pharetra vel mi vulputate gravida. Nulla eget metus ullamcorper, molestie tellus non, interdum mauris. Aliquam erat volutpat. Suspendisse quis turpis vel massa varius vulputate. Etiam dolor erat, accumsan sit amet aliquet non, vestibulum sit amet diam. In at mollis diam, vel vulputate ipsum. Donec tempus porttitor mi non lobortis. Vestibulum tortor ante, blandit id metus ac, ultrices luctus nisi. Nullam et felis ac elit viverra semper in dignissim dolor.</p><p>Donec volutpat lacus tempus ligula eleifend condimentum sed id justo. Vestibulum eget lectus venenatis, pellentesque elit non, dapibus sem. Fusce cursus ex nibh, nec condimentum elit sagittis ut. Aenean ultrices bibendum nibh et aliquam. Cras mi nunc, feugiat malesuada purus vel, commodo pulvinar orci. Suspendisse vestibulum, tortor vitae suscipit hendrerit, ex eros viverra dolor, eu dictum lorem eros ac sapien. Integer vel turpis lorem. Aliquam justo risus, malesuada nec magna nec, condimentum dictum lectus. Integer posuere nibh dolor, vitae finibus leo sollicitudin at. Nullam vel dui sagittis, cursus ligula porttitor, congue mi. Vestibulum hendrerit rutrum cursus. Quisque interdum aliquet lacus, quis congue velit rhoncus in. Nulla aliquet nisi ac eros varius, in suscipit magna porta. Proin interdum lacus ac volutpat congue. Morbi ultrices arcu vitae nulla tincidunt, a euismod sem sollicitudin.</p><p>Morbi rhoncus nibh a augue facilisis, id egestas mi convallis. Suspendisse suscipit, leo et aliquet auctor, dui lorem lobortis mauris, et cursus mauris lorem dapibus ipsum. Aenean volutpat magna tempus rutrum viverra. Proin eu augue nulla. Mauris ultricies gravida magna non posuere. Pellentesque eget facilisis leo, in condimentum eros. Mauris tempus consequat nunc vitae condimentum. Ut et odio nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque tempor auctor dolor et rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque hendrerit odio vel ornare egestas.</p>",
            'img' => 'blog1.png',
            'data' => date("Y-m-d"),
            'user_id' => '1',
            'category_id' => '2',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('artisan')->insert([

            'title' => 'Woman claims husband wants to name baby girl after his ex-lover sparking.',
            'sub_text' => "<p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>",
            'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis dapibus odio, id consequat tortor finibus non. Vivamus velit neque, fermentum vehicula augue at, lobortis ultricies velit. Etiam id venenatis sapien. Maecenas eu placerat mi, vitae maximus nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut tellus sapien, lacinia id euismod et, convallis a velit. Sed eu nulla ac leo rutrum eleifend. Vivamus pharetra vel mi vulputate gravida. Nulla eget metus ullamcorper, molestie tellus non, interdum mauris. Aliquam erat volutpat. Suspendisse quis turpis vel massa varius vulputate. Etiam dolor erat, accumsan sit amet aliquet non, vestibulum sit amet diam. In at mollis diam, vel vulputate ipsum. Donec tempus porttitor mi non lobortis. Vestibulum tortor ante, blandit id metus ac, ultrices luctus nisi. Nullam et felis ac elit viverra semper in dignissim dolor.</p><p>Donec volutpat lacus tempus ligula eleifend condimentum sed id justo. Vestibulum eget lectus venenatis, pellentesque elit non, dapibus sem. Fusce cursus ex nibh, nec condimentum elit sagittis ut. Aenean ultrices bibendum nibh et aliquam. Cras mi nunc, feugiat malesuada purus vel, commodo pulvinar orci. Suspendisse vestibulum, tortor vitae suscipit hendrerit, ex eros viverra dolor, eu dictum lorem eros ac sapien. Integer vel turpis lorem. Aliquam justo risus, malesuada nec magna nec, condimentum dictum lectus. Integer posuere nibh dolor, vitae finibus leo sollicitudin at. Nullam vel dui sagittis, cursus ligula porttitor, congue mi. Vestibulum hendrerit rutrum cursus. Quisque interdum aliquet lacus, quis congue velit rhoncus in. Nulla aliquet nisi ac eros varius, in suscipit magna porta. Proin interdum lacus ac volutpat congue. Morbi ultrices arcu vitae nulla tincidunt, a euismod sem sollicitudin.</p><p>Morbi rhoncus nibh a augue facilisis, id egestas mi convallis. Suspendisse suscipit, leo et aliquet auctor, dui lorem lobortis mauris, et cursus mauris lorem dapibus ipsum. Aenean volutpat magna tempus rutrum viverra. Proin eu augue nulla. Mauris ultricies gravida magna non posuere. Pellentesque eget facilisis leo, in condimentum eros. Mauris tempus consequat nunc vitae condimentum. Ut et odio nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque tempor auctor dolor et rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque hendrerit odio vel ornare egestas.</p>",
            'img' => 'blog1.png',
            'data' => date("Y-m-d"),
            'user_id' => '1',
            'category_id' => '3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('artisan')->insert([

            'title' => 'Woman claims husband wants to name baby girl after his ex-lover sparking.',
            'sub_text' => "<p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>",
            'text' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis dapibus odio, id consequat tortor finibus non. Vivamus velit neque, fermentum vehicula augue at, lobortis ultricies velit. Etiam id venenatis sapien. Maecenas eu placerat mi, vitae maximus nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut tellus sapien, lacinia id euismod et, convallis a velit. Sed eu nulla ac leo rutrum eleifend. Vivamus pharetra vel mi vulputate gravida. Nulla eget metus ullamcorper, molestie tellus non, interdum mauris. Aliquam erat volutpat. Suspendisse quis turpis vel massa varius vulputate. Etiam dolor erat, accumsan sit amet aliquet non, vestibulum sit amet diam. In at mollis diam, vel vulputate ipsum. Donec tempus porttitor mi non lobortis. Vestibulum tortor ante, blandit id metus ac, ultrices luctus nisi. Nullam et felis ac elit viverra semper in dignissim dolor.</p><p>Donec volutpat lacus tempus ligula eleifend condimentum sed id justo. Vestibulum eget lectus venenatis, pellentesque elit non, dapibus sem. Fusce cursus ex nibh, nec condimentum elit sagittis ut. Aenean ultrices bibendum nibh et aliquam. Cras mi nunc, feugiat malesuada purus vel, commodo pulvinar orci. Suspendisse vestibulum, tortor vitae suscipit hendrerit, ex eros viverra dolor, eu dictum lorem eros ac sapien. Integer vel turpis lorem. Aliquam justo risus, malesuada nec magna nec, condimentum dictum lectus. Integer posuere nibh dolor, vitae finibus leo sollicitudin at. Nullam vel dui sagittis, cursus ligula porttitor, congue mi. Vestibulum hendrerit rutrum cursus. Quisque interdum aliquet lacus, quis congue velit rhoncus in. Nulla aliquet nisi ac eros varius, in suscipit magna porta. Proin interdum lacus ac volutpat congue. Morbi ultrices arcu vitae nulla tincidunt, a euismod sem sollicitudin.</p><p>Morbi rhoncus nibh a augue facilisis, id egestas mi convallis. Suspendisse suscipit, leo et aliquet auctor, dui lorem lobortis mauris, et cursus mauris lorem dapibus ipsum. Aenean volutpat magna tempus rutrum viverra. Proin eu augue nulla. Mauris ultricies gravida magna non posuere. Pellentesque eget facilisis leo, in condimentum eros. Mauris tempus consequat nunc vitae condimentum. Ut et odio nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque tempor auctor dolor et rhoncus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque hendrerit odio vel ornare egestas.</p>",
            'img' => 'blog1.png',
            'data' => date("Y-m-d"),
            'user_id' => '1',
            'category_id' => '4',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
