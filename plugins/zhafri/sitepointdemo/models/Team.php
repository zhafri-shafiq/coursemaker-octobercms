<?php namespace Zhafri\SitepointDemo\Models;

use Model;

/**
 * Team Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zhafri_sitepointDemo_teams';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'projects' => '\Zhafri\SitepointDemo\Projects',
        'users' => '\Backend\Models\User'

    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];


    public function getUsersOptions()
    {
        return \Backend\Models\User::lists('login', 'id');
    }

}