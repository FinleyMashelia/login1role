<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #map {
      height: 400px;
      border: 2px solid #000;
      /* Add a solid black border */
      border-radius: 8px;
      /* Optional: round the corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Optional: add a subtle shadow for better look */
    }
  </style>

    <body>
        <div id="map"></div>

        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script>
          var map = L.map('map').setView([-6.9904, 110.4229], 13); // Koordinat Semarang
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);
          L.marker([-6.9904, 110.4229]).addTo(map) // Lokasi Simpang Lima Semarang
            .bindPopup('Simpang Lima')
            .openPopup();
        </script>
      </body>

</x-app-layout>
