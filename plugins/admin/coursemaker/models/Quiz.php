<?php namespace Admin\Coursemaker\Models;

use Model;

/**
 * Quiz Model
 */
class Quiz extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_coursemaker_quizzes';

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
    public $attachMany = [];
}
