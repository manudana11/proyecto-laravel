@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Entornos de Fomracion</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Video Producer</h3>
        <p class="text-sm mt-4">Fill Time -From $60.000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tag as $tag)
                <x-tag :$tag size="small">Back-end</x-tag>
            @endforeach
        </div>
        <x-employer-logo :width='45' />
    </div>
</x-panel>