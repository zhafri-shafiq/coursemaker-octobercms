<?php namespace Admin\Coursemaker\Models;

use Model;

/**
 * Course Model
 */
class Course extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_coursemaker_courses';

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
    'lesson' => ['Admin\Coursemaker\Models\Lesson'],
    'quiz' => ['Admin\Coursemaker\Models\Quiz'],
    ];

    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'featured_image' => 'System\Models\File',
        'featured_video' => 'System\Models\File',
    ];
    public $attachMany = [];
    
}
