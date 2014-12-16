<?php

class SocialNetworkUser extends \Eloquent {
	protected $fillable = [
	 'first_name',
	 'second_name',
	 'age',
	 'date_of_birth'];
	protected $table = 'simple_social_network_users';

	public function friends()
    {
        return $this->hasMany('Friend');
    }
}