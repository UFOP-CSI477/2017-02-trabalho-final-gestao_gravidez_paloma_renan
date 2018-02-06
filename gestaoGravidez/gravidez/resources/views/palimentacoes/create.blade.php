@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'palimentacoe.store'], [
        'class' => 'form-horizontal',
      ])
    !!}
      
    <div class = "form-group">

     {!! Form::label('cardapio', 'Cardápio') !!}
      {!! Form::text('cardapio', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o cardápio do bebê",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a data",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('hora', 'Horário') !!}
      {!! Form::text('hora', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o horário",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('obs', 'Observação') !!}
      {!! Form::text('obs', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  alguma observação",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('sugerido', 'Dica') !!}
      {!! Form::text('sugerido', null, [
        'class' => "form-control input-md",
        'placeholder' => "Dica",
        'required' => "",
        ]) 
      !!}

    </div> 


    <div class = "form-group">

      {!!Form::submit('Inserir', [
          'class' => 'btn btn-success'
        ])
      !!}

    </div>

    {!!Form::close()!!}

  </div>
  
@stop