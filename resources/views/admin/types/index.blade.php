@extends('admin.home')

@section('content')

<h3 class="text-black">PROJECTS</h3>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>

      </tr>
    </thead>
    <tbody>

        @foreach ( $types as $type )

        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->title}}</td>
            {{-- <td><a href="{{route('projects.show', $comic->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a></td> --}}


          </tr>

        @endforeach


    </tbody>
  </table>


@endsection
