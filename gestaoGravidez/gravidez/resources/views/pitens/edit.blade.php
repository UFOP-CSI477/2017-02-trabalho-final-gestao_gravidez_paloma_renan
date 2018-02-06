@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($piten, [
      'method' => 'patch',
      'route' => ['piten.update', $piten->id],
      'class' => "form-horizontal",
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $piten->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    

    <div class = "form-group">

      {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', $piten->nome, [
        'class' => "form-control input-md",
        'required' => '',
        ]) 
      !!}

    </div>

     <div class = "form-group"> 

      {!! Form::label('quantidade', 'Quantidade') !!}
      {!! Form::input('quantidade', $piten->quantidade, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>


      <div class = "form-group"> 

      {!! Form::label('data', 'Data') !!}
      {!! Form::input('data', $piten->data, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('local', 'Local') !!}
      {!! Form::input('local', $piten->local, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('valor', 'Valor') !!}
      {!! Form::input('valor', $piten->valor, [
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