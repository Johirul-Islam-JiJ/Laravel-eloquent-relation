@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Parks</div>

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">S.I</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Picture</th>

                                    {{-- <th scope="col">Division</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($parks as $park)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $park->name }}</td>
                                        <td>{{ $park->address }}</td>
                                        <td>{{ $park->email }}</td>
                                        <td>{{ $park->phone }}</td>
                                        <td>
                                             <img src={{ "$park->image" }} class="img-fluid" height="40px" width="40px"
                                                alt="">
                                        </td>
                                        <td>
                                             <img src={{ route('parks.photo', $park) }} class="img-fluid" height="40px" width="40px"
                                                alt="">
                                        </td>
                                        {{-- <td>{{ $park->division }}</td> --}}
                                        <td>
                                            <a href="{{ route('parks.edit', $park->id) }}">Edit</a>
                                            <a href="{{ route('parks.show', $park) }}" class="btn btn-dark btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <form action="{{ route('parks.destroy', $park->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-success" href="{{ route('parks.create') }}">Create Park</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
