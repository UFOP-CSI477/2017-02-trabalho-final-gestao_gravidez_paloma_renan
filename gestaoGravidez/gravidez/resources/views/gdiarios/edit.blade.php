@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($gdiario, [
      'method' => 'patch',
      'route' => ['gdiario.update', $gdiario->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $gdiario->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $gdiario->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('peso', 'Peso') !!}
      {!! Form::text('peso', $gdiario->peso, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o peso",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('altura', 'Altura') !!}
      {!! Form::text('altura', $gdiario->altura, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a altura",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('posicao', 'Posição') !!}
      {!! Form::text('posicao', $gdiario->posicao, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a posição do bebê",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('descricao', 'descrição') !!}
      {!! Form::text('descricao', $gdiario->descricao, [
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