document.querySelectorAll('.edit').forEach(item => {
  item.addEventListener('click', event => {
      document.getElementById('popup').style.display = 'block';
  });
});

// Fungsi untuk menutup pop-up
function closePopup() {
  document.getElementById('popup').style.display = 'none';
}