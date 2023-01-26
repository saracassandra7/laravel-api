@extends('layouts.app')

@section('content')

<div class="contanier ms-4">
    <h1>{{$project->name}}</h1>

    @if ($project->type)
        <p>Tipo: {{$project->type->name}}</p>
    @endif

    @if ($project->technologies)
      <div class="mb-3">
        @foreach ($project->technologies as $technology)
            <span class="badge text-bg-warning">{{$technology->name}}</span>
        @endforeach
      </div>
    @endif

    @if ($project->cover_image)

        <div class="cover_image">
            <img src="{{asset('storage/' . $project->cover_image)}}" alt="{{$project->image_original_name}}">
            <i>{{$project->image_original_name}}</i>
        </div>

    @endif

    <span>Cliente: {{$project->client_name}}</span>
    <p>Descrizione: {{$project->summary}}</p>

    <a class="btn btn-info my-3" href="{{route('admin.projects.index')}}">Indietro</a>
</div>

@endsection
