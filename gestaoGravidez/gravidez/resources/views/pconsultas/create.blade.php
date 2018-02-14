@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'pconsulta.store'], [
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

     {!! Form::label('hora', 'Horário') !!}
      {!! Form::text('hora', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o horário da consulta",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('pediatra', 'Nome do pediatra') !!}
      {!! Form::text('pediatra', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o nome do pediatra",
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

      {!!Form::submit('Inserir', [
          'class' => 'btn btn-success'
        ])
      !!}

    </div>

    {!!Form::close()!!}

    <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/pconsulta">Voltar</a>

  </div>
  
@stop