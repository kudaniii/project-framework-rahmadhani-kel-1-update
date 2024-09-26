<div class="container">
    <div class="row mt-5">
        <div class="col mt-4">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambahkan data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambahkan data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama-barang">Nama barang</label>
                                <input type="text" class="form-control" id="nama-barang" placeholder="Masukkan nama barang">
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="numeric" class="form-control" id="jumlah" placeholder="Masukkan jumlah barang">
                            </div>

                            <div class="form-group">
                                <label for="harga-barang">Harga barang</label>
                                <input type="text" class="form-control" id="harga-barang" placeholder="Masukkan harga">
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" placeholder="Masukkan keterangan">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nama_barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga_barang</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Harga as $harga): ?>
                    <tr>
                        <th scope="row"><?=$harga['Nama_barang']; ?></th>
                        <td><?=$harga['Jumlah']; ?></td>
                        <td><?=$harga['Harga_barang']; ?></td>
                        <td><?=$Harga['Keterangan']; ?></td>
                    </tr>
                    <?php endforeach ; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
