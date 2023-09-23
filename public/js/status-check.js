document.addEventListener('DOMContentLoaded', function () {
    // Ganti dengan URL server yang ingin Anda cek
    var serverUrl = 'https://layar.yarsi.ac.id/';
    
    // Kirim permintaan AJAX ke server
    fetch(serverUrl)
        .then(function (response) {
            if (response.status === 200) {
                // Server aktif
                document.getElementById('status-message').textContent = 'Server is Aktif';
                document.getElementById('status-code').textContent = 'Status Code: ' + response.status;
            } else {
                // Server offline
                document.getElementById('status-message').textContent = 'Server is Offline';
                document.getElementById('status-code').textContent = 'Status Code: ' + response.status;
            }
        })
        .catch(function (error) {
            // Terjadi kesalahan dalam permintaan
            document.getElementById('status-message').textContent = 'Terjadi Kesalahan: ' + error.message;
        });
});
