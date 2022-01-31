@extends('layouts.backend_layout')
@section('breadcrumb-title') Settings @endsection
@section('main-content')
<div class="row mb-3">
    <div class="col-md-4">
       <div class="card text-center">
           <img src="{{asset(settings()->logo)}}" alt="" class="card-img-top" style="height:180px; padding:20px;" id="img-logo">
           <div class="card-body">
                <button onclick="imagePreview(event)" data-output="img-logo" data-input="input-logo" class="btn btn-primary btn-block">Upload Logo</button>
           </div>
        </div>
    </div>
    <div class="col-md-4">
       <div class="card text-center">
           <img src="{{asset(settings()->favicon)}}" alt="" class="card-img-top" style="height:180px; padding:20px;" id="img-favicon">
           <div class="card-body">
                <button onclick="imagePreview(event)" data-output="img-favicon" data-input="input-favicon" class="btn btn-primary btn-block">Upload Favicon</button>
           </div>
        </div>
    </div>
    <div class="col-md-4">
       <div class="card text-center">
           <img src="{{asset(settings()->banner)}}" alt="" class="card-img-top" style="height:180px; padding:20px;" id="img-banner">
           <div class="card-body">
                <button onclick="imagePreview(event)" data-output="img-banner" data-input="input-logo" class="btn btn-primary btn-block">Upload Home Banner</button>
           </div>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('admin/settings')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="logo" class="d-none" id="input-logo">
                    <input type="file" name="favicon" class="d-none" id="input-favicon">
                    <input type="file" name="banner" class="d-none" id="input-banner">
                    <input type="hidden" name="prev_logo" value="{{settings()->logo}}">
                     <input type="hidden" name="prev_favicon" value="{{settings()->favicon}}">
                    <input type="hidden" name="prev_banner" value="{{settings()->banner}}">
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Site Name:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{settings()->name}}">
                            @error('name')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Short Name:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('short_name') is-invalid @enderror" name="short_name" value="{{settings()->short_name}}">
                            @error('short_name')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Site Email:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{settings()->email}}">
                            @error('email')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Site Phone:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"  name="phone"  value="{{settings()->phone}}">
                            @error('phone')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                     <div class="row mb-2">
                        <div class="col-md-2"><label for="">Office Address:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('address') is-invalid @enderror"  name="address"  value="{{settings()->address}}">
                            @error('address')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Site slogan:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('slogan') is-invalid @enderror"  name="slogan"  value="{{settings()->slogan}}">
                            @error('slogan')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Topbar Ads Text:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('topbar_ads_text') is-invalid @enderror"  name="topbar_ads_text"  value="{{settings()->topbar_ads_text}}">
                            @error('topbar_ads_text')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Delivery Charge:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('delivery_charge') is-invalid @enderror"  name="delivery_charge"  value="{{settings()->delivery_charge}}">
                            @error('delivery_charge')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2"> 
                        <div class="col-md-12">
                            <input type="submit" value="Save Settings" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section("scripts")
<script>
   function imagePreview(event){
      
        var input=event.target.dataset['input']
        var output=event.target.dataset['output']
        document.getElementById(input).click()
       document.getElementById(input).addEventListener('change',function(change_event){
            var link=URL.createObjectURL(change_event.target.files[0])
            document.getElementById(output).setAttribute('src',link)
        })
   }
</script>
@endsection