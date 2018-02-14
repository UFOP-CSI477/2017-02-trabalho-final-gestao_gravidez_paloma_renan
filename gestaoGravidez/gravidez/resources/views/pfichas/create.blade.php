@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'pficha.store'], [
        'class' => 'form-horizontal',
      ])
    !!}
      
    <div class = "form-group">

     {!! Form::label('nome', 'Nome do bebê') !!}
      {!! Form::text('nome', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o nome do bebê",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('foto', 'Foto') !!}
      {!! Form::text('foto', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a foto",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('nascimento', 'Data do Nascimento') !!}
      {!! Form::text('nascimento', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a data do nascimento",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('cidade', 'Cidade') !!}
      {!! Form::text('cidade', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  a cidade de nascimento",
        'required' => "",
        ]) 
      !!}

    </div> 


    <div class = "form-group">

     {!! Form::label('hospital', 'Nome do hospital') !!}
      {!! Form::text('hospital', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o nome do hospital",
        'required' => "",
        ]) 
      !!}

    </div> 


    <div class = "form-group">

     {!! Form::label('genitor1', 'Nome do genitor 1') !!}
      {!! Form::text('genitor1', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o nome do genitor 1",
        'required' => "",
        ]) 
      !!}

    </div> 


    <div class = "form-group">

     {!! Form::label('genitor2', 'Nome do genitor 2') !!}
      {!! Form::text('genitor2', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o nome do genitor 2",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('medico', 'Nome do médico obstetra') !!}
      {!! Form::text('medico', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o nome do médico obstetra",
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

    <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/pficha">Voltar</a>

  </div>
  
@stop