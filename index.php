
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>this page is open sures</p>
    
   <?php 
$url = "https://raw.githubusercontent.com/barry-far/V2ray-config/main/All_Configs_Sub.txt";
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
 
?>
<input type="text" value="<?php echo $result ?> " hidden id="myInput">
<button onclick="myFunction()">Copy text</button>
<script>
    function myFunction() {

  var copyText = document.getElementById("myInput");


  copyText.select();
  copyText.setSelectionRange(0, 9999999); 


  navigator.clipboard.writeText(copyText.value);


  alert("Copied the text: ");
}
</script>
</body>
</html>