@props(['job'])

<x-panel class="gap-6">
    <div>
        <x-employee-logo />
    </div>
    
    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-500">Cody Web Developement Inc.</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">Backend Developer</h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - From $50,000</p>
        {{-- <a class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p> --}}
    </div>
    
    <div>
        {{-- <x-tag>tag</x-tag> --}}
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>  
</x-panel>
