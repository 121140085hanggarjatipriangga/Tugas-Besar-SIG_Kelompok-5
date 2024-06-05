var map = L.map('map').setView([-5.3821, 105.2574], 10);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">Kelompok SIG</a> contributors'
}).addTo(map);

var markers = []; // Array untuk menyimpan marker

fetch('php/get_data.php') 
    .then(response => response.json())
    .then(data => {
        data.forEach(rumahSakit => {
            var marker = L.marker([rumahSakit.latitude, rumahSakit.longitude])
                .bindPopup(`<b>${rumahSakit.nama}</b><br>Alamat: ${rumahSakit.detail}`);
            markers.push(marker);
            marker.addTo(map);
        });
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
