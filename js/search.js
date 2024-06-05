function searchRumahSakit() {
  var searchText = document.getElementById('search-input').value.trim();
  if (searchText !== '') {
      fetch('php/search_rumah_sakit.php?query=' + searchText) 
          .then(response => response.json())
          .then(data => {
              if (data.length > 0) {
                  var rumahSakit = data[0];
                  var latitude = rumahSakit.latitude;
                  var longitude = rumahSakit.longitude;
                  map.setView([latitude, longitude], 15); 
                  var marker = L.marker([latitude, longitude])
                      .bindPopup(`<b>${rumahSakit.nama}</b><br>Alamat: ${rumahSakit.detail}`)
                      .addTo(map)
                      .openPopup();
                  markers.push(marker); 
              } else {
                  alert('Rumah sakit tidak ditemukan.');
              }
          })
          .catch(error => {
              console.error('Error searching for rumah sakit:', error);
          });
  } else {
      alert('Masukkan nama rumah sakit untuk mencari.');
  }
}
