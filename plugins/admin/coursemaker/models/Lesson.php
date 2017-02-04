<?php namespace Admin\Coursemaker\Models;

use Model;

/**
 * Lesson Model
 */
class Lesson extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_coursemaker_lessons';

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
        'course' => ['Admin\Coursemaker\Models\Course'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [
        'featured_image' => ['System\Models\File', 'order' => 'sort_order'],
        'content_image' => ['System\Models\File'],
        'featured_video' => ['System\Models\File', 'order' => 'sort_order'],
        'content_video' => ['System\Models\File'],
    ];
}
