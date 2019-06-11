<style>
.texto1{color:#F00;font-size:12px;}/*Impar*/
.texto2{color:#0f0;font-size:12px;}/*Par*/
.texto3{color:#00f;font-size:12px;}/*36*/
.texto4{color:#ff0;font-size:12px;}/*49*/
</style>

<form method="get" action="ex01.php">
    <input type="number" name="numero">
</form>
<?php
if(isset($_GET["numero"])){
$numero = $_GET["numero"];
for ($x = 0; $x < 11; $x++){
    if((($numero*$x)%2)==0){
        if((($numero*$x))==36){
            echo "<span class='texto3'>".$numero ." X ". $x ." = ". ($numero*$x)."</span><br>";
        }else{
            echo "<span class='texto2'>".$numero ." X ". $x ." = ". ($numero*$x)."</span><br>";
        }
    }else{
        if((($numero*$x))==49){
            echo "<span class='texto4'>".$numero ." X ". $x ." = ". ($numero*$x)."</span><br>";
        }else{
            echo "<span class='texto1'>".$numero ." X ". $x ." = ". ($numero*$x)."</span><br>";
        }
    
    }
        
}     
 
}else{
    echo "Informe um número no campo acima";
    }


?>