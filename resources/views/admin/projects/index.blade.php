@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="m-3 text-center">Elenco Progetti</h1>
    <a class="btn btn-primary text-white mb-5" href="{{route('admin.projects.create')}}">Crea nuovo progetto</a>

    @if (session('deleted'))
      <div>
          <div class="alert alert-success" role="alert">
              {{session('deleted')}}
          </div>
       </div>
    @endif

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"> <a href="{{route('admin.projects.orderby',['id',$direction])}}">Id</a> </th>
            <th scope="col"><a href="{{route('admin.projects.orderby',['name',$direction])}}">Nome</a></th>
            <th scope="col">Technologies</th>
            <th scope="col">Cliente</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project )
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->name}}
                    <span class="badge text-bg-info">{{$project->type?->name}}</span>
                </td>
                <td>
                    @forelse ($project->technologies as $technology)
                        <span class="badge text-bg-warning">{{$technology->name}}</span>
                    @empty
                        //
                    @endforelse
                </td>
                <td>{{$project->client_name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}" title="show"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-warning " href="{{route('admin.projects.edit', $project)}}" title="edit"><i class="fa-solid fa-pencil"></i></a>
                    <form class="d-inline"
                    onsubmit="return confirm('Confermi l\'eliminazione?')"
                    action="{{route('admin.projects.destroy', $project)}}" method="POST">
                      @csrf
                      @method('DELETE')
                        <button type="submit" class="btn btn-danger " title="delete"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>

            @empty
            <h2>Nessun progetto trovato</h2>
            @endforelse

        </tbody>
    </table>

    {{$projects->links()}}

</div>

@endsection
