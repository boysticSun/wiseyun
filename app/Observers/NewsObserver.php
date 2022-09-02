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
        $news->body = clean($news->body, 'user_news_body');

        $news->excerpt = make_excerpt($news->body);
    }

    public function created(News $news)
    {
        $news->news_category->updateNewsCount();
    }
}
