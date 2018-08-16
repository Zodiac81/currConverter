function convertCurrency()
{
    let currency_sum = document.getElementById('currency-from').value;
    let amount = document.getElementById('amount');
    let from = document.getElementById('from').value;
    let to = document.getElementById('to').value;
    let date = document.getElementsByClassName('current-time');

    let request = {
        "cc_val": currency_sum,
        "from": from,
        "to": to
    };
//let request = $.param(data);
    //console.log(request) ;

    $.ajax({
        type:"POST",
        dataType: "html",
        url: "../app/CurrencyHandler.php",
        data:{"request":request},
        success: function (data){
           let responce = JSON.parse(data);
           $(amount).val(responce.cc);
        }

    });

}


