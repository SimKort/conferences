@extends('app')

@section('content')
    <h1>Edit Conference</h1>
    <form action="{{ route('conferences.update', $conference) }}" method="POST">
        @csrf
        @method('PUT')
        @include('form')
        <button type="submit">Update Conference</button>
    </form>
@endsection
