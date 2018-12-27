var Balance = document.getElementById("balance");
var CurrentBalance = 10000;
function Intialize() {

    var Title = document.getElementById("title");
    Title.innerHTML =  "Muhammad Munnan Asim";

    Balance.innerHTML =  CurrentBalance;

    var Currency = document.getElementById("currency");
    Currency.innerHTML =  "PKR";

    var IBAN = document.getElementById("IBAN");
    IBAN.innerHTML =  "0311-4699914";
}

Intialize();

function  TakeInput(I) {
    if(I.key == "Enter")
    {
       var Amount =  document.getElementById("deposit").value;
       if(!isNaN(Amount))
       {
           CurrentBalance = CurrentBalance + parseInt(Amount);
           Balance.innerHTML=CurrentBalance;
           var Transiction = document.getElementById("transaction-table");
           Transiction.innerHTML+= '<tr>'
               + '<th align="left" valign="middle" scope="col">'+new Date()+'</th>'
               + '<th align="left" valign="middle" scope="col">'+"Deposit"+'</th>'
               + '<th align="left" valign="middle" scope="col">'+Amount+'</th>'
               +'</tr>';
       }
       else
       {
           document.getElementById("deposit-msg").innerText="Enter Invalid Amount";
       }
    }

}
function  TakeInput2(I) {
    if(I.key == "Enter")
    {
        var Amount =  document.getElementById("withdraw").value;
        if(!isNaN(Amount) && Amount<=CurrentBalance)
        {
            CurrentBalance = CurrentBalance - parseInt(Amount);
            Balance.innerHTML=CurrentBalance;
            var Transiction = document.getElementById("transaction-table");
            Transiction.innerHTML+= '<tr>'
                + '<th align="left" valign="middle" scope="col">'+new Date()+'</th>'
                + '<th align="left" valign="middle" scope="col">'+"Withdraw"+'</th>'
                + '<th align="left" valign="middle" scope="col">'+Amount+'</th>'
            +'</tr>';
        }
        else
        {
            document.getElementById("withdraw-msg").innerText="Don't have sufficient amount in account";
        }
    }
}

