@extends('frontend.layouts.pages-master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Service Details Area -->
    <div class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('frontend.user.sidemenu')
                </div>

                <div class="col-lg-9">
                    <div class="service-article">
                        <section class="checkout-area pb-70">
                            <div class="container">
                                <form action="{{ route('user.password.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-details">
                                                <h3 class="title">Change Password </h3>

                                                <div class="row">

                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Old Password<span class="required">*</span></label>
                                                            <input type="password" name="old_password" id="old_password" class="form-control @error('old_password') is-invalid @enderror" value="{{ old('old_password') }}">
                                                            @error('old_password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>New Password<span class="required">*</span></label>
                                                            <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" value="{{ old('old_password') }}">
                                                            @error('new_password')
                                                            <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Confirm New Password<span class="required">*</span></label>
                                                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control @error('new_password_confirmation') is-invalid @enderror" value="{{ old('old_password') }}">
                                                            @error('new_password_confirmation')
                                                            <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-danger">Update Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Details Area End -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
