<?php
    //session_start();
$servername = "127.0.0.1 localhost:3306";
$username = "root";
$password = "";
$dbname = "modal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>

-- INICIO TABLA
<div class="row">
    <div class="col-sm-12">
    <h2>RECEPCIÓN DE DATOS</h2>

    <table class="table table-hover table-condensed table-bordered">
            <tr>
            <td>id</td>
                <td>NOMBRE</td>
                <td>DESCRIPCION</td>
                <td>GENERO</td>
                <td>AÑO</td>
                <td>IMAGEN</td>
                <td>VIDEO</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
            if(isset($_SESSION['consulta'])){
                    if($_SESSION['consulta'] > 0){
                        $idp=$_SESSION['consulta'];

                        $sql="SELECT id,nombre,descripcion,genero,año,imagen,video    
                        from web where id='$idp'";
                    }else{
                        $sql="SELECT id,nombre,descripcion,genero,año,imagen,video  
                        from web";
                    }
                }else{
                    $sql="SELECT id,nombre,descripcion,genero,año,imagen,video
                        from web";
                }


                $result=mysqli_query($conn,$sql);
                while($ver=mysqli_fetch_row($result)){

                    $datos=$ver[0]."||".
                           $ver[1]."||".
                           $ver[2]."||".
                           $ver[3]."||".
                           $ver[4]."||".
                           $ver[5]."||".
                           $ver[6];
             ?>

           
            <tr>
                <td><?php echo $ver[0] ?></td>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
                <td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>
                <td><?php echo $ver[6] ?></td>
           
                <td>
                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
                    </button>
                </td>
           
            <td>
                    <button class="btn btn-danger glyphicon glyphicon-remove"
                    onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
                    </button>
                    </td>
            </tr>
           
           
            <?php
        }
             ?>
        </table>
    </div>
</div>
