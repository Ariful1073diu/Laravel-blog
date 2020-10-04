@extends('layout.app')
@section('title', "Home")

@section("content")
<div class="container-fluid parallax m-0">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 topDiv text-center">
            <h1 class="text-white">Software Engineer</h1>
            <h3 class="text-white">Mobile & Web</h3>
            <button class="btn btn-primary">Learn More</button>
        </div>

    </div>
</div>

<div class="container text-center mb-3 mt-3">
    <h2>My Services</h2><br><br>
    <div class="row">
            <div class="col-md-4 p-1">
                <div class="card" style="width:100%">
                    <img src="{{ asset('image\first02.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card" style="width:100%">
                    <img src="{{ asset('image\first02.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 p-1">
                <div class="card" style="width:100%">
                    <img src="{{ asset('image\first02.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="container text-center mb-3 mt-3">
    <h2>Recent Project</h2><br><br>
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
<div class="container text-center mb-5 mt-5">
        <h2>Contract with Me</h2><br><br>
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
  <button type="submit" class="btn btn-block btn-primary">Submit</button>
</form>
    </div>
        <div class="col-md-6 p-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12272.26509656373!2d90.32824992275677!3d23.869531707867438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c22e803252d3%3A0xcc04d9e5fa8ee728!2sDampara%20Mosque!5e0!3m2!1sen!2sbd!4v1600280648170!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>"
        </div>
    </div>
</div>
</div>
@endsection
