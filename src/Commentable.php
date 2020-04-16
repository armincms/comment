<?php 

namespace Armincms\Comment;


/**
 * summary
 */
trait Commentable
{
    /**
     * summary
     */
    public function comments()
    {
        return $this->morphMany(Comment::class);
    }

    public function approvedComments()
    {
    	return $this->comments()->whereApproved(1);
    }
}