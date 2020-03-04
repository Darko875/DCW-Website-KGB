<?php 
            include_once("valida.php");
            if(!empty($_POST["logout"])) {
                $_SESSION["nid"] = "";
                session_destroy();
            }
            else { 
            $result = mysqlI_query($conn,"SELECT * FROM hospede WHERE nid='" . $_SESSION["nid"] . "'");
            $row  = mysqli_fetch_array($result);
            header("Location: index.php")
            ?>
            <?php
        }

        ?>