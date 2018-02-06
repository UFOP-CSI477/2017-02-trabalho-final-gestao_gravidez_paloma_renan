@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($ghumore, [
      'method' => 'patch',
      'route' => ['ghumore.update', $ghumore->id],
      'class' => "form-horizontal",
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $ghumore->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', 'time', $ghumore->data, [
        'class' => "form-control input-md",
        'required' => '',
          'type' => 'time',
        ]) 
      !!}

    </div>

     <div class = "form-group"> 

      {!! Form::label('nivel', 'Nível do humor') !!}
      {!! Form::input('nivel', $ghumore->nivel, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

        <div class = "form-group"> 

      {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::input('descricao', $ghumore->descricao, [
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