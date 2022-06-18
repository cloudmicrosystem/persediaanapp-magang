$(document).ready(function(){

    $(".updateCategoryStatus").click(function(){
        var status = $(this).text();
        var id_category = $(this).attr("id_category");
        $.ajax({
            type: 'post',
            url: '/update-category-status',
            data: {status:status, id_category:id_category},
            success:function(resp){
                if(resp['status'] == 0){
                    $("#category-"+id_category).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status'] == 1){
                    $("#category-"+id_category).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });

    $(".confirmDelete").click(function(){
        var name = $(this).attr("name");
        if(confirm("Anda yakin hapus "+name+" ini ?")){
            return true;
        }
        return false;
    });

    $(".updateProductStatus").click(function(){
        var status = $(this).text();
        var id_product = $(this).attr("id_product");
        $.ajax({
            type: 'post',
            url: '/update-product-status',
            data: {status:status, id_product:id_product},
            success:function(resp){
                if(resp['status'] == 0){
                    $("#barang-"+id_product).html("<a class='updateProductStatus' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status'] == 1){
                    $("#barang-"+id_product).html("<a class='updateProductStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });
});


