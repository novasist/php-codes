<?php
/*
*Created by  Software Engineer: Sinan KAYAPINAR

* Date :11.10.2024
* Time :21:34
*/
require "_functions.php";
$kurallar = [
    "1" => array(
        "icon1" => "control",
        "icon2" => "command",
        "icon3" => "slash",
        "exp" => "Seçileni satır satır  Yorum satırına çevirir."
    ), "2" => array(
        "icon1" => "option",
        "icon2" => "command",
        "icon3" => "slash",
        "exp" => "Yorum satırına çevirir ve çıkarır. Deneyerek daha iyi anlaşılıyor."
    ), "3" => array(
        "icon1" => "option",
        "icon2" => "command",
        "icon3" => "L",
        "exp" => "Yazılan kodları düzgünce hizalar.Bir nevi ortalığı toparlar.(REFORMER)"
    ), "4" => array(
        "icon1" => "command",
        "icon2" => "Z",
        "exp" => "Geri alma Tuşu (UNDO)"
    ), "5" => array(
        "icon1" => "command",
        "icon2" => "Z",
        "icon3" => "shift",
        "exp" => "İleri alma Tuşu (REDO)"
    ), "6" => array(
        "icon1" => "shift",
        "icon2" => "option",
        "icon3" => "up-arrow",
        "exp" => "Seçilen satırı yukarı aşağı oklar yardımıyla yerini değiştirir."
    ), "7" => array(
        "icon1" => "option",
        "icon2" => "up-arrow",
        "exp" => "Seçimi arttırma tuşu.Yukarı ok işaretine bastıkça seçim artar.Örneğin bir div'in ucuna dokunup ok işareti ile seçerseniz o div'i komple seçer."
    ), "8" => array(
        "icon1" => "option",
        "icon2" => "down-arrow",
        "exp" => "Seçimi azaltma tuşu.Aşağı ok işaretine bastıkça seçim azalır."
    ), "9" => array(
        "icon1" => "option",
        "icon2" => "command",
        "icon3" => "U",
        "exp" => "Seçilen kısmı büyük veya küçük harfe dönüştürür."
    ), "10" => array(
        "icon1" => "command",
        "icon2" => "C",
        "exp" => "Seçileni kopyalar."
    ), "11" => array(
        "icon1" => "command",
        "icon2" => "V",
        "exp" => "Kopyalananı yapıştırır."
    ), "12" => array(
        "icon1" => "command",
        "icon2" => "D",
        "exp" => "Seçilen yeri kopyalar ve bir alt satıra yapıştırır.(DUBLICATE)"
    ), "13" => array(
        "icon1" => "command",
        "icon2" => "F",
        "exp" => "Seçileni bulur ve diğer araçları kullanarak üstünde değişiklik yapabilirsiniz."
    ), "14" => array(
        "icon1" => "command",
        "icon2" => "R",
        "exp" => "Seçileni bulur ve diğer araçları kullanarak üstünde değişiklik yapabilirsiniz.replace instead of that"
    ), "15" => array(
        "icon1" => "command",
        "icon2" => "J",
        "exp" => "Live Template açılır ve içinden istediğinizi seçebilirsiniz."
    ), "16" => array(
        "icon1" => "command",
        "icon2" => "backspace",
        "exp" => "O satırı komple siler."
    ), "17" => array(
        "icon1" => "command",
        "icon2" => "mouse",
        "exp" => "Option tuşuna basarken mouse ile istediğimiz kod aralıklarına mouse işareti koyup tek seferde istediğimiz kodu birden fazla alana ekleyebiliriz."
    ), "18" => array(
        "icon1" => "command",
        "icon2" => "option",
        "icon3" => "enter",
        "exp" => "PHP kodunu tamamlar. Mesela sonuna otomatik (;) noktalı virgül koyar."
    ),

];
//kuralEkle($kurallar, "deneme1", "deneme2", "yorumlarrrr");

//kurallarda valuesi boş gelen keyler temizlendi
for ($i = 1; $i<= count($kurallar); $i++) {
    $kurallar[$i]= array_filter($kurallar[$i]);
}
jsonCekme($kurallar);


/*echo "<pre>";
print_r($kurallar);
echo "</pre>";
echo "<hr/>";*/


