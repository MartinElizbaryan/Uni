@extends("layouts.main")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/jobs/all.css')}}"> --}}
@endpush

@push('_js')
    <script src="{{ asset('js/students.js') }}"></script>
@endpush

@section("content")

    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{old("name")}}">
                </div>

                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" value="{{old("lastname")}}">
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="name" name="phone" class="form-control" value="{{old("phone")}}">
                </div>

                <div class="form-group">
                    <label for="faculty">Faculty Name:</label>
                    {{-- <input type="text" id="name" name="name" class="form-control"> --}}
                    <select name="faculty" id="faculty" class="form-control">
                        <option value="" disabled="" selected="" hidden="">- - -</option>
                        @foreach($faculties as $faculty)
                            <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Group Name:</label>
                    {{-- <input type="text" id="name" name="name" class="form-control"> --}}
                    <select name="group" id="group" class="form-control">
                        <option value="" disabled="" selected="" hidden="">- - -</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" id="name" class="btn btn-success" value="Save">
                </div>

            </form>
        </div>
    </div>




    

@endsection