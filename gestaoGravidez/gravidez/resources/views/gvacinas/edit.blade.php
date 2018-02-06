@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($gvacina, [
      'method' => 'patch',
      'route' => ['gvacina.update', $gvacina->id],
      'class' => "form-horizontal",
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $gvacina->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', 'time', $gvacina->data, [
        'class' => "form-control input-md",
        'required' => '',
          'type' => 'time',
        ]) 
      !!}

    </div>

     <div class = "form-group"> 

      {!! Form::label('hora', 'Horário') !!}
      {!! Form::input('hora', $gvacina->hora, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('nome', 'Nome') !!}
      {!! Form::input('nome', $gvacina->nome, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('obs', 'Observação') !!}
      {!! Form::input('obs', $gvacina->obs, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>


      <div class = "form-group"> 

      {!! Form::label('sugerido', 'Dica') !!}
      {!! Form::input('sugerido', $gvacina->sugerido, [
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