<?php
    require "BDs.php";

    $con=conect();

    $nombre=$_REQUEST['prod'];

    echo "<script>
            alert($nombre);
    
        </script>";
    die;

    $sql="SELECT * FROM productos
        WHERE status=1 AND eliminado=0 AND nombre=$nombre";

    $res=$con->query($sql);
    echo "<script>
            alert($res);
    
        </script>";
//    $cont=1;

?>