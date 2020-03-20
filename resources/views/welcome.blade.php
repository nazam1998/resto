@extends('layouts.app')

@section('content')

<div class="wrapper" id="wrapper">
    @include('components.header')
    @include('partials.about')
    @include('partials.special')
    @include('components.feedback')
    @include('components.contact')
    @include('components.footer')
</div>

@endsection
