@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'gconsulta.store'], [
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

     {!! Form::label('hora', 'Hora') !!}
      {!! Form::text('hora', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o horário",
        'required' => "",
        ]) 
      !!}

    </div> 


    <div class = "form-group">

     {!! Form::label('medico', 'Nome do médico') !!}
      {!! Form::text('medico', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome do médico",
        'required' => "",
        ]) 
      !!}

    </div> 


    <div class = "form-group">

     {!! Form::label('obs', 'Observação') !!}
      {!! Form::text('obs', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira alguma observação",
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

    <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/gconsulta">Voltar</a>


  </div>
  
@stop