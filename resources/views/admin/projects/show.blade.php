@extends('layouts.app')

@section('page-title', 'Projects')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Title: {{ $project->title }}
                    </h5>
                    <p>
                        Description: {{ $project->description }}
                    </p>
                    <a href="{{ $project->image }}">
                        immagine
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection