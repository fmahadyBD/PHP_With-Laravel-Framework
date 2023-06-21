@extends('master')

@section('title')
    Project Detail
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <img src="{{ asset($project->product_image) }}" alt="" height="280"/>
                        <div class="card-body">
                            <h4>{{ $project->product_name }}</h4>
                            <p>{{ $project->product_brand }}</p>
                            <p>{{ $project->product_category }}</p>
                            <p>{{ $project->product_discription }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
