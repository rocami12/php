<?php
if (isset($_GET['nombre'])){
    $nombre= $_GET['nombre'];

    if(!empty([$nombre])){
        print( "hola $nombre");
    }else {
        print ("hola invitada");
    }
}else{
    echo "no existe ningun dato";
}
