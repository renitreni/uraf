<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div id="app" class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4">
                            Tracked Location
                        </h2>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                Latitude: {{ $lat }}, Longitude {{ $lang }}
                            </div>
                            <div class="col-md-12 mt-2">
                                <div id='map' style='width: 100%; height: 60vh;'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet'/>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoicmVuaWVyLXRyZW51ZWxhIiwiYSI6ImNrZHhya2l3aTE3OG0ycnBpOWxlYjV3czUifQ.4hVvT7_fiVshoSa9P3uAew';

            var map = new mapboxgl.Map({
                container: 'map',
                center: [{{ $lang }}, {{ $lat }}],
                zoom: 15,
                style: 'mapbox://styles/mapbox/satellite-streets-v10'
            });

            var marker = new mapboxgl.Marker()
                .setLngLat([{{ $lang }}, {{ $lat }}])
                .addTo(map);
        </script>
    </x-slot>
</x-app-layout>

