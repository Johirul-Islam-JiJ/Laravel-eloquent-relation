@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Parks Create
                        <a class="btn btn-success btn-sm " href="{{ route('parks.index') }}">Back</a>
                    </div>



                    <div class="card-body">


                        <form method="POST" action="{{ route('parks.store') }}" enctype="multipart/form-data">
                            @csrf


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control mb-3" id="name" name="name"
                                    value="{{ old('name') }}" placeholder="Enter Park Name">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control mb-3" id="address" name="address"
                                    value="{{ old('address') }}" placeholder="Enter Park Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control mb-3" id="email" name="email"
                                    value="{{ old('email') }}" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control mb-3" id="phone" name="phone"
                                    value="{{ old('phone') }}" placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control mb-3" id="image" name="image"
                                     placeholder="Enter image">
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" class="form-control mb-3" id="photo" name="photo"
                                     placeholder="Enter photo">
                            </div>
                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="file" class="form-control mb-3" id="picture" name="picture"
                                     placeholder="Enter picture">
                            </div>

                            {{-- <div class="form-group my-3">
                                <label for="division_id">Division</label>
                                <select name="division_id" id="division_id" class="form-control" required>
                                    <option value="" selected disabled>Please Select...
                                    </option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}"
                                            @if (old('division_id') === $division->id) selected @endif>
                                            {{ $division->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('division_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
