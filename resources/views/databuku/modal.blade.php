{{-- Modal Create --}}
<div id="modalCreate" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Tambah Buku</h2>
            <span class="close" onclick="closeModal('modalCreate')">&times;</span>
        </div>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="form-group"><label>Kode</label><input name="kode" required></div>
            <div class="form-group"><label>Judul</label><input name="judul" required></div>
            <div class="form-group"><label>ISBN</label><input name="isbn" required></div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" required>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non-Fiksi">Non-Fiksi</option>
                    <option value="Teknologi">Teknologi</option>
                    <option value="Sains">Sains</option>
                    <option value="Sejarah">Sejarah</option>
                </select>
            </div>
            <div class="form-group"><label>Lokasi Rak</label><input name="lokasi" required></div>
            <div class="form-group"><label>Penulis</label><input name="penulis" required></div>
            <div class="form-group"><label>Penerbit</label><input name="penerbit" required></div>
            <div class="form-group"><label>Tahun</label><input name="tahun" required></div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</div>

{{-- Modal Edit --}}
<div id="modalEdit" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Edit Buku</h2>
            <span class="close" onclick="closeModal('modalEdit')">&times;</span>
        </div>
        <form action="{{ route('buku.update') }}" method="POST">
            @csrf
            <div class="form-group"><label>Kode</label><input name="kode" id="edit_kode" readonly></div>
            <div class="form-group"><label>Judul</label><input name="judul" id="edit_judul"></div>
            <div class="form-group"><label>ISBN</label><input name="isbn" id="edit_isbn"></div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" id="edit_kategori">
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non-Fiksi">Non-Fiksi</option>
                    <option value="Teknologi">Teknologi</option>
                    <option value="Sains">Sains</option>
                    <option value="Sejarah">Sejarah</option>
                </select>
            </div>
            <div class="form-group"><label>Lokasi Rak</label><input name="lokasi" id="edit_lokasi"></div>
            <div class="form-group"><label>Penulis</label><input name="penulis" id="edit_penulis"></div>
            <div class="form-group"><label>Penerbit</label><input name="penerbit" id="edit_penerbit"></div>
            <div class="form-group"><label>Tahun</label><input name="tahun" id="edit_tahun"></div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
</div>

<script>
    function fillEditModal(buku) {
        document.getElementById('edit_kode').value = buku.kode;
        document.getElementById('edit_judul').value = buku.judul;
        document.getElementById('edit_isbn').value = buku.isbn;
        document.getElementById('edit_kategori').value = buku.kategori;
        document.getElementById('edit_lokasi').value = buku.lokasi;
        document.getElementById('edit_penulis').value = buku.penulis;
        document.getElementById('edit_penerbit').value = buku.penerbit;
        document.getElementById('edit_tahun').value = buku.tahun;
    }
</script>