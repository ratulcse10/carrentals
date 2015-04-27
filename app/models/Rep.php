<?php

class Rep extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = 'reps';

	public function user()
	{
		return $this->belongsTo('User', 'user_id', 'id');

	}
}