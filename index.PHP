<html>  
<body>  
<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
 <input  type="submit" name="a" value="Add +"> 
<input  type="submit" name="m" value="mul *"> 
<input  type="submit" name="s" value="sub -"> 
<input  type="submit" name="d" value="div /"> 
<input  type="submit" name="mu" value="moduse %"> 
</form>  
<?php  
    if(isset($_POST['a']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
echo "The sum of $number1 and $number2 is: ".$sum;   
} 

if(isset($_POST['m']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $mul =  $number1*$number2;     
echo "The product of $number1 and $number2 is: ".$mul;   
}   
if(isset($_POST['s']))  
{  
    $number1 = $_POST['number1'];  
    $number2 = $_POST['number2'];  
    $sub=  $number1-$number2;     
echo "The difference of $number1 and $number2 is: ".$sub;   
} 
if(isset($_POST['mu']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $moduse=  $number1%$number2;     
echo "The moduse of $number1 and $number2 is: ".$moduse;   
} 
if(isset($_POST['d']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $div =  $number1/$number2;     
echo "The division of $number1 and $number2 is: ".$div;   
}     
?>  
</body>  
</html>  