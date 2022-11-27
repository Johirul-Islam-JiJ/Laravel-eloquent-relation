@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50 shadow border-0">
            <div class="card-body">
                <h4 class="text-center">Park</h4>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <td>{{ $park->name }}</td>
                    </tr>
                    <tr>
                        <th>Division</th>
                        <td>
                            @foreach($park->divisions as $division)
                                {{ $division->name }}
                            @endforeach
                            <a href="{{ route('parks.assign-division.form', $park) }}"
                               class="btn btn-outline-primary btn-sm">Add</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $park->address }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $park->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $park->phone }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection
