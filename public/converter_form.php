<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/custom.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9 offset-md-3" style="padding-top: 25px">
            <h3 class="h3">Currency Converter</h3>
            <form name="cccForm" action="">
                <div class="form-group row">
                    <div class="col-sm-2">
                        <input class="form-control" type="text" value="1" name="currency-sum" id="currency-sum">
                    </div>
                    <div class="col-sm-5">
                        <select class="form-control" name="currency-from" id="from">
                           <?php foreach ($countries['symbols'] as $key=>$country):?>
                                <option value="<?php echo $key?>" <?php if($key === 'USD'): echo 'selected';?><?php endif; ?> ><?php echo $country.' ('.$key .')'?></option>
                           <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <input class="form-control" type="text" value="" name="amount" disabled>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-control" name="currency-to" id="to" onchange="convertCurrency()">
                            <?php foreach ($countries['symbols'] as $key=>$country): ?>
                                <option value="<?php echo $key ?>"><?php echo $country.' ('.$key .')'?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
