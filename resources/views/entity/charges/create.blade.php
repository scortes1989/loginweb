@extends('default')

@section('content')

{!! Form::open(['action' => 'Entity\ChargeController@store']) !!}
  {!! Form::hidden('client_id') !!}

  <div class="row">
    <div class="col s12 m12">	    	
     	<div class="card-panel amber darken-2 white-text">
     		<span class="card-title">Registrar Cargo</span> 	      		      		
     	</div>
    </div>
  </div>

  <div class="row">

    <div class="col m3">
      
      <div class="input-field">
          {!! Form::text('name', '', ['class' => 'validate']) !!}
          {!! Form::label('name', 'Nombre') !!}
          <span class="red-text">{{ $errors->first('name') }}</span>
      </div>      
      
    </div>    

    <div class="col m3">
      
      {!! Form::label('management_id', 'Gerencia') !!}
      {!! Form::select('management_id', $managements, '', ['class' => 'browser-default']) !!}
      <span class="red-text">{{ $errors->first('management_id') }}</span>

    </div>

    <div class="col m3">
      
      {!! Form::label('unit_id', 'Unidad') !!}
      {!! Form::select('unit_id', $units, '', ['class' => 'browser-default']) !!}
      <span class="red-text">{{ $errors->first('unit_id') }}</span>

    </div>

  </div>

  <div class="row">
	  <div class="col s12 m12">	    	
    	<div class="card-panel blue-grey lighten-5">
      	<button class="btn btn-large waves-effect waves-light amber darken-2" type="submit" name="action">
      		Guardar
			  </button>
    	</div>
    </div>
  </div>

{!! Form::close() !!}

@endsection