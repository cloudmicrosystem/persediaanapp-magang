<!-- Isi Modal -->
<div class="modal-body">
    <form id="editFrom" method="POST" action="{{ url('transmasuk') }}">

        <div class="form-group">
            <label>Nama Barang</label>
            <br>
            <select name="barang">
                <option value="id">
                    <-- PILIH -->
                </option>
                @foreach ($barang as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Qty</label>
            <input type="text" class="form-control" name="qty" placeholder="Qty">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" placeholder="Harga">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
        </div>
    </form>
</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Save changes</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

</form>
