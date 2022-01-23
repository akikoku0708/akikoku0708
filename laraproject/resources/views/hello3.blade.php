<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body>

<?php
$asd='';
if(isset($_GET['asd'])){   $asd=$_GET['asd'];             }
echo $asd;
?>
 {{ $datas5 }} 
  <table align="center" width="80%"border="1">
  @foreach ($datas3 as $rent)

    <tr><td width="20%"> {{ $rent->id}}      </td>
    <td width="30%"> {{ $rent->userid}}  </td>
    <td width="30%"> {{ $rent->password }}  </td>
    <td width="20%">   {{ $rent->name }}       </td>

  </tr>

  @endforeach
  </table>


<?php    /*
  @foreach ($db1 as $rent)
         <p>
         {{ $rent->id }}
         {{ $rent->first_name }}
         {{ $rent->last_name }}
         </p>
     @endforeach
*/  ?>
  <h2>3333333333333333333Hello World from blade333333333333333333!!</h2>




</body>
</html>
