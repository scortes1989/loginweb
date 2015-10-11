@extends('default')

@section('content')

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large amber darken-2">
    	<i class="large material-icons">add</i>
    </a>				    
</div>

<div class="row">
	<div class="col s12 m12">	    	
    	<div class="card-panel amber darken-2 white-text">
      		<span class="card-title">Administración de Clientes</span> 	      		      		
    	</div>

    	<table>
	        <thead>
	          	<tr>
	              	<th data-field="id">Nombre</th>
	              	<th data-field="name">R.U.T</th>
	              	<th data-field="price">E-mail</th>
	              	<th data-field="price">Teléfono</th>
	          	</tr>
	        </thead>

	        <tbody>
	          		       
	        </tbody>
	    </table>	    
	</div>
</div>

@endsection