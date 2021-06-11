<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * Este evento se dispara una vez que ya se haya creado el registro
     * 
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the Post "created" event.
     *
     * Este evento se dispara antes de que se haya creado el registro
     * 
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        if (! \App::runningInConsole()) {
            $post->user_id = auth()->user()->id;
        }
        
    }

    /**
     * Handle the Post "deleted" event.
     *
     * Este evento se dispara justo antes de borrar el registro de Post
     * 
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleting(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image->url);
        }
    }

    /**
     * Handle the Post "deleted" event.
     *
     * Este evento se dispara cuando ya ha sucedido el evento de borrar
     * 
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }


}
