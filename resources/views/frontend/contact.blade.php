@extends('layouts.frontend_layout')
@section('contacts')
   active 
@endsection
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Contact Us</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Contacts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                    <h3 class="text-center m-3 p-2">Cotact Our Administartor</h3>
                  <div class="card-body">
                    <form action="{{route('mail.send')}}" method="post">
                    @csrf 
                    <div class="row mb-2">
                            <div class="col-md-2"><label for="">Name:</label></div>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-2"><label for="">Email:</label></div>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-2"><label for="">Subject:</label></div>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="">
                                @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-2"><label for="">Message:</label></div>
                            <div class="col-md-10">
                                <textarea rows="4" class="form-control @error('message') is-invalid @enderror" name="message"></textarea>
                                @error('message')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2"> 
                            <div class="col-md-12">
                                <input type="submit" value="Send" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
                </div>
              
            </div>
        </div>
    </section>

@endsection
