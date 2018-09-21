<?php

namespace App\Helpers;

use App\Post;

class Helper
{
    /**
     * Get lists of pages
     */
    public static function get_pages()
    {
        $pages = Post::where('post_type', 'page')->get();

        return $pages;
    }

    /**
     * Return post_slug
     */
    public static function get_post_slug( $post_id )
    {
        if( empty( $post_id ) )
            return;

        $post = Post::where('post_type', 'post')
            ->where('id', $post_id)->first();

        if( $post )
            return $post->title;

        return false;
    }

    /**
     * Get lists of posts
     */
    public static function get_posts()
    {
        $posts = Post::where('post_type', 'post')->get();

        return $posts;
    }



}