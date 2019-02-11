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
            <a class="btn btn-success" href="/students/new">New</a>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Studnets</h4>
                    <p class="card-category">All students</p>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        <input type="text" placeholder="Search..." class="form-control __search" data-where="name">
                                    </th>
                                    <th>
                                        <input type="text" placeholder="Search..." class="form-control __search" data-where="lastname">
                                    </th>
                                    <th>
                                        <input type="text" placeholder="Search..." class="form-control __search" data-where="phone">
                                    </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <th>Lastname</th>
                                    <th>Phone</th>
                                    <th>Faculty</th>
                                    <th>Group</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($students)
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{$student['name']}}</td>
                                            <td>{{$student['lastname']}}</td>
                                            <td>{{$student['phone']}}</td>
                                            <td>
                                                @if(isset($student->group->faculty->name))
                                                    {{$student->group->faculty->name}}
                                                @endif
                                            </td>
                                            <td>
                                                @if(isset($student->group->name))
                                                    {{$student->group->name}}
                                                @endif
                                            </td>
                                            <td>
                                                <a class="d-block btn-long btn btn-primary" href="/students/edit/{{$student['id']}}" style="width: 100%">Edit</a>
                                                <button class="d-block btn btn-long btn-danger __delete" data-id="{{$student['id']}}" style="width: 100%">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




	

@endsection