<div class="row">
		<div class="col m3">
      
        <div class="input-field">
          {!! Form::number('ammount', isset($commission) ? $commission->ammount : '', ['class' => 'validate']) !!}
          {!! Form::label('ammount', 'Monto') !!}
          <span class="red-text">{{ $errors->first('ammount') }}</span>
        </div>
        
		</div>

    <div class="col m4">

        {!! Form::label('employee_id', 'Trabajador') !!}
        {!! Form::select('employee_id', $employees, isset($commission) ? $commission->employee_id : '', ['class' => 'browser-default']) !!}
        <span class="red-text">{{ $errors->first('employee_id') }}</span>

        {!! Form::label('type_id', 'Tipo') !!}
        {!! Form::select('type_id', $commissionsTypes, isset($commission) ? $commission->type_id : '', ['class' => 'browser-default']) !!}
        <span class="red-text">{{ $errors->first('type_id') }}</span>

    </div>
		
		<div class="col m4">

        <div class="input-field">
          {!! Form::text('date', isset($commission) ? $commission->date->format('d/m/Y') : '', ['class' => 'validate date']) !!}
          {!! Form::label('date', 'Fecha') !!}
          <span class="red-text">{{ $errors->first('date') }}</span>
        </div>

      	<div class="input-field">
        		{!! Form::textarea('description', isset($commission) ? $commission->description : '', ['class' => 'validate', 'rows' => 50]) !!}
        		{!! Form::label('description', 'Descripción') !!}
            <span class="red-text">{{ $errors->first('description') }}</span>
    		</div> 
        
		</div>

</div>

<div class="row">
	<div class="col s12 m12">	    	
    	<div class="card-panel blue-grey lighten-5">
      		<button class="btn btn-large waves-effect waves-light purple darken-1" type="submit" name="action">
      			Guardar
			</button>
    	</div>
    </div>
</div>