$(document).ready(function(){

    $(".confirmDelete").click(function(){
        var name = $(this).attr("name");
        if(confirm("Anda yakin akan hapus "+name+" ini ?")){
            return true;
        }
        return false;
    });

    $(".updateCategoryStatus").click(function(){
        var status = $(this).text();
        var id_kategori = $(this).attr("id_kategori");
        $.ajax({
            type: 'post',
            url: '/update-category-status',
            data: {status:status, id_kategori:id_kategori},
            success:function(resp){
                if(resp['status'] == 0){
                    $("#category-"+id_kategori).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status'] == 1){
                    $("#category-"+id_kategori).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });

    $(".updateProductStatus").click(function(){
        var status = $(this).text();
        var id_barang = $(this).attr("id_barang");
        $.ajax({
            type: 'post',
            url: '/update-product-status',
            data: {status:status, id_barang:id_barang},
            success:function(resp){
                if(resp['status'] == 0){
                    $("#barang-"+id_barang).html("<a class='updateProductStatus' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status'] == 1){
                    $("#barang-"+id_barang).html("<a class='updateProductStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });

    $(".updateAtributStatus").click(function(){
        var status = $(this).text();
        var id_atr = $(this).attr("id_atr");
        $.ajax({
            type: 'post',
            url: '/update-atribut-status',
            data: {status:status, id_atr:id_atr},
            success:function(resp){
                if(resp['status'] == 0){
                    $("#atribut-"+id_atr).html("<a class='updateAtributStatus' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status'] == 1){
                    $("#atribut-"+id_atr).html("<a class='updateAtributStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });

    $(".updateCatarticleStatus").click(function(){
        var status = $(this).text();
        var id_cat = $(this).attr("id_cat");
        $.ajax({
            type: 'post',
            url: '/update-catarticle-status',
            data: {status:status, id_cat:id_cat},
            success:function(resp){
                if(resp['status'] == 0){
                    $("#catarticle-"+id_cat).html("<a class='updateCatarticleStatus' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status'] == 1){
                    $("#catarticle-"+id_cat).html("<a class='updateCatarticleStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });

    $(".updateArticleStatus").click(function(){
        var status = $(this).text();
        var id_art = $(this).attr("id_art");
        $.ajax({
            type: 'post',
            url: '/update-article-status',
            data: {status:status, id_art:id_art},
            success:function(resp){
                if(resp['status'] == 0){
                    $("#article-"+id_art).html("<a class='updateProductStatus' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status'] == 1){
                    $("#article-"+id_art).html("<a class='updateProductStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });

    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, "Rp. ");
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
          split = number_string.split(","),
          sisa = split[0].length % 3,
          rupiah = split[0].substr(0, sisa),
          ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
          separator = sisa ? "." : "";
          rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
      }

});


