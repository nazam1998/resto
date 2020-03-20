@extends('layouts.admin')

@section('content')
<div class="container text-center">
    @if(Auth::check() && Auth::id()<2)
    <form action="{{route('saveHeader')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Edit du Header</h1>

            <div class="form-group">
                <label for="titre">Titre</label>
                @error('titre')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="text" class="form-control" id="titre" name="titre" value="{{old('titre')}}">
            </div>
            
            <div class="form-group">
                <label for="banniere">Bannière</label>
                @error('banniere')
            <small class="text-danger">{{$message}}</small>
            @enderror
                <input type="file" class="form-control" id="banniere" name="banniere" value="{{old('banniere')}}">
            </div>
            <?php 
      $icones=[
        ['class'=>'fas fa-desktop','code'=>'f108'],
        ['class'=>'fas fa-paper-plane','code'=>'f1d8'],
        ['class'=>'fas fa-chart-bar','code'=>'f080'],
        ['class'=>'fas fa-camera','code'=>'f030'],
        ['class'=>'fas fa-road','code'=>'f018'],
        ['class'=>'fas fa-shopping-bag','code'=>'f290'],
      ]
    ?>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Logo</label>
                @error('logo')
                <small>{{$message}}</small>
                @enderror
                <select name="icone" id="form-control">
                    @foreach ($icones as $key=>$item)
                    @if ($item['class']==$header->icone)
                    <option selected value="{{$item['class']}}">&#x{{$item['code']}}</option>    
                    @else
                    <option value="{{$item['class']}}">&#x{{$item['code']}}</option>    
                    @endif
                    @endforeach
                  </select>
            </div>
            </div>
        <button type="submit" class="btn btn-success">Editer</button>
    </form>
    @else
    <h1 class="text-danger">Désolé, vous n'avez pas l'autorisation d'accéder à cette page
        <span class="text-danger">Veuillez vous connecter avec le compte correspondant</span>
    </h1>
    @endif
</div>
@endsection
