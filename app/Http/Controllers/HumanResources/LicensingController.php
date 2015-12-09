<?php

namespace App\Http\Controllers\HumanResources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Client;

use App\Models\Entity\Employee;

use App\Models\HumanResources\Licensing;

use App\Http\Requests\HumanResources\LicensingFormRequest;

class LicensingController extends Controller
{
    protected $licensing;

    public function __construct(Licensing $licensing){
        $this->licensing = $licensing;
    }

    /**
     * listar licencias por empresa
	 *
	 * @return Response
    */
    public function index($clientId = null)
    {
        $licensings = $this->licensing->all();

        return view('humanresources.licensings.index', compact('licensings'));
    }

    /**
     * crear licencia
	 *
	 * @return Response
    */
    public function create()
    {
        $clients = Client::orderBy('name')->lists('name', 'id');
        $employees = Employee::orderBy('name')->lists('name', 'id');

        return view('humanresources.licensings.create', compact('clients', 'employees'));
    }

    /**
     * editar licencia
	 *
	 * @return Response
    */
    public function edit($licensingId)
    {
        return view('humanresources.licensings.edit');
    }

    /**
     * registrar anticipo
     *
     * @return Response
    */
    public function store(LicensingFormRequest $request)
    {
        $data = $request->except('_token');

        $licensing = $this->licensing->create($data);

        return redirect()->action('HumanResources\LicensingController@index');
    }
}
