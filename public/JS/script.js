let child, teen, adult;
let theValue;

function calculate_price()
{
    child= document.getElementById('child').value;
    teen= document.getElementById('teen').value;
    adult= document.getElementById('adult').value;

    document.getElementById("f_price").innerHTML= Number(child)*15+Number(teen)*20+Number(adult)*30 + " €"
}

calculate_price();
document.getElementById('child').addEventListener('input', function(){
    calculate_price();
});
document.getElementById('teen').addEventListener('input', function(){
    calculate_price();
});
document.getElementById('adult').addEventListener('input', function(){
    calculate_price();
});
