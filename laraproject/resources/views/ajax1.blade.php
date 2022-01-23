<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>sample</title>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>

  $(function() {
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    $.ajax({
               url:'/ajax2',
               type:'GET',
           }).done(function(json){
                //   alert(json['value'])
              $('#message').append( json['value']+'</br>'+json['name'] );
           }).fail(function(json){
               alert('ajax失敗');
           });


  //-----------------------------------------
  });

</script>
</head>
<body>
<div id="message">xxxxxxxx</div>
</body>
</html>
