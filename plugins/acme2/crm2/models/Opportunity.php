<?php namespace Acme2\Crm2\Models;

use Model;

/**
 * Opportunity Model
 */
class Opportunity extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme2_crm2_opportunities';

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
        'notes' => ['Acme2\Crm2\Models\Note'],
    ];
    public $belongsTo = [
        'status' => ['Acme2\Crm2\Models\Status'],
    ];
    public $belongsToMany = [
        'offerings' => [
        'Acme2\Crm2\Models\Offering',
        'table' => 'acme2_crm2_opportunities_offerings',
        'pivot' => ['price','cost','owner_id'],
        'pivotModel' => 'Acme2\Crm2\Models\OpportunityOfferingPivot'
        ],
        'contacts' => [
        'Acme2\Crm2\Models\Contact',
        'table' => 'acme2_crm2_opportunities_contacts'
        ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}