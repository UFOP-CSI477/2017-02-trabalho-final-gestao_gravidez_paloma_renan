@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($gdiario, [
      'method' => 'patch',
      'route' => ['gdiario.update', $gdiario->id],
      'class' => "form-horizontal",
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $gdiario->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', 'time', $gdiario->data, [
        'class' => "form-control input-md",
        'required' => '',
          'type' => 'time',
        ]) 
      !!}

    </div>

     <div class = "form-group"> 

      {!! Form::label('peso', 'Peso') !!}
      {!! Form::input('peso', $gdiario->peso, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>


       <div class = "form-group"> 

      {!! Form::label('altura', 'Altura') !!}
      {!! Form::input('altura', $gdiario->altura, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

       <div class = "form-group"> 

      {!! Form::label('posicao', 'Posição') !!}
      {!! Form::input('posicao', $gdiario->posicao, [
          'class' => "form-control input-md", 
        ]) 
      !!}

      </div>

       <div class = "form-group"> 

      {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::input('descricao', $gdiario->descricao, [
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