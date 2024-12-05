@extends('layout.master')

@section('content')
<div class="container">
    <h1>Edit Kategori</h1>
    <form action="{{ route('category.aksi_edit', $category->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Judul:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>

</div>
@endsection
