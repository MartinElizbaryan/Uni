@extends("layouts.main")

@push('_styles')
	{{-- <link rel="stylesheet" href="{{asset('css/front/jobs/all.css')}}"> --}}
@endpush

@push('_js')
    <script src="{{ asset('js/group.js') }}"></script>
@endpush

@section("content")

    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success" href="/group/new">New</a>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Groups</h4>
                    <p class="card-category">All groups</p>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Faculty</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($groups as $group)
                                <tr>
                                    <td>{{$group['id']}}</td>
                                    <td>{{$group['name']}}</td>
                                    <td>
                                        @if(isset($group->faculty->name))
                                            {{$group->faculty->name}}
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="/group/edit/{{$group['id']}}">Edit</a>
                                        <button class="btn btn-danger __delete" data-id="{{$group['id']}}">Delete</button>
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