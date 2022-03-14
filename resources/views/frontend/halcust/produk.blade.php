<div class="col-md-12 mb-8">
    <div class="row">
        @foreach ($barang as $items)
            <div class="col-md-3">
                <div class="row">
                    <div class="card" style="border: transparent">
                        <ul class="">
                            <li>
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                                    <a href="detail">
                                        <img src="{{ asset('images/disply/' . $items->gambar_disply) }}"
                                            class="img-fluid img-thumbnail" alt="{{ $items->nama_barang }}"
                                            style="border: transparent" />
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body">
                            <div class="d-flex justify-content-md-center">
                                <a href="detail">
                                    <h1 class="card-title"
                                        style="font-size: 20px; font-weight:bold; color:black">
                                        {{ $items->nama_barang }}
                                    </h1>
                                    <p class="">Rp {{ $items->price }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
