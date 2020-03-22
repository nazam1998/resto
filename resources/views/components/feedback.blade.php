<!--feedback-->
<section class="feedback" id="feedback">
    <div class="container w960">
        <div class="heading">
            <img class="dividerline" src="img/sep.png" alt="">
            <h2>Clients Say</h2>
            <img class="dividerline" src="img/sep.png" alt="">
            <h3>Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat.<br>
                Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt in. Sed tincidunt tristique enim sed
                sollcitudin.</h3>
        </div>
        <div class="row">
            @foreach ($testimonials as $item)

            <blockquote>{{$item->texte}}
                <cite>
                    {{$users->where('id_testimonial',$item->id)->first()->nom.' '.$users->where('id_testimonial',$item->id)->first()->prenom}}<br />
					@for($i=0;$i<$item->note;$i++)
					<i class="fa fa-star"></i>
					@endfor
                </cite>
            </blockquote>
            @endforeach
        </div>
    </div>
</section>
