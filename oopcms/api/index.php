<?php
/*
if (!empty($_GET['name'])){
$response=file_get_contents("https://api.agify.io?name={$_GET['name']}");
$data=json_decode($response,true);
$age=$data["age"];}

//var_dump( $response);
//echo $data["results"][0]["name"]["first"];
?>
<!DOCTYPE html>
<html>
<head>
    <title> Example</title>
</head>
<body>
<?php if (isset($age)):?>
Age:<?=$age ?>
<?php endif;?>
<form>
    <label for="name" > Name</label>
    <input name="name"id="name">
    <button>Guess age </button>
</form>
</body>
</html>
*/


//$ch = curl_init();
//$headers = [
//    "Authorization: Client-ID 7r06Y5mNPA32POp-jvRIXr7dKhs3U"
//];
////curl_setopt($ch,CURLOPT_URL,"https://api/unsplash.com/photos/random");
////curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt_array($ch, [
//    CURLOPT_URL => "https://api/unsplash.com/photos/random",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_HTTPHEADER => $headers
//]);
//
//$response = curl_exec($ch);
//if ($response === false) {
//    echo 'Curl error: ' . curl_error($ch);
//}
//
//
//$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//curl_close($ch);
//echo $status_code;
//echo $response;
