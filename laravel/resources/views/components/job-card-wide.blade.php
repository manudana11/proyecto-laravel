@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-sm text-gray-500">Entornos de Fomracion</a>
            <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">Web Developer</h3>
            <p class="text-sm text-gray-500 mt-auto">Fill Time -From $60.000</p>
    </div>

    <div>
        @foreach($job->tag as $tag)
            <x-tag :$tag >Back-end</x-tag>
        @endforeach
    </div>
</x-panel>