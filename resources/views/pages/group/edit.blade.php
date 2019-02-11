@extends("layouts.main")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/jobs/all.css')}}"> --}}
@endpush

@push('_js')
    {{-- <script type="text/javascript" src="{{asset('js/front/jobs/index.js')}}"></script> --}}
@endpush

@section("content")

    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Group Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$group->name}}">
                </div>
                <div class="form-group">
                    <label for="name">Faculty Name:</label>
                    {{-- <input type="text" id="name" name="name" class="form-control"> --}}
                    <select name="faculty" id="" class="form-control">
                        <option value="" disabled="" selected="" hidden="">- - -</option>
                        @foreach($faculties as $faculty)
                            <option value="{{ $faculty->id }}"
                                @if($faculty->id == $group->faculty_id)
                                    selected=""
                                @endif 
                            >{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" id="name" class="btn btn-success" value="Save">
                </div>

            </form>
        </div>
    </div>




    

@endsection