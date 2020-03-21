<?php
if (file_exists('text.txt')){
    $dosya = fopen('text.txt', 'r');
    $icerik = fread($dosya, filesize('text.txt'));
    fclose($dosya);

    $list = ["b", "c", "ç", "d" ,"f" , "g", "ğ", "h", "j", "k", "l", "m", "n", "p", "r", "s", "ş", "t", "v", "y", "z"];
    $li = ["ß", "C", "Ç", "D" ,"F", "G", "Ğ", "H", "J", "K", "L", "M", "N", "P", "R", "$", "$", "T", "V", "Y", "Z"];

    $charArray = str_split($icerik);
    for($i = 0; $i < count($charArray); $i++){
        if(in_array($charArray[$i], $list)){
            $index = array_search($charArray[$i], $list);
            $charArray[$i] = $li[$index];
        }
    }
    touch("cikti.txt");
    $dosya = fopen('cikti.txt', 'w');
    fwrite($dosya, implode("", $charArray));
    fclose($dosya);
}else{
    echo "<b>text.txt</b> bulunamadı. Lütfen varlığından emin olun.";
}
?>