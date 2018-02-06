@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Consultas Gravidez</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data/th>
          <th>Hora</th>
          <th>Médico</th>
          <th>Observação</th>
          <th>Dica</th>
          <th>Ações</th>
      </tr>


       @foreach($gconsultas as $gconsulta)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['gconsulta.destroy', $gconsulta->id]
            ])
          !!}


          <tr>
              <td><b>{{$gconsulta->id}}</b></td>
              <td>{{$gconsulta->data}}</td>
              <td>{{$gconsulta->hora}}</td>
              <td>{{$gconsulta->medico}}</td>
              <td>{{$gconsulta->obs}}</td>
              <td>{{$gconsulta->sugerido}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('gconsulta.edit', $gconsulta->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('gconsulta.create')}}">Novo</a>

    </div>

  </div>



@stop