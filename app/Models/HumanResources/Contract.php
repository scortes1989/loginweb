<?php

namespace App\Models\HumanResources;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rrhh_contracts';
    protected $fillable = ['client_id', 'employee_id', 'branch_id', 'charge_id', 'contract_type_id', 'working_type', 'start_date', 'end_date'];

    /*
     * relaciones
   	*/
    public function employee()
    {
        return $this->belongsTo('App\Models\Entity\Employee', 'employee_id');
    }

    public function contractType()
    {
        return $this->belongsTo('App\Models\Admin\ContractType', 'contract_type_id');
    }

    public function charge()
    {
        return $this->belongsTo('App\Models\Entity\Charge', 'charge_id');
    }

    public function bonds()
    {
        return $this->hasMany('App\Models\HumanResources\Bond', 'contract_id');
    }

    public function commissions()
    {
        return $this->hasMany('App\Models\HumanResources\Commission', 'contract_id');
    }

    public function tools()
    {
        return $this->hasMany('App\Models\HumanResources\Tool', 'contract_id');
    }

    public function viaticals()
    {
        return $this->hasMany('App\Models\HumanResources\Viatical', 'contract_id');
    }

    public function bonus()
    {
        return $this->hasMany('App\Models\HumanResources\Bonus', 'contract_id');
    }

    public function advances()
    {
        return $this->hasMany('App\Models\HumanResources\Advance', 'contract_id');
    }

    public function discounts()
    {
        return $this->hasMany('App\Models\HumanResources\Discount', 'contract_id');
    }

    public function savings()
    {
        return $this->hasMany('App\Models\HumanResources\Saving', 'contract_id');
    }

    //funciones
    public function totalBonds()
    {
        return $this->bonds()->sum('ammount');
    }

    public function totalCommissions()
    {
        return $this->commissions()->sum('ammount');
    }

    public function totalTools()
    {
        return $this->tools()->sum('ammount');
    }

    public function totalViaticals()
    {
        return $this->viaticals()->sum('ammount');
    }

    public function totalBonus()
    {
        return $this->bonus()->sum('ammount');
    }

    public function totalAdvances()
    {
        return $this->advances()->sum('ammount');
    }

    public function totalDiscounts()
    {
        return $this->discounts()->sum('ammount');
    }

    public function totalSavings()
    {
        return $this->savings()->sum('ammount');
    }
}
