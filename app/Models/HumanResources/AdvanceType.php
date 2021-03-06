<?php 

namespace App\Models\HumanResources;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AdvanceType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rrhh_advances_types';
    protected $fillable = ['name'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
