<?php

class Friend extends \Eloquent {
	protected $fillable = [];
	protected $table = 'friends';

	public function social_network_user()
    {
        return $this->belongsTo('SocialNetworkUser');
    }
}