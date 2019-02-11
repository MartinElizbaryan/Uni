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
                    <input type="text" id="name" name="name" class="form-control" value="{{ $student->name }}">
                </div>

                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" value="{{ $student->lastname }}">
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="name" name="phone" class="form-control" value="{{ $student->phone }}">
                </div>

                <div class="form-group">
                    <label for="faculty">Faculty Name:</label>
                    {{-- <input type="text" id="name" name="name" class="form-control"> --}}
                    <select name="faculty" id="faculty" class="form-control">
                        <option value="" disabled="" selected="" hidden="">- - -</option>
                        @foreach($faculties as $faculty)
                            <option value="{{ $faculty->id }}"
                                @if(isset($student->group->faculty_id) && $student->group->faculty_id == $faculty->id)
                                    selected=""
                                @endif 
                            >{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Group Name:</label>
                    <select name="group" id="group" class="form-control">
                        <option value="" disabled="" selected="" hidden="">- - -</option>
                        @if(isset($student->group->faculty->group))
                            @foreach($student->group->faculty->group as $group)
                                <option value="{{ $group->id }}"
                                    @if($student->group->id == $group->id)
                                        selected=""
                                    @endif
                                >{{ $group->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" id="name" class="btn btn-success" value="Save">
                </div>

            </form>
        </div>
    </div>




    

@endsection