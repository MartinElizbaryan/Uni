@extends("layouts.main")

@push('_styles')
	{{-- <link rel="stylesheet" href="{{asset('css/front/jobs/all.css')}}"> --}}
@endpush

@push('_js')
    <script src="{{ asset('js/faculty.js') }}"></script>
@endpush

@section("content")

    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success" href="/faculty/new">New</a>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Faculties</h4>
                    <p class="card-category">All faculties</p>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($faculties as $faculty)
                                <tr>
                                    <td>{{$faculty['id']}}</td>
                                    <td>{{$faculty['name']}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/faculty/edit/{{$faculty['id']}}">Edit</a>
                                        <button class="btn btn-danger __delete" data-id="{{$faculty['id']}}">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




	

@endsection