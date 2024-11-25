<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Pelanggan</h1>
        <div class="d-flex justify-content-end mb-3">
            <!-- Tombol untuk memunculkan modal -->
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">
                <i class="fas fa-cart-plus me-2"></i>Tambah Data
            </button>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                </tr>
            </thead>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Tambah Data Pelanggan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formPelanggan">
                        <div class="mb-3">
                            <label for="namaPelanggan" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="namaPelanggan" placeholder="Masukkan nama pelanggan" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamatPelanggan" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamatPelanggan" placeholder="Masukkan alamat pelanggan" required>
                        </div>
                        <div class="mb-3">
                            <label for="noTelepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="noTelepon" placeholder="Masukkan no telepon" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Handle form submission
        document.getElementById('formPelanggan').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah reload halaman
            alert('Data berhasil disimpan!');
            // Tambahkan logika untuk menyimpan data atau memanipulasi DOM
            document.getElementById('formPelanggan').reset(); // Reset form
            const modal = bootstrap.Modal.getInstance(document.getElementById('formModal'));
            modal.hide(); // Menutup modal setelah submit
        });
    </script>
</body>
</html>
