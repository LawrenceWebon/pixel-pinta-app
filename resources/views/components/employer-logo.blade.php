@props(['width' => 90, 'employer'])
<img src="{{ asset('storage/' .$employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}">
{{-- <img src="{{ asset('$employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> --}}

{{-- <img class="rounded-xl" src="http://picsum.photos/seed/{{rand(0,1000)}}/{{$width}}" alt=""> --}}
