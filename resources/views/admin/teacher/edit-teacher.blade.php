@extends('admin.layout.app')
@section('content')
<div class="content-body ">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add Teacher</h4>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="post" id="addStaffForm"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="last_name">Full Name</label>
                                        <input value="{{ $teacher->user->name }}" name="name" id="last_name" type="text"
                                            class="form-control">
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email_here">Email </label>
                                        <input value="{{ $teacher->user->email }}" id="email_here" type="email"
                                            class="form-control" name="email">
                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="mobile_number">Mobile Number</label>
                                        <input value="{{ $teacher->phone }}" id="mobile_number" type="text"
                                            class="form-control" name="phone">
                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="designation">Address</label>
                                        <input value="{{ $teacher->address }}" id="designation" type="text"
                                            class="form-control" name="address">
                                        @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group fallback w-100">
                                        <input type="file" value="{{ $teacher->image }}" class="form-control" data-default-file="" name="image" accept="image/*">
                                        @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
