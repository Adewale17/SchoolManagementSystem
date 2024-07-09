@extends('admin.layout.app')
@section('content')
<div class="content-body ">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Guardians</h4>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Guardians </h4>
                                <a href="{{ route('admin.guardian.create') }}" class="btn btn-primary">+ Add new</a>
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
                                            @foreach ($guardians as $guardian )

                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="{{ $guardian->image }}"
                                                        alt="">
                                                </td>
                                                <td>{{ $guardian->user->name }}</td>
                                                <td>{{ $guardian->user->email }}</td>
                                                <td><a href="javascript:void(0);"><strong>{{ $guardian->phone
                                                            }}</strong></a></td>
                                                </td>
                                                <td>I{{ $guardian->address }}</td>
                                                @auth <form action="{{ route('admin.guardian.destroy', $guardian->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <td>



                                                        <a href="{{ route('admin.guardian.show', $guardian->id) }}"
                                                            class="btn btn-xs sharp btn-primary"><i
                                                                class="fa fa-eye"></i></a>
                                                        <a href="{{ route('admin.guardian.edit', $guardian->id) }}"
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
