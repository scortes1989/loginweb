<?php

namespace App\Http\Controllers\Entity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Client;

use App\Models\Entity\Management;
use App\Models\Entity\Unit;
use App\Models\Entity\Charge;

use App\Http\Requests\Entity\ChargeFormRequest;

class ChargeController extends Controller
{
    protected $charge;

    public function __construct(Charge $charge)
    {
        $this->charge = $charge;
    }

    /**
     *listar cargos por empresa
	 *
	 *return Response
    */
    public function index($clientId = null)
    {
        $charges = $this->charge->orderBy('name')->get();

        return view('entity.charges.index', compact('charges'));
    }

    /**
     *crear cargo
	 *
	 *return Response
    */
    public function create()
    {
        $clients = Client::orderBy('name')->lists('name', 'id');
        $managements = Management::orderBy('name')->lists('name', 'id');
        $units = Unit::orderBy('name')->lists('name', 'id');

        return view('entity.charges.create', compact('clients', 'managements', 'units'));
    }

    /**
     *editar cargo
	 *
	 *return Response
    */
    public function edit($chargeId)
    {
        return view('entity.charges.edit');
    }

    /*
     * registrar cargo
     *
     * return Response
    */
    public function store(ChargeFormRequest $request){
        $data = $request->except('_token');

        $charge = $this->charge->create($data);

        return redirect()->action('Entity\ChargeController@index');
    }
}
