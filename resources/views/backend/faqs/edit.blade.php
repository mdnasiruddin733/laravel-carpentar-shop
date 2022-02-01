@extends('layouts.backend_layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Edit FAQ
                    <div class="btn-actions-pane-right">
                        <a href="{{ route('faq.index') }}" class="mb-2 mr-2 btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('faq.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" required value="{{$faq->id}}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Question:</label>
                                    <input type="text" name="question" class="form-control @error('question') is-invalid @enderror" placeholder="Write question here" value="{{$faq->question}}" required>
                                    @error('question') <span class="text-danger">{{ $message }} </span>@enderror
                                </div>
                            </div>

                           <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Answer:</label>
                                    <textarea name="answer" class="form-control @error('answer') is-invalid @enderror" placeholder="Write answer here" required>{{$faq->answer}}</textarea>
                                    @error('answer') <span class="text-danger">{{ $message }} </span>@enderror
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <button class="btn btn-success px-5 py-2" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

