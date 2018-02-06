@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Consultas do bebê</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Horário</th>
          <th>Pediatra</th>
          <th>Observação</th>
          <th>Ações</th>
      </tr>


       @foreach($pconsultas as $pconsulta)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['pconsulta.destroy', $pconsulta->id]
            ])
          !!}


          <tr>
              <td><b>{{$pconsulta->id}}</b></td>
              <td>{{$pconsulta->data}}</td>
              <td>{{$pconsulta->hora}}</td>
              <td>{{$pconsulta->pediatra}}</td>
              <td>{{$pconsulta->obs}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('pconsulta.edit', $pconsulta->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('pconsulta.create')}}">Novo</a>

    </div>

  </div>



@stop