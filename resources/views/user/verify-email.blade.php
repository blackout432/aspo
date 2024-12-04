@extends('layouts.main')

@section('title', 'Home page')

@section('content')

<div class="alert alert-info" role="alert">
Thank you for registering. The registration confirmation link has been sent to your email!
</div>

<div>
Haven't received the link?
<form method="post" action="{{ route('verification.send') }}">
    @csrf
    <button type = "submit" class = "btn btn-link ps-0">Send link</button>
</form>
</div>
@endsection
