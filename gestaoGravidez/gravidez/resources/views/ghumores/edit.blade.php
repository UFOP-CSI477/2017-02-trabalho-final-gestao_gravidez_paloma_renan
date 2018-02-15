@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($ghumore, [
      'method' => 'patch',
      'route' => ['ghumore.update', $ghumore->id],
      'class' => 'form-horizontal',
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
      {!! Form::text('data', $ghumore->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('nivel', 'Nível') !!}
      {!! Form::text('nivel', $ghumore->nivel, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nível do humor",
        'required' => "",
        ]) 
      !!}

    </div> 

    

    <div class = "form-group">

      {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::text('descricao', $ghumore->descricao, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma descrição",
        'required' => "",
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