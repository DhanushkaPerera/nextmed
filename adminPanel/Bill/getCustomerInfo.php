

<?php
                            require("../../db/db.php");


                            if(isset($_POST["nic"])){


                                $nic = $_POST["nic"];

                                /*$name = $_POST["name"];*/


                                $sql = "select * from customer where NIC='$nic' ";

                                $res = mysqli_query($db,$sql);
                                $count=mysqli_num_rows($res);
                                if ($count>0){

                                    while($row = mysqli_fetch_array($res)){
                                        echo "<p></p><p>Name: ".$row['FName']."</p><p>Gender: ".$row['Gender']."</p>";
                                        session_start();
                                        $_SESSION["CstAllergicDrugs"]=$row['AllergicDrugs'];
                                    }}
                                else{
                                    echo "Not Registered";
                                }

                            }
                            ?>