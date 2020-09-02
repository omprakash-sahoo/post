<?php
  //$file = 'https://buat.itus.co.in/kotak/1022314700.pdf';
 //$kkk = $kotak2W1066pro_vPolicyNumber.".pdf";
//$kotak2W1066pro_vPolicyNumber = 1022314700 ;


$file = 'https://buat.itus.co.in/kotak/1022314700.pdf';
$filename='1022314700.pdf';
  header('Content-type: application/pdf');
  header('Content-Disposition: attachment; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($file);
  $imagpdf = file_put_contents($image, file_get_contents($filename));  
  
echo $imagepdf; 

/*
<?php 
  
$file = $_GET["file"] .".pdf"; 
  
// We will be outputting a PDF 
header('Content-Type: application/pdf'); 
  
// It will be called downloaded.pdf 
header('Content-Disposition: attachment; filename="gfgpdf.pdf"'); 
  
$imagpdf = file_put_contents($image, file_get_contents($file));  
  
echo $imagepdf; 
?> 
*/
?>