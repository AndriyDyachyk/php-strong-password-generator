<?php
    function generaPassword() {
        echo(substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($_GET['passLength']/strlen($x)) )),1,$_GET['passLength']));
    }
?>