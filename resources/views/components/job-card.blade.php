@props(['job'])

<x-panel class="flex-col text-center">
    <div class="self-start  text-sm">Cody Web Developement</div>
    {{-- <div class="self-start  text-sm">{{ $job->employer->name }}</div> --}}
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Backend Developer</h3>
        {{-- <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">{{ $job->title }}</h3> --}}
        <p class="text-sm mt-4">Full Time - From  $50,000</p>
        {{-- <p class="text-sm mt-4">{{ $job->schedule }} - From  {{ $job->salary }}</p> --}}
    </div>
    
    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag size="small">tag
        </x-tag>
            {{-- @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach --}}
        </div>
        <x-employee-logo :width="42" />
    </div>
</x-panel>