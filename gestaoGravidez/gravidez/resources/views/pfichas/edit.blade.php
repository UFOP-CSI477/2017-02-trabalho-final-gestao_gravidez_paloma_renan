@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pficha, [
      'method' => 'patch',
      'route' => ['pficha.update', $pficha->id],
      'class' => "form-horizontal",
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
      {!! Form::input('nome', $pficha->nome, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>


      <div class = "form-group"> 

      {!! Form::label('foto', 'Foto') !!}
      {!! Form::input('foto', $pficha->foto, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>


    <div class = "form-group">

      {!! Form::label('nascimento', 'Nascimento') !!}
      {!! Form::text('nascimento', $pficha->nascimento, [
        'class' => "form-control input-md",
        'required' => '',
        ]) 
      !!}

    </div>

     <div class = "form-group"> 

      {!! Form::label('cidade', 'Cidade') !!}
      {!! Form::input('cidade', $pficha->cidade, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('hospital', 'Hospital') !!}
      {!! Form::input('hospital', $pficha->hospital, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('genitor1', 'Genitor 1') !!}
      {!! Form::input('genitor1', $pficha->genitor1, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

      <div class = "form-group"> 

      {!! Form::label('genitor2', 'Genitor 2') !!}
      {!! Form::input('genitor2', $pficha->genitor1, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>


      <div class = "form-group"> 

      {!! Form::label('medico', 'Nome do obstetra') !!}
      {!! Form::input('medico', $pficha->medico, [
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