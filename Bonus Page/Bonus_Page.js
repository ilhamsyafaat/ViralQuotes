
// document.addEventListener('DOMContentLoaded', function() {
//   // Mendapatkan nilai parameter URL
//   const urlParams = new URLSearchParams(window.location.search);
//   const subscriberName = urlParams.get('subscriberName');

//   // Jika nilai parameter ditemukan, simpan ke localStorage
//   if (subscriberName) {
//     localStorage.setItem('subscriberName', subscriberName);
//   }

//   // Mengambil nilai nama dari localStorage
//   var subscriberNameFromStorage = localStorage.getItem('subscriberName');
  
//   // Jika nilai ada, perbarui teks di dalam elemen span
//   if (subscriberNameFromStorage) {
//     document.getElementById('subscriberName').textContent = subscriberNameFromStorage;
//   } else {
//     console.log("none");
//   }
// });