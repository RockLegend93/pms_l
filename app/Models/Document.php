<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Document",
 *      required={},
 *      @SWG\Property(
 *          property="Id",
 *          description="Id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="Title",
 *          description="Title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Description",
 *          description="Description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ProjectId",
 *          description="ProjectId",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="Date",
 *          description="Date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="BlobFajl",
 *          description="BlobFajl",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="Size",
 *          description="Size",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_by",
 *          description="created_by",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="updated_by",
 *          description="updated_by",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Document extends Model
{
    use SoftDeletes;

    public $table = 'Document';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'Id';

    public $fillable = [
        'Title',
        'Description',
        'ProjectId',
        'Date',
        'BlobFajl',
        'Size',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Id' => 'integer',
        'Title' => 'string',
        'Description' => 'string',
        'ProjectId' => 'integer',
        'Date' => 'date',
        'BlobFajl' => 'string',
        'Size' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}