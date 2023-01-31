<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="graph" class="flex justify-center">
                    <canvas id='canvas' width="500" height="400" class=></canvas>
                </div>
                <input type="button" value="start/stop" onclick="stop()">
            </div>
            <script src={{ asset('/js/graph.js') }}></script>
</x-app-layout>
