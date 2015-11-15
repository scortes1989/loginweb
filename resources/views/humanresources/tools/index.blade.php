@extends('default')

@section('content')

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="{{ action('HumanResources\ToolController@create') }}" class="btn-floating btn-large purple darken-1">
    	<i class="large material-icons">add</i>
    </a>				    
</div>

@include('humanresources.menu')

<div class="row">
	<div class="col s12 m12">	    	
    	<h5 class="deep-purple-text center-align">Desgaste de Herramientas</h5>
    	<hr>
    	
    	<table>
	        <thead>
	          	<tr>
	          		<th>Código</th>
	              	<th>Trabajador</th>
	              	<th>Tipo</th>
	              	<th>Fecha</th>
	              	<th>Monto</th>
	          	</tr>
	        </thead>

	        <tbody>
	          	@foreach($tools as $tool)
	        		<tr>
	        			<td></td>
	        			<td>{{ $tool->employee->name }}</td>
	        			<td></td>
	        			<td>{{ $tool->date }}</td>
	        			<td>{{ $tool->ammount }}</td>
	        		</tr>
	        	@endforeach       
	        </tbody>
	    </table>

    		    
	</div>
</div>

@endsection