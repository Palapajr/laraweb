@extends('layouts.app')

@section('csslibrary')
    <link rel="stylesheet" href="/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/assets/modules/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="/assets/modules/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="/assets/modules/jquery-selectric/selectric.css">
@stop

@section('title', 'Tambah Data Slider')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">

        <div class="card-header">
            <h4>Tambah Data</h4>
        </div>

        <Form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="title">
                </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="summernote-simple" name="description"></textarea>
                </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Gambar</label>
                    <div class="col-sm-12 col-md-7">
                    <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary" type="submit">Publish</button>
                    <a href="{{ url('/slider') }}" class="btn btn-secondary">Kembali</a>
                </div>
                </div>
            </div>
        </Form>

      </div>
    </div>
  </div>
@endsection

@section('jslibrary')
    <script src="/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="/assets/modules/codemirror/lib/codemirror.js"></script>
    <script src="/assets/modules/codemirror/mode/javascript/javascript.js"></script>
    <script src="/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
@stop
