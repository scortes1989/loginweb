@extends('default')

@section('content')

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="{{ action('Admin\ClientController@create') }}" class="btn-floating btn-large amber darken-2">
    	<i class="large material-icons">add</i>
    </a>				    
</div>


<div class="row">
	<div class="col s12 m12">	    	
    	<div class="card-panel amber darken-2 white-text">
      		<span class="card-title">Administración de Cargos</span> 	      		      		
    	</div>

    	
    	<table>
	        <thead>
	          	<tr>
	          		<th>Nombre</th>
	              	<th>Sucursal</th>	              	
	              	<th>Gerencia</th>
	              	<th>Área</th>
	          	</tr>
	        </thead>

	        <tbody>
	          		       
	        </tbody>
	    </table>

    		    
	</div>
</div>

@endsection