<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9 offset-md-3" style="padding-top: 25px">
            <h3>Currency Converter</h3>
            <form action="">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input class="form-control" type="text" value="1" name="from">
                    </div>
                    <div class="col-sm-2">
                        <select class="form-control" name="currency-from" id="currency-from">
                           <?php foreach ($countries['symbols'] as $key=>$country):?>
                                <option value="<?php echo $key?>" <?php if($country === 'USD'): echo 'selected';?><?php endif; ?> ><?php echo $country?></option>
                           <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input class="form-control" type="text" value="" name="from" disabled>
                    </div>
                    <div class="col-sm-2">
                        <select class="form-control" name="currency-to" id="currency-to">
                            <?php foreach ($countries['symbols'] as $key=>$country): ?>
                                <option value="<?php echo $key ?>"><?php echo $country?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="assets/js/custom.js"></script>
</body>
</html>