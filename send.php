<?php
// Contact subject
$tytulTestu="Test";
if(isset($_POST["PzmWT"])) $tytulTestu=$_POST["PzmWT"];
$subject ="=?UTF-8?B?".base64_encode($tytulTestu)."?=";
// Details
$message ="Szanowni Państwo,\r\n";
$message.="bardzo Państwu dziękuję za udział w ".$tytulTestu.".\r\n";
if(isset($_POST["PzmW0"])) {
    $zdal=0;
    $cz0=0;
    $cz1=8;
    $cz2=8;
    $cz3=0;
    $cz4=0;
    if(isset($_POST["PzmWZ"])) $zdal=$_POST["PzmWZ"];
    if(isset($_POST["PzmWA"])) $cz1=$_POST["PzmWA"];
    if(isset($_POST["PzmWB"])) $cz2=$_POST["PzmWB"];
    if(isset($_POST["PzmWC"])) $cz3=$_POST["PzmWC"];
    if(isset($_POST["PzmWD"])) $cz4=$_POST["PzmWD"];
    $cz0=$cz1+$cz2+$cz3+$cz4;
    if($_POST["PzmW0"]<$zdal) {
        $message .="Niestety, ale nie uzyskałes zbyt dobrego wyniku, dlatego też proponujemy Państwu,\r\npo wysłaniu prośby o ponowny test na adres: szkolenia@project-media.pl i uzyskaniu sygnału możliwości udziału w ponownych testach, spróbowaniu swoich sił ponownie.\n\r.Państwa wynik być może spowodowany został zwykłą pomyłką, toteż namawiamy Państwa na kolejną próbę testów.\r\n";
    }
    else {
        $message .="Uczestnik ";
        if($_POST["PzmW0"]>4)
            $message .=" uzyskał następujący wynik: ".$_POST["PzmW0"];
        else
            $message .=" uzyskał następujący wynik: ".$_POST["PzmW0"];
        if($_POST["PzmW0"]%10>1&&$_POST["PzmW0"]%10<5&&$_POST["PzmW0"]>1)
            $message .=" punkty na ".$cz0." możliwych (";
        else {
            if($_POST["PzmW0"]<2)
                $message .=" punkt na ".$cz0." możliwych (";
            else
                $message .=" punktów na ".$cz0." możliwych (";
        }
        $message .="I.".$_POST["PzmW1"]."/".$cz1."; II.".$_POST["PzmW2"]."/".$cz2."; III.".$_POST["PzmW3"]."/".$cz3."; IV.".$_POST["PzmW4"]."/".$cz4.").";
        if($_POST["PzmW0"]<$cz0) {
            $message .="\r\nPoniżej przedstawiam pytania, na które warto zwrócić uwagę (po myślniku wybrane odpowiedzi przez ";
            $message .="uczestnika).";
            $message .="\nPytanie-błędnie udzielona odpowiedź.";

            if(strlen($_POST['Pzm10'])>2) {
                $message .="\nI.".$_POST["Pzm10"]."\r\n";
                if(strlen($_POST['Ozm10a'])>2)
                    $message .="   -".$_POST["Ozm10a"].="\r\n";
                if(strlen($_POST['Ozm10b'])>2)
                    $message .="   -".$_POST["Ozm10b"]."\r\n";
                if(strlen($_POST['Ozm10c'])>2)
                    $message .="   -".$_POST["Ozm10c"]."\r\n";
                if(strlen($_POST['Ozm10d'])>2)
                    $message .="   -".$_POST["Ozm10d"]."\r\n";
            }
            if(strlen($_POST['Pzm11'])>2) {
                $message .="\nI.".$_POST["Pzm11"]."\r\n";
                if(strlen($_POST['Ozm11a'])>2)
                    $message .="   -".$_POST["Ozm11a"]."\r\n";
                if(strlen($_POST['Ozm11b'])>2)
                    $message .="   -".$_POST["Ozm11b"]."\r\n";
                if(strlen($_POST['Ozm11c'])>2)
                    $message .="   -".$_POST["Ozm11c"]."\r\n";
                if(strlen($_POST['Ozm11d'])>2)
                    $message .="   -".$_POST["Ozm11d"]."\r\n";
            }
            if(strlen($_POST['Pzm12'])>2) {
                $message .="\nI.".$_POST["Pzm12"]."\r\n";
                if(strlen($_POST['Ozm12a'])>2)
                    $message .="   -".$_POST["Ozm12a"]."\r\n";
                if(strlen($_POST['Ozm12b'])>2)
                    $message .="   -".$_POST["Ozm12b"]."\r\n";
                if(strlen($_POST['Ozm12c'])>2)
                    $message .="   -".$_POST["Ozm12c"]."\r\n";
                if(strlen($_POST['Ozm12d'])>2)
                    $message .="   -".$_POST["Ozm12d"]."\r\n";
            }
            if(strlen($_POST['Pzm13'])>2) {
                $message .="\nI.".$_POST["Pzm13"]."\r\n";
                if(strlen($_POST['Ozm13a'])>2)
                    $message .="   -".$_POST["Ozm13a"]."\r\n";
                if(strlen($_POST['Ozm13b'])>2)
                    $message .="   -".$_POST["Ozm13b"]."\r\n";
                if(strlen($_POST['Ozm13c'])>2)
                    $message .="   -".$_POST["Ozm13c"]."\r\n";
                if(strlen($_POST['Ozm13d'])>2)
                    $message .="   -".$_POST["Ozm13d"]."\r\n";
            }
            if(strlen($_POST['Pzm14'])>2) {
                $message .="\nI.".$_POST["Pzm14"]."\r\n";
                if(strlen($_POST['Ozm14a'])>2)
                    $message .="   -".$_POST["Ozm14a"]."\r\n";
                if(strlen($_POST['Ozm14b'])>2)
                    $message .="   -".$_POST["Ozm14b"]."\r\n";
                if(strlen($_POST['Ozm14c'])>2)
                    $message .="   -".$_POST["Ozm14c"]."\r\n";
                if(strlen($_POST['Ozm14d'])>2)
                    $message .="   -".$_POST["Ozm14d"]."\r\n";
            }
            if(strlen($_POST['Pzm15'])>2) {
                $message .="\nI.".$_POST["Pzm15"]."\r\n";
                if(strlen($_POST['Ozm15a'])>2)
                    $message .="   -".$_POST["Ozm15a"]."\r\n";
                if(strlen($_POST['Ozm15b'])>2)
                    $message .="   -".$_POST["Ozm15b"]."\r\n";
                if(strlen($_POST['Ozm15c'])>2)
                    $message .="   -".$_POST["Ozm15c"]."\r\n";
                if(strlen($_POST['Ozm15d'])>2)
                    $message .="   -".$_POST["Ozm15d"]."\r\n";
            }
            if(strlen($_POST['Pzm16'])>2) {
                $message .="\nI.".$_POST["Pzm16"]."\r\n";
                if(strlen($_POST['Ozm16a'])>2)
                    $message .="   -".$_POST["Ozm16a"]."\r\n";
                if(strlen($_POST['Ozm16b'])>2)
                    $message .="   -".$_POST["Ozm16b"]."\r\n";
                if(strlen($_POST['Ozm16c'])>2)
                    $message .="   -".$_POST["Ozm16c"]."\r\n";
                if(strlen($_POST['Ozm16d'])>2)
                    $message .="   -".$_POST["Ozm16d"]."\r\n";
            }
            if(strlen($_POST['Pzm17'])>2) {
                $message .="\nI.".$_POST["Pzm17"]."\r\n";
                if(strlen($_POST['Ozm17a'])>2)
                    $message .="   -".$_POST["Ozm17a"]."\r\n";
                if(strlen($_POST['Ozm17b'])>2)
                    $message .="   -".$_POST["Ozm17b"]."\r\n";
                if(strlen($_POST['Ozm17c'])>2)
                    $message .="   -".$_POST["Ozm17c"]."\r\n";
                if(strlen($_POST['Ozm17d'])>2)
                    $message .="   -".$_POST["Ozm17d"]."\r\n";
            }
            if(strlen($_POST['Pzm18'])>2) {
                $message .="\nI.".$_POST["Pzm18"]."\r\n";
                if(strlen($_POST['Ozm18a'])>2)
                    $message .="   -".$_POST["Ozm18a"]."\r\n";
                if(strlen($_POST['Ozm18b'])>2)
                    $message .="   -".$_POST["Ozm18b"]."\r\n";
                if(strlen($_POST['Ozm18c'])>2)
                    $message .="   -".$_POST["Ozm18c"]."\r\n";
                if(strlen($_POST['Ozm18d'])>2)
                    $message .="   -".$_POST["Ozm18d"]."\r\n";
            }
        }
    }
}
else {
    $message .="\r\nProponuję Państwu, po wysłaniu prośby o ponowny test na adres: szkolenia@project-media.pl i uzyskaniu sygnału możliwości udziału w ponownych testach, spróbowaniu swoich sił ponownie.\n\r";
}
$message .="\r\n\r\nPozdrawiam i życzę sukcesów w pracy\r\nStanisław Jerzy Niepostyn,\r\nwww.project-media.pl\n";

$cc = "biuro@project-media.pl";
$to = "biuro@project-media.pl";
if(isset($_POST["Nadawca"]))
    $cc=$_POST["Nadawca"];
//$to =$cc;
$header  ="To: szkolenia@project-media.pl\r\n";
$header .="From: szkolenia@project-media.pl;\r\n";
$header .="Reply-To: $cc\r\n";
$header .= "X-Mailer: PHP".phpversion()."\r\n";
$header .= "Content-language: pl\r\n";
$header .= "Content-Type: text; charset=utf-8\r\n";
$header .= "Content-Transfer-Encoding: 8bit\r\n";



$send_contact=mail($to,$subject,$message,$header);
echo '<BODY oncontextmenu="return false;">';
// Check, if message sent to your email
// display message "We've recived your information"


echo "Odebraliśmy właśnie od Ciebie wiadomość. Dziękujemy. Wkrótce prześlemy wyniki na podany e-mail (".$to.") :)";

echo '</BODY>';
exit;

