@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($palimentacoe, [
      'method' => 'patch',
      'route' => ['palimentacoe.update', $palimentacoe->id],
      'class' => "form-horizontal",
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
      {!! Form::input('cardapio', $palimentacoe->cardapio, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>
    

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', 'time', $palimentacoe->data, [
        'class' => "form-control input-md",
        'required' => '',
          'type' => 'time',
        ]) 
      !!}

    </div>

     <div class = "form-group"> 

      {!! Form::label('hora', 'Hora') !!}
      {!! Form::input('hora', $palimentacoe->hora, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('obs', 'Observação') !!}
      {!! Form::input('obs', $palimentacoe->obs, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('sugerido', 'Dica') !!}
      {!! Form::input('sugerido', $palimentacoe->sugerido, [
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