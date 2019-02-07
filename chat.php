 <?php
include("dbh.php");

 ?>
 <?php
                $sql = "SELECT * FROM posts";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);
                if($num>0){
                while($row = mysqli_fetch_array($result)){
                	echo "".$row["name"]." ".":: ".$row["msg"]." :: ".$row["date"]."<br>";
                	echo "<br>";
                }
                }
                else {
                	echo "0 result";
                }
                // mysqli_close($con);

                ?>