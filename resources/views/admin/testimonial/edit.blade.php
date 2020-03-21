@extends('layouts.admin')

@section('content')
<div class="container text-center">
    @if(Auth::check())
    <form action="{{route('updateTestimonial')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Edit du testimonial</h1>

            <div class="form-group">
                <label for="testimonial">Testimonial</label>
                @error('testimonial')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="text" class="form-control" id="testimonial" name="testimonial" value="{{old('testimonial',$testimonial->testimonial)}}">
            </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    @else
    <h1 class="text-danger">Désolé, vous n'avez pas l'autorisation d'accéder à cette page
        <span class="text-danger">Veuillez vous connecter avec le compte correspondant</span>
    </h1>
    @endif
</div>
@endsection
