<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Generator extends Model
{
    
	public $table = "generators";
    

	public $fillable = [
	    "field_name",
		"field_type",
		"is_required",
		"has_access_token",
		"set_paginater",
		"add_soft_delete",
		"has_api"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "field_name" => "string",
		"field_type" => "string",
		"is_required" => "boolean",
		"has_access_token" => "boolean",
		"set_paginater" => "boolean",
		"add_soft_delete" => "boolean",
		"has_api" => "boolean"
    ];

	public static $rules = [
	];

}
