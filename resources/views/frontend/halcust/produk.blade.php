<div class="col-12 mb-8 t-center" style="background-color: white">
    <div class="col-md-3" style="background: white"><br>
        {{-- <h3 class="tit7 t-center m-b-10">Popular Product </h3> --}}
    </div>
    <div class="row">
        @foreach ($trendingItems as $items)
            <div class="col-md-3 pb-2 pr-5 pl-5">
                <div class="row">
                    <div class="card" style="border: transparent">
                        <ul class="">
                            <li>
                                @if ($items->trending == "Yes")
                                    <label class="float-end badge btn-danger" style="font-size: 14px">Popular Product</label>
                                    {{-- <div class="p-1 mb-1 bg-danger text-white" style="text-align: center">Popular Product</div> --}}
                                @endif
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                                    <a href="{{ url('product/detail-product/'.$items->id) }}">
                                        <img src="{{ asset('images/disply/' . $items->gambar_disply) }}"
                                            class="img-fluid img-thumbnail" alt="{{ $items->nama_barang }}"
                                            style="border: transparent" />
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body">
                            <div class="d-flex justify-content-md-center">
                                <a href="{{ url('product/detail-product/'.$items->id) }}">
                                    <h1 class="card-title"
                                        style="font-size: 20px; font-weight:bold; color:black">
                                        {{ $items->nama_barang }}
                                    </h1>
                                    <p class=""><?= "Rp " . number_format($items->harga,0,',','.')?></p>
                                    <p style="color: orange" class="m-1 t-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                    <p class="t-center m-0">Terjual 10 </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
</div>
