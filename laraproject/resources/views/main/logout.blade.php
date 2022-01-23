
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Home</title>

</head>
<style type="text/css">


</style>



<body>
  @extends('layouts.add')



   <table width="98%"height="40"align="center"border="0"><tr>
   <td class="td_add04"width="30%">
    <a href="{{ url('manager/home') }}" style='text-decoration:none' > @yield('title') </a> </td >
   <td width="40%"align="center">

</td><td width="10%"align="center">
 </td></tr></table><hr class="hr">
@error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

<!-- **************************login************************************** -->
<table width="100%"height="600"border="0"bgcolor="#99fff"cellspacing="0">
  <tr><td style="vertical-align:top">

<script>

  // window.location.href = "{{URL::to('manager/cart1')}}?amenu4="+amenu4+""

</script>
</td></tr></table>
</body>
</html>
