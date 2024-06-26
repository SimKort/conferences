@extends('app')

@section('content')

    <div class="container">
        <h1 class="text-center" style="margin-top: 20px;">Conference List</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Conference title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Address</th>
                <th>Number of participants</th>
                @auth
                    <th>Actions</th>
                @endauth
            </tr>
            </thead>
            <tbody>
            @foreach ($conferences as $conference)
                <tr>
                    <td>{{ $conference->title }}</td>
                    <td>{{ $conference->description }}</td>
                    <td>{{ $conference->date }}</td>
                    <td>{{ $conference->address }}</td>
                    <td>{{ $conference->participants }}</td>
                    @auth
                        <td>
                            <form action="{{ route('conferences.edit', $conference->id) }}" method="GET" style="display: inline;">
                                <button type="submit" class="btn btn-danger btn-sm" style="background-color: white; color: purple; border-color: purple;">Edit</button>
                            </form>
                            <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this conference?')">Delete</button>
                            </form>
                        </td>
                    @endauth
                </tr>
            @endforeach
            </tbody>
        </table>

        @auth
            <div class="text-right" style="margin-top: 20px;">
                <form action="{{ route('conferences.create') }}" method="GET" style="display: inline;">
                    <button type="submit" class="btn btn-sm" style="background-color: purple; border-color: #610243; color: white;">Add Conference</button>
                </form>
            </div>
        @endauth

    </div>

@endsection
