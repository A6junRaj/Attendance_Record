// Auto date Selector
const d = new Date();
const year = d.getFullYear();
const month = String(d.getMonth() + 1).padStart(2, '0');
const day = String(d.getDate()).padStart(2, '0');
var date = (year+"-"+month+"-"+day);
const valueToPut = date; 
const inputBox = document.getElementById("myInputBox");
inputBox.value = valueToPut;

