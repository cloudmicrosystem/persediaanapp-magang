<!-- Isi Modal -->
<div class="modal-body">
    <form id="editFrom" method="POST" action="{{ route('transmasuk.store') }}"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input class="form-control vendor" disabled type="text" name="vendor" value="">
        </div>
        <div class="form-group">
            <input class="form-control update_add" disabled type="text" name="update_add" value="">
        </div>
        
        <div class="form-group">
            <label>Nama Barang</label>
            <br>
            <select class="form-control" name="barang">
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
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>
