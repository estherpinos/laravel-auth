@extends('admin.home')

@section('content')

<h3 class="text-black">PROJECTS</h3>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Azioni</th>

      </tr>
    </thead>
    <tbody>

        @foreach ( $tecnologies as $tecnology )

        <tr>
            <td>{{$tecnology->id}}</td>
            <td>{{$tecnology->title}}</td>
            {{-- <td><a href="{{route('projects.show', $comic->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a></td> --}}


          </tr>

        @endforeach


    </tbody>
  </table>


@endsection
