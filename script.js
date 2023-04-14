var id, tr = document.getElementsByClassName("tr");
var td = document.getElementsByClassName("id"); 
for (let index = 0; index < tr.length; index++) {
  id=index+1;
  td[index].innerHTML=id;
}
function myFunction(){
  var inp=document.getElementById("myInput").value; 
  var grid_container=document.getElementById("grid-container");
  var products= grid_container.getElementsByClassName("products");
for (let index = 0; index < products.length; index++) {
var productText=document.getElementsByClassName("product-text");
var h=productText[index].getElementsByTagName("h3")[0];
  if (h) {
    var txtValue=h.outerText;
    let txtcapital = txtValue.toUpperCase();
    let inpcap= inp.toUpperCase();
  if (txtcapital.indexOf(inpcap) > -1) {
    products[index].style.display = "";
} 
else {
    products[index].style.display = "none";
 }
 } 
}
}

ttotal=0;
function quantity(){
  var quantity=document.getElementsByClassName('quantity');
  var price=document.getElementsByClassName('price');
  var productName=document.getElementsByClassName("pname");
  var totalValue=document.getElementsByClassName("total");
  var ttotalValue=document.getElementById("ttotal");
 //console.log(productName[1].innerHTML);
  var obj=[];
  for (let index = 0; index < quantity.length; index++) {
   productName= productName[index].innerHTML;
  // console.log(index);
var quanty = parseInt(quantity[index].value);  
var priceValue = parseInt(price[index].innerHTML.slice(1));

//console.log(productName);
total=priceValue*quanty;
totalValue[index].innerHTML="# "+ total;
ttotal+=total;
ttotalValue.innerHTML=ttotal
obj.push({
  "productName": productName,
  "quantity":quanty,
  "price":priceValue
});
  }
  
  console.log(obj);
  }
  obj.reduce(tttotal);
var request=new XMLHttpRequest()
request.open("GET","chart1.php");
request.onload=function (params) {
console.log(request.responseText);  
}

function tttotal(total, value, index, array) {
  return total + value;
}
request.send();