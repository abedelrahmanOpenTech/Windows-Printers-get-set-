<?php
header("Access-Control-Allow-Origin: * ");

if (!isset($_POST["action"])) {
    exit;
}
if ($_POST["action"] == "get_printers_list") {
    $message = "get_printers_list=true";
    exec("PrinterList.exe $message", $output);
    die(json_encode($output));
}

if ($_POST["action"] == "set_default_printer") {
    $printer_name=str_replace(" ","##",$_POST['printer_name']);
    $message = "set_default_printer={$printer_name}";
    exec("PrinterList.exe $message", $output);
    die(json_encode($output));
} 