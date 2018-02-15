@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($gdesejo, [
      'method' => 'patch',
      'route' => ['gdesejo.update', $gdesejo->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $gdesejo->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $gdesejo->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::text('descricao', $gdesejo->descricao, [
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