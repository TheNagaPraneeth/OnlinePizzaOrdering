var some;
var a1;
var tops;
function price(){
	var tot = 0;
	var size = document.getElementById('size1').value;
	if (size == 1) {
		tot = tot + 56;
	}else if(size == 2){
		tot = tot + 66;
	}else{
		tot = tot + 76;
	}
	toppings1 = 0;
	var topp = document.getElementsByName('toppingsrate');
	var i;
	for(i=0;i<topp.length;i++){
		if (topp[i].checked) {
			tot = tot + 0.99;
			toppings1++;
		}
		document.getElementById('price').innerHTML = "$" + tot.toFixed(2);
		some= document.getElementById('price').innerHTML;
	}
	function something()
	{
		document.getElementById("demo").innerHTML = 'some';
	}
	function cardnumber(){
		window.alert("Hello");
	}
	function cardnumber1(){
		var name = document.getElementsByName('Name')[0].value;
		var BillingAddress = document.getElementsByName('BillingAddress')[0].value;
		var cardno = document.getElementsByName('Cardinfo')[0].value;
		var cvv= document.getElementsByName('cvv')[0].value;
		if (cardno.length != 16) {
			alert("enter a  valid card number");
		}
		else if(cvv.length!=3)
		{
			alert("CVV should have only 3 numbers");
		}
		else if (name == "" || cvv == "" || cardno=="") {
			alert("All fields are madatory");
		}else{
			alert("order placed succesfully");
		}
	}
	var cheese1=document.getElementById('cheese1').value;
}
function add(){
	if (toppings1 < 2) {
		alert("Please select atleast two toppings");
	}else{
		window.location = "payment.html";
	}
}
