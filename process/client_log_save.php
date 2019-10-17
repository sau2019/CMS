<?php
                // getting client ip,os,device address and it store in <database class="">
            
                $client_ip=UserInfo::get_ip();
                $client_d=UserInfo::get_device();
                $client_os= UserInfo::get_os();
                $client_b=UserInfo::get_browser();
            
                echo $client_id." ". $client_ip." ". $client_d." ".$client_os." ".$client_b."<br> ";
                
                $sqlc = "INSERT INTO client_log (client_id, client_ip, client_os, client_device, client_browser)
                VALUES ('$client_id', '$client_ip','$client_os','$client_d','$client_b');";
                
                if (mysqli_query($conn, $sqlc)) {
                    echo "client log saved...";
                }
                
?>