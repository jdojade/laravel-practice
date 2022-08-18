@extends('layouts.app')

@section('content')
<p> params content </p>
<p> {{ $sample }}</p>

@if ($sample == 'sample1')
    @foreach ($arraySample as $data1)
        <p>{{ $data1 }}</p>
    @endforeach
@elseif ($sample == 'sample2')
    <p>the data view only is {{ $sample }}</p>
@elseif ($sample == 'sample')
    <p>{{ $sample }} only</p>
@else 
    <p>no data</p>
@endif

@endsection