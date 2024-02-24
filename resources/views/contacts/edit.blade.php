@extends('layouts.app')
@section('title','Edit Contact')
@section('content')
    <form method="post" action="{{route('contacts.update',compact('contact'))}}" >
        @csrf
        @method('put')
        <div class="mb-3">
            <label>first_name</label>
            <input type="text" name="first_name" value="{{$contact->first_name}}"placeholder="first_name">
        </div>
        <div class="mb-3">
            <label>last_name</label>
            <input type="text" name="last_name" value="{{$contact->last_name}}"placeholder="last_name">
        </div>
        <div class="mb-3">
            <label>email</label>
            <input type="email" name="email" value="{{$contact->email}}"placeholder="email">
        </div>
        <div class="mb-3">
            <label>city</label>
            <input type="text" name="city" value="{{$contact->country}}"placeholder="city">
        </div>
        <div class="mb-3">
            <label>country</label>
            <input type="text" name="country" value="{{$contact->city}}"placeholder="country">
        </div>
        <div class="mb-3">
            <label>job_title</label>
            <input type="text" name="job_title" value="{{$contact->job_title}}"placeholder="job_title">
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="add contact">
        </div>
    </form>
@endsection