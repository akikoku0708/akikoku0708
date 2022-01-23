<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Ajax Request example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<style>


</style>

<body>

  <form >
  <table width="50%" align="center" border="0"><tr><td width="90%">
<input type="text" name="keyw" value=""required=""></br>
  <input type="text" name="search"  required=""></br>
<button class="btn-submit">検索</button>
</td></tr></table>
</form>

<div id="message"></div>
</body>
<script type="text/javascript">

    //-------------------------------------------------------------------------
    $.ajaxSetup({
    headers: {  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }
    });
    //--------------------------------------------------------------
    $(".btn-submit").click(function(e){  e.preventDefault();   read();  });
   //----------------------------------------------------------------------
      function read(){
        var vname1 = $("input[name=search]").val();
        var vname2 = $("input[name=keyw]").val();

        $.ajax({
           type:'POST',
           url:"{{ route('/manastore/ajax5b') }}",
           data:{kname1:vname1, kname2:vname2},
           success:function(data){
   //-------------------------------------------------------------------------
        $('#message').html('<table border="1"><tr><td>'
        +data['zname1']+data['zname2']+'</td></tr><table>');


             //-----------ok-------------------
           }
        });
        }
</script>

</html>
