@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Humores da Gravidez</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data</th>
          <th>Nível</th>
          <th>Descrição</th>
          <th>Ações</th>
      </tr>


       @foreach($ghumores as $ghumore)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['ghumore.destroy', $ghumore->id]
            ])
          !!}


          <tr>
              <td><b>{{$ghumore->id}}</b></td>
              <td>{{$ghumore->data}}</td>
              <td>{{$ghumore->nivel}}</td>
              <td>{{$ghumore->descricao}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('ghumore.edit', $ghumore->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('ghumore.create')}}">Novo</a>
      <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menugravidez">Voltar</a>

    </div>

  </div>



@stop