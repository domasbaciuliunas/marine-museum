let child, teen, adult;

function calculate_price()
{
    child= is_number_allowed(document.getElementById('child').value);
    document.getElementById('child').value = child;
    teen= is_number_allowed(document.getElementById('teen').value);
    document.getElementById('teen').value = teen;
    adult= is_number_allowed(document.getElementById('adult').value);
    document.getElementById('adult').value = adult;

    document.getElementById("f_price").innerHTML= Number(child)*15+Number(teen)*20+Number(adult)*30 + " €"
}

function is_number_allowed(x)
{
    if (x<0){return 0;}
    else return x;
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('child').addEventListener('input', calculate_price);
    document.getElementById('teen').addEventListener('input', calculate_price);
    document.getElementById('adult').addEventListener('input', calculate_price);
    calculate_price();
});
