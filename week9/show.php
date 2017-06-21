<html>  
<head> 
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
   <title>上傳頁面</title> 
</head>

<body>
   <form action="upload.php" method="post" enctype="multipart/form-data"> 
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
      <?php
      $i=$_POST["count"];
      for ($j=0;$j<$i;$j++){

      ?>

      選擇檔案<?php echo $j+1;?>：<input name="uploadfile[]" type="file"> <br>
      

      <?php
      
      }

      ?> 

      <input type="submit" value="送出"> 
   </form> 
</body> 
</html>

