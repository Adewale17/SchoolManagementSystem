@extends('admin.layout.app')
@section('content')


<div class="content-body ">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Teacher</h4>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Teacher </h4>
                                <a href="{{ route('admin.teacher.create') }}" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display text-nowrap" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($teachers as $teacher )

                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="{{ $teacher->image }}"
                                                        alt="">
                                                </td>
                                                <td>{{ $teacher->user->name }}</td>
                                                <td>{{ $teacher->user->email }}</td>
                                                <td><a href="javascript:void(0);"><strong>{{ $teacher->phone
                                                            }}</strong></a></td>
                                                </td>
                                                <td>I{{ $teacher->address }}</td>
                                                @auth <form action="{{ route('admin.teacher.destroy', $teacher->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <td>



                                                        <a href="{{ route('admin.teacher.show', $teacher->id) }}"
                                                            class="btn btn-xs sharp btn-primary"><i
                                                                class="fa fa-eye"></i></a>
                                                        <a href="{{ route('admin.teacher.edit', $teacher->id) }}"
                                                            class="btn btn-xs sharp btn-primary"><i
                                                                class="fa fa-pencil"></i></a>

                                                        <button class="btn btn-xs sharp btn-primary"><i
                                                                class="fa fa-trash"></i></a></button>
                                                </form> @endauth
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
            </div>
        </div>
    </div>
</div>

@endsection
