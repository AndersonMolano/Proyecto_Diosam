<?php
if (isset($_POST["registro"])) {

    if (isset($_POST["email_user"])){
        
    }
    
        $name=$_POST["name_user"];
        $lastname=$_POST["lastname_user"];
        $email=$_POST["email_user"];
        $password=$_POST["password_user"];
        $sql=$con->query(" insert into usuario (name_user,lastname_user,email_user,password_user,role_user,state_user)
                                values('$name','$lastname','$email','$password',2,1) ");
        if ($sql ==1){
            echo '<div class="success>Usuario registrado correctamente</div>';
            header("location: ../Vista/DOCS/login.html");
            }else {
                echo '<h1>Felicidades te has registrado en nuestra pagina</h1>';
            }
 
}
?>