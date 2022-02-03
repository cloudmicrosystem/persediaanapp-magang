            <!-- Isi Modal -->
            <div class="modal-body">
                <form id="editForm" action="{{ route('transkeluar.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
                    <div class="form-group">
                    <label>Nama</label>
                    <br>
                    <select name="barang">
                        <option value="id">
                            Pilih Barang
                        </option>
                        @foreach ($barang as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Qty</label>
                    <input type="number" class="form-control" name="qty" placeholder="Masukkan Qty Barang">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga Barang">
                </div>
                <div class="form-group">
                    <label>Diskon</label>
                    <input type="number" class="form-control" name="diskon" placeholder="Masukkan Diskon Barang">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan Barang">
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>

            </div>
            </div>
            </div>
            {{-- </form> --}}
