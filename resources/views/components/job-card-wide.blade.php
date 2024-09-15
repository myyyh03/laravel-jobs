@props(['job'])
<x-panel class="flex gap-6">
    <div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">
            {{$job->employer->name}}
        </a>


        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-color duration-1000">
            <a href="{{$job->url}}" target="_blank">{{$job->title}}</a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->location}} - From {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag"/>
            @endforeach
        </div>

    </div>
</x-panel>
