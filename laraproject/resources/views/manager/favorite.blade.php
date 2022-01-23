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
/*
.tablecss5{width:100%;height:20px;background-color:#483d86;             }
.btncss5{ color:#ffffff;border-radius:3px;background-color:#483d86;width:80px;height:30px;font-size:11px;margin-right:4px;border:none;      }
.btncss5:hover {    background-color: #ffffff;  color:#483d86;  }
.acss5{ text-decoration:none;color:#fff;padding-left:10px;}
*/
</style>



<body>
  @extends('layouts.add')


   <table width="98%"class="tablecss5"height="40"align="center"border="0"><tr>
   <td class="td_add04"width="20%" >
    <a href="{{ url('manager/home') }}" class="acss5" > meisis </a> </td >


</td><td width="80%"align="right">
  <a href="{{ url('manager/home') }}" >
  <button class="btncss5">マイページ</button></a>

<a href="{{ url('manager/home') }}" >
<button class="btncss5">HOME</button></a>

</td></tr></table><hr class="hr">
@error('token') <div class="alert alert-danger">{{ $message }}</div> @enderror

<!-- **************************login************************************** -->
 <table width="100%"height="1500"border="0"cellspacing="0"><tr><td style="vertical-align:top;">

  <h3 align="center">お気に入り</h3>







</td></tr></table>
</body>


</html>
