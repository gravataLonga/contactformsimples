<?php namespace Gravatalonga\ContactFormSimples\Models;

use Model;

/**
 * Model
 */
class Contacts extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gravatalonga_contactformsimples_contacts';
}