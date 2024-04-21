@extends('app')

@section('content')
    <h1>Create Conference</h1>
    <form action="{{ route('conferences.store') }}" method="POST">
        @csrf
        @include('form')
        <button type="submit">Create Conference</button>
    </form>
@endsection
