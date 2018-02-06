@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'piten.store'], [
        'class' => 'form-horizontal',
      ])
    !!}
      
    <div class = "form-group">

     {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome do item",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('quantidade', 'Quantidade') !!}
      {!! Form::text('quantidade', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a quantidade ",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a data da compra",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('local', 'Local da compra') !!}
      {!! Form::text('local', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o local da compra ",
        'required' => "",
        ]) 
      !!}

    </div> 

     <div class = "form-group">

     {!! Form::label('valor', 'Preço') !!}
      {!! Form::text('valor', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o preço ",
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