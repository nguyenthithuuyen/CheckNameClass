<?php
function checkNameClass($nameClass){
    $patten='/^[C|A|P][^!@#$%]{4,}[G|H|I|K|L|M]$/';
    if (preg_match($patten,$nameClass)){
        return "Ten lop hop le";
    }else {
        return "Ten lop khong hop le moi nhap lai ten";
    }
}
echo checkNameClass('C0318G');
echo  "<br>";
echo  "<br>";
echo checkNameClass('M0318G');
