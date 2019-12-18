<!DOCTYPE html>
<!--
Rajkaran Dhami
Student ID: 991542986
SYST10199 - Web Programming
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="order.css">
        <link rel="stylesheet" href="order1.css">
        <link rel="stylesheet" href="order2.css">
    </head>
    <body>
       
		
        <?php       
            echo"<h4>Tim Hortons</h4>";
            if (isset($_REQUEST['order']))
            {
                $size = $_REQUEST['size'];
                
                 // check the number field
                
                if (empty($_REQUEST["number"]))
                {
                    echo"<h2>Please select number of Coffees!</h2><br>";
                }
                
                // check the size field
                
                if($size=="select"){
                    echo"<h2>Please Select Size of Coffee!<h2>";
                    echo"<h2>Try Again!</h2>";
                }
                
                //display user's order
                
                else{
                $number = $_REQUEST['number'];
                
               
                $cream = $_REQUEST['cream'];
                
                $sugar = $_REQUEST['sugar'];
                
                echo "<h1>Here is Your Order!</h1>";
                
                for ($i=1; $i<=$number; $i++)
                {
                   
                    echo"<fieldset>";
                    if ($size == "Large"){
                    
                        echo "<img src='cup.jpg' alt='large image' height='250px' width='180px' />";
                    }
                    else if($size=="Medium"){
                        echo "<img src='cup.jpg' alt='medium image' height='150px' width='100px' />";
                        
                    }
                    else if($size=="Small"){
                        echo "<img src='cup.jpg' alt='small image' height='100px' width='80px'  />";
                        
                    }
                    else if($size=="Extra-Large"){
                        echo"<img src='cup.jpg' alt='extra-large image' height='300px' width='200px' />";
                          
                    }
                
                    for ($j=1; $j<=1; $j++)
                {
                        if($cream==null){
                            break;
                        }
                        else{
                        echo "<img src='plus.jpg' alt='plus image'/>";
                        }
                }
                    
                    for ($k=1; $k<=$cream; $k++)
                {
              
                    echo "<img src='cream.jpg' alt='cream image'/ >";
                }
                for ($l=1; $l<=1; $l++)
                {
                        echo "<br>";
                }
                for ($m=1; $m<=1; $m++)
                {
                    if($sugar==null){
                            break;
                        }
                        else{
                        echo "<img src='plus.jpg' alt='plus image'/>";
                        }
                }
                for ($n=1; $n<=$sugar; $n++)
                {
                   
                    echo "<img src='sugar.jpg' alt='sugar image' />";
                }
                echo"</fieldset>";
                for ($o=1; $o<=1; $o++)
                {
                        echo "<br>";
                }
                } 
                }
                     
            }
            
            //display bill of user
            
            if (!empty($_REQUEST["number"]))
                {
                if (!empty($_REQUEST["size"]))
                {
                    if ($size == "Large"){
                        $tax=($number*2.00) *0.13;
                        $totalcost=$tax +($number*2.00) ;
                     echo "<h3>Your Bill:</h3> ";
                    echo "<p>Cost of $number $size Coffee including tax = \$ $totalcost</p>";
                    echo "<p>Thanks for making a Order!</p>";
                    }
                    else if ($size == "Medium"){
                        $tax=($number*1.50) *0.13;
                        $totalcost=$tax +($number*1.50) ;
                     echo "<h3>Your Bill:</h3> ";
                    echo "<p>Cost of $number $size Coffee including tax = \$ $totalcost</p>";
                    echo "<p>Thanks for making a Order!</p>";
                    }
                    else if ($size == "Small"){
                        $tax=($number*1.00) *0.13;
                        $totalcost=$tax +($number*1.00) ;
                     echo "<h3>Your Bill:</h3> ";
                    echo "<p>Cost of $number $size Coffee including tax = \$ $totalcost</p>";
                    echo "<p>Thanks for making a Order!</p>";
                    }
                    else if ($size == "Extra-Large"){
                        $tax=($number*2.50) *0.13;
                        $totalcost=$tax +($number*2.50) ;
                     echo "<h3>Your Bill:</h3> ";
                    echo "<p>Cost of $number $size Coffee including tax = \$ $totalcost</p>";
                    echo "<p>Thanks for making a Order!</p>";
                    }
                    
                }
                
            }
            
        ?> 
  
    </body>
      
</html>

