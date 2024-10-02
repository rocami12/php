num1=document.getElementById("n1");
num2=document.getElementById("n2");
res =document.getElementById("r");

function sumar(){
res.value=parseFloat(num1.value)+parseFloat(num2.value);
}
document.getElementById("sumar").addEventListener('click',sumar);

function restar(){
    res.value=parseFloat(num1.value)+parseFloat(num2.value);
    }
    document.getElementById("restar").addEventListener('click',restar);