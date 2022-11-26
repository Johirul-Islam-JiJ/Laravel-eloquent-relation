@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card shadow border-0 rounded w-50">
            <div class="card-body">
                <h4 class="text-center">Assign Division</h4>
                <form action="{{ route('parks.assign-division', $park) }}"
                      method="post">
                    @csrf

                    <div class="form-group my-3">
                        <label for="division_id">Division</label>
                        <select name="division_id"
                                id="division_id"
                                class="form-control"
                                required>
                            <option value=""
                                    selected
                                    disabled>Please Select...
                            </option>
                            @foreach($divisions as $division)
                                <option value="{{ $division->id }}"
                                        @if(old('division_id') === $division->id) selected @endif>
                                    {{ $division->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('division_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <a href="{{ route('parks.index') }}"
                           class="btn btn-secondary">Back</a>
                        <button class="btn btn-success">Assign</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
