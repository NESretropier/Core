<?php
$files = scandir(__DIR__);
foreach ($files as $file) {
    if($file != "fix.php"){
        $new_file = str_replace("[!]","",$file);
        $new_file = str_replace("(W)","",$new_file);
        $new_file = str_replace("(UE)","",$new_file);
        $new_file = str_replace("(REV01)","",$new_file);
        $new_file = str_replace("(Compilation)","",$new_file);
        $new_file = str_replace(" (Unl) ","",$new_file);
        $new_file = str_replace("[c]","",$new_file);
        $new_file = str_replace(" (JU) ","",$new_file);
        $new_file = str_replace("(REV00) ","",$new_file);
        $new_file = str_replace("(REV02) ","",$new_file);
        if($new_file != $file){
            rename($file,$new_file);
        }

    }

}
