<!doctype html>
<html>
    <head>
        <title>contacts</title>
<style>
    form{
      
        align-content: center;
    }
</style>


    </head>
    <body style="background-color: gold;">
     <center>  <P style="font-size: 40px;" >Here are the contacts you can use to contact me</P></center> 
        <table border="3" align="center">
            <colgroup style="background-color:greenyellow;">
                
            </colgroup>
            <colgroup style="background-color: royalblue;">
                
            </colgroup>
            <colgroup style="background-color:goldenrod;">
                
            </colgroup>

            <tr>
                <th>NAME</th>

                <th>PHONE #</th>
                <th>ADDRESS</th>
            </tr>
            <tr>
                <td>Joseph Nlane</td>
                <td>0992435815</td>
                <td>Lilongwe</td>
            </tr>
            <tr>
                <td>Marcel Nhlane</td>
                <td>0882088839</td>
                <td>Lilongwe</td>
            </tr>
            <tr>
                <td>Peace Milazi</td>
                <td>0993045456</td>
                <td>Blantyre</td>
            </tr>
            <tr>
                <td>Vitumbiko Nhlane</td>
                <td>0883277882</td>
                <td>Mzuzu</td>
            </tr>
        </table><br>


<?php
$Servername="localhost";
$username ="root";
$password="";
$db="my_project";

$conn= mysqli_connect($Servername,$username,$password,$db);
if($conn){
    echo "connected";
"<br>";
}
else{
    echo "not connected";
"<br>";
}
$query=mysqli_query($conn,"select*from contact");
while($row=mysqli_fetch_array($query)){
    echo $row["USEDFOR"]. "\t\t\t\t". $row["NUMBER"]."<br>";
}
?>
        
    
            
           <form action="amazon" method="post">
            <p>
                <fieldset style="width: fit-content; " >
                    <b> <legend style="font-size: large;">contact details</legend></b>
            <input type="text" name="firstname" placeholder="First name"><br>
            <input type="text" name="Surname" placeholder="Surname"><br>
            <input type="email" name="email" placeholder="Email" required="required"><br>
            <input type="text" name="passwor" placeholder="passwor" required="required"><br>
            <input type="text" name="program" placeholder="program of choice" required="required"><br>
        </fieldset>
            GENGER: <br>
            <input type="radio" name="gender" id="male"><label for="male"> Male</label>
            <br>
        
            <input type="radio" name="gender" id="female"><label for="female">Female</label>
            <br>
            
            <input type="radio" name="gender" id="other"><label for="other">Other</label><br>
            <input type="file" name="user-song" placeholder="Upload a User-song"><br>
            <input type="submit" value="Upload">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
    
           </form>
        </p>
    
        
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