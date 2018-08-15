function convertCurrency()
{
    let amount = document.getElementById('currency-sum').value;
    let from = document.getElementById('from').value;
    let to = document.getElementById('to').value;

    let request = {
        "amount": amount,
        "from": from,
        "to": to
    };

    // let request = $.param(data);

    $.ajax({
        type:'POST',
        dataType: 'html',
        url: '../app/CurrencyHandler.php',
        data:{'request':request},
        success: function (data){
            console.log(data);
        }

    })

}



