<?php
ini_set('display_errors', 1);
if (!empty($_POST)) {
        // store stuff to database
        header('Location: form.php');
    echo 'adding product ' . $_POST['product'];
        if (isset($_POST['color'])){
            echo $_POST['color'];
        }
        if (isset($_POST['really'])){
            echo ', I mean it';
        }
    
  
}

?>

    <form action="" method="post">
        Product: 
        <input type="text" name="product" id="product">
        <br>
       
    
    
      Pick color:
    <input type="radio" name="color" value="black" id="color-black"><label for="color-black"> black </label>  
    <input type="radio" name="color" value="white" id="color-white"><label for="color-white"> white </label>   
    <input type="radio" name="color" value="black" id="color-green"><label for="color-green"> green </label>
    <br>
    Country:
    <select name="country">
        <option value:"CZ"> Czech Republic </option>
        <option value:"bla">  BLABLA Republic </option>
        <option value:"lol"> LOL Republic </option>
        <option value:"omg"> Omg Republic </option>
        <option value:"true"> True Republic </option>
        <br><br>

        <br><hr>
        Really?
        <input type="checkbox" name="really" id="really"><label for="really">Really?</label>
        <br><br>
        Note:
        <textarea name="note">Leave your message</textarea>
        <br>
        


    <input type="submit" value="Submit this">
  
  
  
    </form>
      