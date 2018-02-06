@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['gconsulta.destroy', $gconsulta ->id]
      ])
    !!}
      
      <h1>{{$gconsulta->id}}</h1>
      <h1>{{$gconsulta->data}}</h1>
      <h1>{{$gconsulta->hora}}</h1>
      <h1>{{$gconsulta->medico}}</h1>
      <h1>{{$gconsulta->obs}}</h1>
      <h1>{{$gconsulta->sugerido}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('gconsulta.edit', $gconsulta->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop