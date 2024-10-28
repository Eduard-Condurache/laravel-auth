@extends('layouts.app')

@section('page-title', 'Projects')

@section('main-content')
    <div class="row">
        <div class="col">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.projects.update', ['project' => $project ->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label 
                        for="title" 
                        class="form-label">Titolo</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="title" name="title"
                        value="{{ old('title', $project->title) }}"
                        placeholder="Inserisci il titolo..." 
                        required>
                  </div>

                  <div class="mb-3">
                    <label 
                        for="description" 
                        class="form-label">Descrizione</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="description" 
                        name="description"
                        value="{{ old('title', $project->description) }}"
                        placeholder="Inserisci la descrizone" 
                        required>
                  </div>

                  <div class="mb-3">
                    <label 
                        for="image" 
                        class="form-label">Immagine</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="image" 
                        name="image"
                        value="{{ old('title', $project->image) }}" 
                        placeholder="Inserisci il link del immagine">
                  </div>

                  <div class="mb-3">
                    <label 
                        for="category" 
                        class="form-label">Categoria</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="category" 
                        name="category"
                        value="{{ old('title', $project->category) }}" 
                        placeholder="Inserisci il link del immagine">
                  </div>

                  <div>
                    <button type="submit" class="btn btn-success">
                        Modifica
                    </button>
                  </div>
            </form>
        </div>
    </div>
@endsection