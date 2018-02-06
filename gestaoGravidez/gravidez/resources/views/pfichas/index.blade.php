@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Ficha do Bebê</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Foto</th>
          <th>Nascimento</th>
          <th>Cidade</th>
          <th>Hospital</th>
          <th>Genitor 1</th>
          <th>Genitor 2</th>
          <th>Médico Obstetra</th>
          <th>Ações</th>
      </tr>


       @foreach($pfichas as $pficha)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['pficha.destroy', $pficha->id]
            ])
          !!}


          <tr>
              <td><b>{{$pficha->id}}</b></td>
              <td>{{$pficha->nome}}</td>
              <td>{{$pficha->foto}}</td>
              <td>{{$pficha->nascimento}}</td>
              <td>{{$pficha->cidade}}</td>
              <td>{{$pficha->hospital}}</td>
              <td>{{$pficha->genitor1}}</td>
              <td>{{$pficha->genitor2}}</td>
              <td>{{$pficha->medico}}</td>
              <td>

                <a type="button" class="btn btn-warning" href="{{route('pficha.edit', $pficha->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('pficha.create')}}">Novo</a>

    </div>

  </div>



@stop