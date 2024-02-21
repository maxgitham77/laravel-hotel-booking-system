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
                                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-details">
                                                <h3 class="title">User Profile </h3>

                                                <div class="row">

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name <span class="required">*</span></label>
                                                            <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name <span class="required">*</span></label>
                                                            <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Address<span class="required">*</span></label>
                                                            <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Email Address <span class="required">*</span></label>
                                                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone <span class="required">*</span></label>
                                                            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>User Profile <span class="required">*</span></label>
                                                            <input type="file" name="photo" id="image" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="form-group">
                                                            <label> <span class="required">*</span></label>
                                                            <img id="showImage" src="{{ (!empty($user->photo)) ? url('uploads/user_images/'.$user->photo) : url('uploads/no_images.png')  }}" alt="User" class="rounded-circle p-1 bg-primary" width="110">
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-danger">Save Changes</button>
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
