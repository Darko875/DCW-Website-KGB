<?php 
            include_once("valida.php");
            if(!empty($_POST["logout"])) {
                $_SESSION["nid"] = "";
                session_destroy();
            }
            else { 
            $result = mysqlI_query($conn,"SELECT * FROM hospede WHERE nid='" . $_SESSION["nid"] . "'");
            $row  = mysqli_fetch_array($result);
            ?>
            <form action="" method="post" id="frmLogout">
            <div class="member-dashboard">Welcome <?php echo ucwords($row['nome']); ?>, You have successfully logged in!<br>
            Click to <input type="submit" name="logout" value="Logout" class="logout-button">.</div>
            </form>
            </div>
            </div>
            <?php
        }

        ?>