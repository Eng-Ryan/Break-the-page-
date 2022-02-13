<?php
require './Controller/CoffeeController.php';
$coffeeController = new CoffeeController();

$title = "Add a new Coffee";

if(isset($_GET["update"]))
{
    $coffee = $coffeeController->GetCoffeeById($_GET["update"]);
    
    $content ="<form action='' method='post'>
    <fieldset>
        <legend>Add a new Coffee</legend>
        <label for='name'>Name: </label>
        <input type='text' class='inputField' name='txtName' value='$coffee->name'  /><br/>

        <label for='type'>Type: </label>
        <select class='inputField' name='ddlType'>
            <option value='%'>All</option>"
        .$coffeeController->CreateOptionValues($coffeeController->GetCoffeeTypes()).
        "</select><br/>

        <label for='price'>Price: </label>
        <input type='text' class='inputField' name='txtPrice' value='$coffee->price'/><br/>

        <label for='roast'>Roast: </label>
        <input type='text' class='inputField' name='txtRoast' value='$coffee->roast' /><br/>

        <label for='country'>Country: </label>
        <input type='text' class='inputField' name='txtCountry' value='$coffee->country' /><br/>

        <label for='image'>Image: </label>
        <select class='inputField' name='ddlImage'>"
        .$coffeeController->GetImages().
        "</select></br>

        <label for='review'>Review: </label>
        <textarea cols='70' rows='12' name='txtReview'>$coffee->review</textarea></br>

        <input type='submit' value='Submit'>
    </fieldset>
</form>";
}
 else 
{
    $content ="<form action='' method='post'>
    <fieldset>
        <legend>Add a new Coffee</legend>
        <label for='name'>Name: </label>
        <input type='text' class='inputField' name='txtName' /><br/>

        <label for='type'>Type: </label>
        <select class='inputField' name='ddlType'>
            <option value='%'>All</option>"
        .$coffeeController->CreateOptionValues($coffeeController->GetCoffeeTypes()).
        "</select><br/>

        <label for='price'>Price: </label>
        <input type='text' class='inputField' name='txtPrice' /><br/>

        <label for='roast'>Roast: </label>
        <input type='text' class='inputField' name='txtRoast' /><br/>

        <label for='country'>Country: </label>
        <input type='text' class='inputField' name='txtCountry' /><br/>

        <label for='image'>Image: </label>
        <select class='inputField' name='ddlImage'>"
        .$coffeeController->GetImages().
        "</select></br>

        <label for='review'>Review: </label>
        <textarea cols='70' rows='12' name='txtReview'></textarea></br>

        <input type='submit' value='Submit'>
    </fieldset>
</form>";
}


if(isset($_GET["update"]))
{
    if(isset($_POST["txtName"]))
    {
        $coffeeController->UpdateCoffee($_GET["update"]);
    }
}
else
{
    if(isset($_POST["txtName"]))
    {
        $coffeeController->InsertCoffee();
    }
}

include './Template.php';
?>


