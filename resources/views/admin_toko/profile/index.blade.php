@extends('admin_toko.layout.core_store')

<title>Foresell - Profile</title>

@section('judul')
    Profile Toko
@endsection

@section('content')

<div class="container rounded shadow-sm p-3 my-5 border">
    @if (session()->has('updateprofile'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <small>{{ session('updateprofile') }}</small>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-md-2 mt-3">
            <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle my-0" width="150px" src="https://source.unsplash.com/150x150?technology">
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="row g-3">
                <h5 class="mt-4 mb-2 title">Personal Profile</h5>
                <div class="col-md-12 my-2">
                    <div class="form-floating-sm">
                        <label for="name">Full Name</label>
                        <p>Toko A</p>
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <div class="form-floating-sm">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Enter your email address" >
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <div class="form-floating-sm">
                        <label for="phone">Phone Number</label>
                        <input type="phone" class="form-control form-control-sm" id="phone" name="phone" placeholder="Enter your phone number" >
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="row g-3">
                <h5 class="mt-4 mb-2 title">Shipping Address</h5>
                <div class="col-md-6 my-2">
                    <div class="form-floating-sm">
                        <label for="city">City</label>
                        <input type="text" class="form-control form-control-sm" id="city" name="city" placeholder="Enter your city" >
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <div class="form-floating-sm">
                        <label for="postalcode">Post Code</label>
                        <input type="text" class="form-control form-control-sm" id="postalcode" name="postalcode" placeholder="Enter your post code" >
                    </div>
                </div>
                <div class="col-md-12 my-1">
                    <div class="form-floating-sm">
                        <label for="address">Address</label>
                        <textarea type="text" class="form-control form-control-sm" id="address" name="address" placeholder="Enter your address" rows="3" ></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 text-center">
        <a href="/admin_toko/profile/create" class="btn btn-dark">Edit Profile</a>
    </div>
    </form>
</div>


@endsection