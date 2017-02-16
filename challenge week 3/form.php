<?php
if(isset($_POST['name'],$_POST['surname'],$_POST['foot'],$_POST['country'],$_POST['injury_prone'])){$player= array(
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $foot = $_POST['foot'];
    $country = $_POST['country'];
    $injury_prone = $_POST['injury_prone'];


    
}



?>


<form action="form.php" method="post">

Name
    <input type="text" name="name"><br>
Surname
    <input type="text" name="surname"><br>
    Foot 
<input type="radio" name="foot" value="left" id="foot-left"><label for="foot-left"> left </label>  
<input type="radio" name="foot" value="right" id="foot-right"><label for="foot-right"> right </label>   
    <br> Country:
    <select name="country">
        <option value:"CZ"> Brazil </option>
        <option value:"ARG">  Argentina </option>
        <option value:"SPA"> Spain</option>
        <option value:"GER"> Germany </option>
        <option value:"ENG"> England </option>
        <br><br>
        Injury prone
        <input type="checkbox" name="injury_prone" id="injury_prone"><label for="injury_prone">Injury prone</label>
        <br><br>
        <input type="submit" value="Submit this">


        </form>

  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </form>