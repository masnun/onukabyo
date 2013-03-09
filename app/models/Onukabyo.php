<?php

class Onukabyo extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'onukabyo';

    /**
     * Get the user
     *
     * @var User
     */
    public function owner()
    {
        return $this->belongsTo('User', 'user_id');
    }
}