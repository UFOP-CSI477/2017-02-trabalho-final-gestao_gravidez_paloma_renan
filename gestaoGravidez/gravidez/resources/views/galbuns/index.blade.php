@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Álbum Gravidez</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Data/Horário</th>
          <th>Foto</th>
          <th>Ações</th>
      </tr>


       @foreach($galbuns as $galbun)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['galbun.destroy', $galbun->id]
            ])
          !!}


          <tr>
              <td><b>{{$galbun->id}}</b></td>
              <td>{{$galbun->data}}</td>
              <td>{{$galbun->foto}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('galbun.edit', $galbun->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('galbun.create')}}">Novo</a>
          <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menugravidez">Voltar</a>


    </div>

  </div>



@stop