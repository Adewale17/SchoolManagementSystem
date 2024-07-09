@extends('admin.layout.app')

@section('content')
<div class="content-body d-flex justify-content-center align-items-center min-vh-100">
    <div class="container text-center">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Parent Profile</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">All Parent</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin.guardian.show') }}">Back</a></li>
                </ol>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-6 col-xxl-9 col-lg-8">
                <div class="card">
                    <div class="text-center p-3 overlay-box"
                        style="background-image: url(public/images/big/img1.jpg);">
                        <div class="profile-photo">
                            <img src="{{ $guardian->image }}" width="100" class="img-fluid rounded-circle" alt="">
                        </div>
                        <h3 class="mt-3 mb-1 text-white">{{ $guardian->user->name }}</h3>
                        <p class="text-white mb-0">{{ $guardian->user->type }}</p>
                    </div>
                    <div class="col-lg">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Phone Number</span>
                                <strong class="text-muted">{{ $guardian->phone }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Email</span>
                                <strong class="text-muted">{{ $guardian->user->email }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Address</span>
                                <strong class="text-muted">{{ $teacher->address }}</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center border-0 mt-0">
                        <a href="javascript:void(0);" class="btn btn-warning px-4">Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
