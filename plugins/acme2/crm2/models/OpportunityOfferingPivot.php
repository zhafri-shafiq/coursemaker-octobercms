<?php namespace Acme2\Crm2\Models;

use October\Rain\Database\Pivot;
/**
 * OpportunityOfferingPivot Model
 */
class OpportunityOfferingPivot extends Pivot
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme2_crm2_opportunity_offering_pivots';

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
        'owner' => ['Backend\Models\User'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}