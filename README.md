# PhpProject4

An html file (the form) to collect user data 
A PHP file to process it. Use the Post method 
The form needs to include:

1 (or more) text box
1 drop-down list
3 check boxes at least
3 radio buttons
Note: Make sure to check if no check boxes were selected before attempting to display them. A good way to display the contents of the checkboxes is to handle them in an array, and have the processing script to go thru the array using a foreach loop. This is how the toppings were set in the sample form:

<fieldset>
     <br>Toppings <br>
     <input type="checkbox" name="toppings[]" value = 'Pepperoni' checked> Pepperoni<br>
     <input type="checkbox" name="toppings[]" value = 'Mushrooms' > Mushrooms<br>
     <input type="checkbox" name="toppings[]" value = 'Olives' > Olives<br>
</fieldset>

 

Once the submit button is clicked, the processing screen should display what the user entered.

![Screenshot 2022-04-04 150914](https://user-images.githubusercontent.com/81642890/161615055-243af7cc-1099-4de1-b778-f9d6033fd515.png)

![Screenshot 2022-04-04 150948](https://user-images.githubusercontent.com/81642890/161615076-cc12382f-fb2d-4fd9-a231-24b45a2b9160.png)
