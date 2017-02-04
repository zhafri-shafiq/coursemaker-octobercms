<?php namespace Zhafri\SitepointDemo\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{

    protected $dates = ['ends_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zhafri_sitepointDemo_projects';

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
    public $hasMany = [];
    public $belongsTo = [
        'team' => '\Zhafri\SitepointDemo\Models\Team'

    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getTeamIdOptions()
    {
        $teams = \Zhafri\SitepointDemo\Models\Team::all(['id', 'name']);
        $teamsOptions = [];

        $teams->each(function($team) use ($teamsOptions) {
            $teamsOptions[$team->id] = $team->name;
        });

        return $teamsOptions;
    }

}