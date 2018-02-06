@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pbanho, [
      'method' => 'patch',
      'route' => ['pbanho.update', $pbanho->id],
      'class' => "form-horizontal",
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $pbanho->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', 'time', $pbanho->data, [
        'class' => "form-control input-md",
        'required' => '',
          'type' => 'time',
        ]) 
      !!}

    </div>

     <div class = "form-group"> 

      {!! Form::label('hora', 'Horário') !!}
      {!! Form::input('hora', $pbanho->hora, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('observacao', 'Observação') !!}
      {!! Form::input('observacao', $pbanho->observacao, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

       <div class = "form-group"> 

      {!! Form::label('sugerido', 'Dica') !!}
      {!! Form::input('sugerido', $pbanho->sugerido, [
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