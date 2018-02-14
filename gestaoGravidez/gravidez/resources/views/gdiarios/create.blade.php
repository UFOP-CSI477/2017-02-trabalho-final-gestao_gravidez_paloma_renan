@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'gdiario.store'], [
        'class' => 'form-horizontal',
      ])
    !!}
      
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

     {!! Form::label('peso', 'Peso') !!}
      {!! Form::text('peso', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o peso do bebê",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('altura', 'Altura') !!}
      {!! Form::text('altura', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a altura do bebê",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('posicao', 'Posição') !!}
      {!! Form::text('posicao', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a posição do bebê",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::text('descricao', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  alguma descrição",
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

    <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/gdiario">Voltar</a>

  </div>
  
@stop