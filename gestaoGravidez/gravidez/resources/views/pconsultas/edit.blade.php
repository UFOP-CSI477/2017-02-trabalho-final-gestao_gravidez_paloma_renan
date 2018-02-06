@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pconsulta, [
      'method' => 'patch',
      'route' => ['pconsulta.update', $pconsulta->id],
      'class' => "form-horizontal",
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $pconsulta->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', 'time', $pconsulta->data, [
        'class' => "form-control input-md",
        'required' => '',
          'type' => 'time',
        ]) 
      !!}

    </div>

     <div class = "form-group"> 

      {!! Form::label('hora', 'Hora') !!}
      {!! Form::input('hora', $pconsulta->hora, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

       <div class = "form-group"> 

      {!! Form::label('pediatra', 'Pediatra') !!}
      {!! Form::input('pediatra', $pconsulta->pediatra, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('obs', 'Observação') !!}
      {!! Form::input('obs', $pconsulta->obs, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

    <div class = "form-group">

      {!!Form::submit('Editar', [
          'class' => 'btn btn-warning'
        ])
      !!}

    </div>

    {!!Form::close()!!}

  </div>

@stop