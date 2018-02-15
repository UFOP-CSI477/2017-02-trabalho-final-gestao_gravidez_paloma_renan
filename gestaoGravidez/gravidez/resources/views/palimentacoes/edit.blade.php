@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($palimentacoe, [
      'method' => 'patch',
      'route' => ['palimentacoe.update', $palimentacoe->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $palimentacoe->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('cardapio', 'Cardápio') !!}
      {!! Form::text('cardapio', $palimentacoe->cardapio, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o cardápio",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $palimentacoe->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('hora', 'Horário') !!}
      {!! Form::text('hora', $palimentacoe->hora, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o horário",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('obs', 'Observação') !!}
      {!! Form::text('obs', $palimentacoe->obs, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma observação",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('sugerido', 'Dica') !!}
      {!! Form::text('sugerido', $palimentacoe->sugerido, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma dica",
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