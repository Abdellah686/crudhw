@extends('layouts.app')
@section('title', 'Contacts List')
@section('content')
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="col-sm-12">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @elseif (session()->has('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
        @endif
        <div>
            <div>
                <a href="{{ route('contacts.create') }}"
                 class="btn btn-primary m-3">
                    New contact</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>first_name</th>
                        <th>last_name</th>
                        <th>email</th>
                        <th>city</th>
                        <th>country</th>
                        <th>job_title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->first_name }}</td>
                            <td>{{ $contact->last_name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->city }}</td>
                            <td>{{ $contact->country }}</td>
                            <td>{{ $contact->job_title }}</td>
                            <td>
                                <div class="my-3">
                                    <a class='btn btn-info' href="{{ route('contacts.edit', compact('contact')) }}">Edit</a>
                                </div>
                                <form method="post" action="{{ route('contacts.destroy', compact('contact')) }}">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
