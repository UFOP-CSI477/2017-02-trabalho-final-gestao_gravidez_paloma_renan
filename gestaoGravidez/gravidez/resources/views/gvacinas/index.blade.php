@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Vacinas da Gravidez</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Horário</th>
          <th>Nome</th>
          <th>Observação</th>
          <th>Dica</th>
          <th>Ações</th>
      </tr>


       @foreach($gvacinas as $gvacina)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['gvacina.destroy', $gvacina->id]
            ])
          !!}


          <tr>
              <td><b>{{$gvacina->id}}</b></td>
              <td>{{$gvacina->data}}</td>
              <td>{{$gvacina->hora}}</td>
              <td>{{$gvacina->nome}}</td>
              <td>{{$gvacina->obs}}</td>
              <td>{{$gvacina->sugerido}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('gvacina.edit', $gvacina->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('gvacina.create')}}">Novo</a>

    </div>

  </div>



@stop