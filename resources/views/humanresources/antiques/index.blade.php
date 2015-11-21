@extends('default')

@section('content')

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="{{ action('HumanResources\AntiqueController@create') }}" class="btn-floating btn-large purple darken-1">
    	<i class="large material-icons">add</i>
    </a>				    
</div>

@include('humanresources.menu')

<div class="row">
	<div class="col s12 m12">
    	<h5 class="deep-purple-text center-align">Certificados de Antiguedad</h5>
    	<hr>
    	
    	<table>
	        <thead>
	          	<tr>
	          		<th>Código</th>
	              	<th>Trabajador</th>
	              	<th>Fecha</th>	              	
	          	</tr>
	        </thead>

	        <tbody>
	        	@foreach($antiques as $antique)
	        		<tr>
		          		<td></td>
		              	<td>{{ $antique->employee->name }}</td>
		              	<td>{{ $antique->date }}</td>
		          	</tr>
	        	@endforeach
	        </tbody>
	    </table>

    		    
	</div>
</div>

@endsection