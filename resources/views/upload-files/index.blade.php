@extends('layouts.app')

@section('content')
<p> upload </p>

<form action="{{ url('uploadFile') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="fileName">
    <input type="file" name="file">
    
    <input type="submit">
</form>


@foreach ($data as $file)
    <p>{{ $file->fileName }}</p>
    <p>{{ $file->fileUrl }}</p>
    
    <p><a href="{{ url('files' . '/?file=' .  $file->fileUrl) }}">Download</a></p>
@endforeach

@endsection