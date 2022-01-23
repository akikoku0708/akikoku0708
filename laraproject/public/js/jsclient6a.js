$(function(){
$("#button2").on('click', function(event){
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

//----------------------------------------------------------
var textData = $("#text").val();

var formData= new FormData();
var TotalImages= $('#images')[0].files.length; //Total Images
        var images= $('#images')[0];
        for (var i= 0; i < TotalImages; i++) {
            formData.append('images' + i, images.files[i]);
        }
        formData.append('TotalImages', TotalImages);
      formData.append( "text", textData );
   $.ajax({
            url: "{{ route('ajax9b') }}",
            method: 'post',
            enctype: 'multipart/form-data',
            cache: false,
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            async: true,
            success: function(data){
  $("#main").append(''+data.ret+'枚画像を登録しました</br>');
             if (data.name.length === 0){}else{
              for(var v=0; v<data.name.length; v++){

$("#main").append('<img src="../storage/upload/'+data.name[v]+'.jpg" width="100" height="100">');
           }}

            //   $("#main").append('xx'+data.ret+data.name[0]+data.name[1]);
            },
            headers: {
                'Content-Type': undefined,
            },
            xhr: function() {
                myXhr= $.ajaxSettings.xhr();
                return myXhr;
            },
        }); //ajax

});
});
