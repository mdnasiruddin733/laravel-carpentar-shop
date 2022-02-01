@extends('layouts.backend_layout')
@section('breadcrumb-title') Frequently Asked Questions and Answers @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                @if(session('success'))
                    <div class="alert alert-success m-3">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">FAQ List
                    <div class="btn-actions-pane-right">
                        <a href="{{ route('faq.create') }}" class="mb-2 mr-2 btn btn-primary">Add New FAQ</a>
                    </div>
                </div>
                <div class="table-responsive">
                    @if(count($faqs)>0)
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Question</th>
                            <th class="text-center">Answer</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sereal = 1 @endphp
                        @foreach($faqs as $key=>$faq)
                        <tr>
                            <td class="text-muted">{{ ++$key}}</td>
                            <td class="text-left"><p>{{ $faq->question}}</p></td>
                            <td class="text-left"><p>{{ $faq->answer }}</p></td>
                            <td class="text-center">
                                <a href="{{ route('faq.edit',$faq->id) }}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                            <td>
                                <button
                                    onclick="confirmDelete()"
                                    data-link="{{route('faq.delete',$faq->id) }}"  id="PopoverCustomT-1" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3 class="text-center text-muted m-3">No faq found</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
