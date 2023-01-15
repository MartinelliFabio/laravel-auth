@extends('layouts.admin')
@section('content')
<h1>Create Project</h1>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Picture</label>
                        <input type="file" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror">
                        @error('cover_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="dev_lang" class="form-label">Linguaggi</label>
                    <input type="text" class="form-control @error('dev_lang') is-invalid @enderror" id="dev_lang" name="dev_lang">
                </div>
                <div class="mb-3">
                    <label for="framework" class="form-label">Framework</label>
                    <input type="text" class="form-control @error('framework') is-invalid @enderror" id="framework"
                        name="framework">
                </div>
                <div class="mb-3">
                    <label for="diff_lvl" class="form-label">Livello di difficoltà</label>
                    <input type="text" class="form-control @error('diff_lvl') is-invalid @enderror" id="diff_lvl"
                        name="diff_lvl">
                </div>
                <div class="mb-3">
                    <label for="team" class="form-label">Team</label>
                    <input type="text" class="form-control @error('team') is-invalid @enderror" id="team"
                        name="team">
                </div>
                <div class="mb-3">
                    <label for="git_link" class="form-label">Link git</label>
                    <input type="text" class="form-control @error('git_link') is-invalid @enderror" id="git_link"
                        name="git_link">
                </div>
                <!--<div class="mb-3">
                        <label for="cover_image" class="form-label">Immagine</label>
                        <input type="file" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror" >
                        @error('cover_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>-->
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
