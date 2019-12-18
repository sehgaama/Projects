<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="index1.css">
        <link rel="stylesheet" href="index2.css">
        <link rel="stylesheet" href="index3.css">
    </head>
    <body>
        <img src="logo-en.jpg"  />
        <h2>welcome to / bienvenue chez</h2>
        
        <h1>Tim Hortons</h1>
        
        <form action="order.php" method="post">
            
            <fieldset>
                
                <h3>Give us your order... </h3>
      
                Choose number of Coffees: <input type ="number" name="number" value="0" min="1" max="10" required/><br><br>
      
      Select size of Coffee:<select name="size">

          
          <option value="select">Select size</option>
          <option value="Large">Large</option>
	  <option value="Medium">Medium</option>
          <option value="Small">Small</option>
          <option value="Extra-Large">Extra-Large</option>
          
	  </select>
	  <br><br>
      
          Do you want creams in your coffee? <input type ="number" name="cream" value="0" min="1" max="10" /><br><br>
      
          Do you want sugar in your Coffee? <input type ="number" name="sugar" value="0" min="1" max="10" /><br><br>
     
      <input type="submit" name="order" value="Order Cofee">
            </fieldset>
     
</form>
               
    </body>
</html>

