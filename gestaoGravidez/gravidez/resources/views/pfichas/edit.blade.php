@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pficha, [
      'method' => 'patch',
      'route' => ['pficha.update', $pficha->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $pficha->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', $pficha->nome, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('foto', 'Foto') !!}
      {!! Form::text('foto', $pficha->foto, [
        'class' => "form-control input-md",
        'placeholder' => "Insira uma foto",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('nascimento', 'Nascimento') !!}
      {!! Form::text('nascimento', $pficha->nascimento, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data do nascimento",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('cidade', 'Cidade') !!}
      {!! Form::text('cidade', $pficha->cidade, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a cidade de nascimento",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('hospital', 'Hospital') !!}
      {!! Form::text('hospital', $pficha->hospital, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome do hospital",
        'required' => "",
        ]) 
      !!}

    </div>

    <div class = "form-group">

      {!! Form::label('genitor1', 'Genitor 1') !!}
      {!! Form::text('genitor2', $pficha->genitor1, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome do genitor 1",
        'required' => "",
        ]) 
      !!}

    </div>

    <div class = "form-group">

      {!! Form::label('genitor2', 'Genitor 2') !!}
      {!! Form::text('genitor2', $pficha->genitor2, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome do genitor 2",
        'required' => "",
        ]) 
      !!}

    </div>

    <div class = "form-group">

      {!! Form::label('medico', 'Médico obstetra') !!}
      {!! Form::text('medico', $pficha->medico, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome do medico obstetra",
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