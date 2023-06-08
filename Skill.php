<!DOCTYPE html>
<html>
    <head>
        <title>
            services
        </title>
    </head>
    <body style="background-image: url(matt.jpg);">
        <h1>WELCOME OUR CUSTOMERS</h1>
        <P> projects<br>
            
          
<?php
$Servername="localhost";
$username ="root";
$password="";
$db="my project";

$conn= mysqli_connect($Servername,$username,$password,$db);
if($conn){
    echo "connected";
"<br>";
}
else{
    echo "not connected";
"<br>";
}
$query=mysqli_query($conn,"select*from skills");
while($row=mysqli_fetch_array($query)){
    echo $row["SKILL"]. "\t\t\t\t". $row["EXPERIENCE"]."<br>";
}
?>
            
        </P>
        
    <footer>
        <div class="footer-body" >
            <div>CONTACTS DETAILS

            </div><fieldset>
            <div>
                <ul>
                    <li>      Whatsapp number 0882088837    </li>
                    <li>
Email : nhlanejoseph@gmail.com
                    </li>
                    <li>
Mobile number: 0992435815
                    </li>
                    <div>&copy; copy right </div>
                
                </ul>
            </div>
        </div>

   </fieldset> </footer>
    </body>
</html>