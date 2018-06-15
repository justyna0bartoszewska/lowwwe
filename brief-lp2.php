<?php

$inputName = $_POST['inputName'];
$inputEmail = $_POST['inputEmail'];
$inputDomena = $_POST["inputDomena"];
$inputTematyka = $_POST["inputTematyka"];
$rodzajStrony = $_POST["rodzajStrony"];
$skladProjektu = $_POST["skladProjektu"];
$TytulyZakladek = $_POST["TytulyZakladek"];
$adresurl = $_POST["adresurl"];
$teksty = $_POST["teksty"];
$szablon = $_POST["szablon"];
$srodowisko = $_POST["srodowisko"];
$system = $_POST["system"];
$Inspiracje = $_POST["Inspiracje"];
$Budzet = $_POST["Budzet"];
$DodatkowyOpis = $_POST["DodatkowyOpis"];
$zalacznik = $_POST["zalacznik"];

$EmailTo = "biuro@lowwwe.pl";
$Subject = "Landing Page";
 
// prepare email body text
// prepare email body text
$Body = "";
$Body .= "Pełne dane kontaktowe zamawiającego: ";
$Body .= $inputName;
$Body .= "\n";
 
$Body .= "Adres email zamawiającego: ";
$Body .= $inputEmail;
$Body .= "\n";
 
$Body .= "Nazwa domeny: ";
$Body .= $inputDomena;
$Body .= "\n";
 
$Body .= "Tematyka strony/branża: ";
$Body .= $inputTematyka;
$Body .= "\n";
 
$Body .= "Rodzaj strony: ";
$Body .= $rodzajStrony;
$Body .= "\n";				

$Body .= "Skład projektu: ";
$Body .= $skladProjektu;
$Body .= "\n";	

$Body .= "Tytuły zakładek: ";
$Body .= $TytulyZakladek;
$Body .= "\n";

$Body .= "Link do materiałów: ";
$Body .= $adresurl;
$Body .= "\n";

$Body .= "Przygotowanie tekstów na strone: ";
$Body .= $teksty;
$Body .= "\n";

$Body .= "Szablon landing page: ";
$Body .= $szablon;
$Body .= "\n";

$Body .= "Serwer i środowisko: ";
$Body .= $srodowisko;
$Body .= "\n";

$Body .= "System budowania strony: ";
$Body .= $system;
$Body .= "\n";

$Body .= "Inspiracje: ";
$Body .= $Inspiracje;
$Body .= "\n";

$Body .= "Budżet: ";
$Body .= $Budzet;
$Body .= "\n";

$Body .= "Dodatkowy Opis: ";
$Body .= $DodatkowyOpis;
$Body .= "\n";

$Body .= "Załącznik: ";
$Body .= $zalacznik;
$Body .= "\n";

$Body .= "Wyrażam zgodę na przetwarzanie przez www.lowwwe.pl moich danych osobowych podanych w formularzu w celu udzielenia odpowiedzi na zadane pytanie, zgodnie z przepisami Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z 27 kwietnia 2016 r. i przepisami krajowymi dotyczącymi ochrony danych osobowych, w tym przesyłania ich drogą elektroniczną. ";
$Body .= $zgoda;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>
