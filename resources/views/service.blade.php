@extends('layout.app')
@section('title', "Service")

@section('content')
<div class="container-fluid bg-dark">
    <div class="row p-5">
        <div class="col-md-12 text-center">
            <h3 class="text-white">My Services</h3>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
            <div class="col-md-4 p-1">
                <div class="card" style="width:100%">
                    <img src="{{ asset('image\first02.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width:100%">
                    <img src="{{ asset('image\first02.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        <div class="col-md-4 p-1">
                <div class="card" style="width:100%">
                    <img src="{{ asset('image\first02.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-md-6">
        <form>
  <div class="form-group">
    <label for="exampleofusername">Your Name</label>
    <input type="text" class="form-control" id="exampleInputName">
  </div>
  <div class="form-group">
    <label for="exampleofusername">Your Mobile</label>
    <input type="text" class="form-control" id="exampleInputName">
  </div>
  <div class="form-group">
    <label for="exampleofusername">Your Email</label>
    <input type="email" class="form-control" id="exampleInputName">
  </div>
  <div class="form-group">
    <label for="exampleofusername">Your Massage</label>
    <input type="text" class="form-control" id="exampleInputName">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
        <div class="col-md-6 p-8">
        <h5>Address</h5>
        <h5>Parkhi, Kalihati, Tanglail</h5>
        <h5>01731763485</h5>
        <h5>ariful15-1073@diu.edu.bd</h5>
        </div>
    </div>
</div>
@endsection
