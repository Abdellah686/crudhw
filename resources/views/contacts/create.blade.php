@extends('layouts.app')
@section('title','Create Contact')
@section('content')
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('contacts.store')}}" >
        @csrf
        @method('post')
        <div class="mb-3">
            <label>first_name</label>
            <input type="text" name="first_name" placeholder="first_name">
        </div>
        <div class="mb-3">
            <label>last_name</label>
            <input type="text" name="last_name" placeholder="last_name">
        </div>
        <div class="mb-3">
            <label>email</label>
            <input type="email" name="email" placeholder="email">
        </div>
        <div class="mb-3">
            <label>city</label>
            <input type="text" name="city" placeholder="city">
        </div>
        <div class="mb-3">
            <label>country</label>
            <input type="text" name="country" placeholder="country">
        </div>
        <div class="mb-3">
            <label>job_title</label>
            <input type="text" name="job_title" placeholder="job_title">
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="add contact">
        </div>
    </form>
@endsection