<?php

namespace App\Observers;

use App\Models\News;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class NewsObserver
{
    public function creating(News $news)
    {
        //
    }

    public function updating(News $news)
    {
        //
    }

    public function saving(News $news)
    {
        $news->excerpt = make_excerpt($news->body);
    }
}
