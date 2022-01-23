<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajax</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

 <script>

</script>
    </head>
    <body>aaaaaaaaaaaaaa
    <form action="/form2" method="post" enctype="multipart/form-data">
      <!-- <form action="{{ url('/form2')}}" method="post" enctype="multipart/form-data" id="form"> -->
              @csrf
               <input type="text" name="textbox1" >
              <input type="text" name="textbox2" > 
              <input type="file" name="post_img[]" multiple>
               <!-- <input type="file" name="post_img" > -->
              <input type="submit" value="送信ボタン" >
      </form>



    </body>
</html>
