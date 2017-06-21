<html> 
<head> 
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
   <title>多個檔案上傳處理</title> 
</head>
<body> 
   <?php 
   $uploaddir="./upload/";  
   $i=count($_FILES["uploadfile"]["name"]);


   for ($j=0 ; $j<$i ; $j++) 
   { 
      $tmpfile=$_FILES["uploadfile"]["tmp_name"][$j]; 
      $file2=mb_convert_encoding($_FILES["uploadfile"]["name"][$j],"big5","utf8"); 
      if(move_uploaded_file($tmpfile,$uploaddir.$file2)) 
     { 
         echo "上傳成功<br>"; 
         echo "檔案名稱：".$_FILES["uploadfile"]["name"][$j]."<br>"; 
         echo "檔案類型：".$_FILES["uploadfile"]["type"][$j]."<br>"; 
         echo "檔案大小：".$_FILES["uploadfile"]["size"][$j]."<br>"; 
      } 
     else 
      { 
         echo "上傳失敗!<br> "; 
         echo "檔案名稱：".$_FILES["uploadfile"]["name"][$j]."<br>"; 
         echo "檔案類型：".$_FILES["uploadfile"]["type"][$j]."<br>"; 
         echo "檔案大小：".$_FILES["uploadfile"]["size"][$j]."<br>";  
      } 
   } 
   ?> 
</body> 
</html>