<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

	public $table = "users";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "name",
		"email",
		"password"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"email" => "string",
		"password" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"email" => "required",
		"password" => "required|min:6"
	];

	 /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
