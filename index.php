
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Exchange Rate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>
    <style>
        .box{
            margin: 0 auto;
            width: 500px;
            padding: 40px;
            border-radius: 10px;
            background: white;
            margin-top: 50px;
        }
        body{
            background: #2f1bb9;
        }
        .dd-selected-text,.dd-option-text{
            line-height: 0 !important;
        }
        .dd-selected-image ,.dd-option-image{
            margin-top: 4.5px;
        }


    </style>

</head>
<body>
<div class="container">
    <div class="box">

        <h1>Exchange Rate</h1>
        <h6>อัตราแลกเปลี่ยนประจำวัน - ธนาคารแห่งประเทศไทย</h6>
        <hr>
        <form action="calculate-result.php" method="post">

        <label>กรอกค่าเงินไทย (THB)</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><img src="http://icons.iconarchive.com/icons/custom-icon-design/all-country-flag/24/Thailand-Flag-icon.png" alt="">
                         &nbsp;THB</div>
                </div>
                <input type="number"  name="THB" class="form-control ip" placeholder="0.00 THB" data-validation="alphanumeric">

            </div>

            <br>
        <label>สกุลเงินที่ต้องการคำนวณ</label>
            <div id="myDropdown">
                <select   class="form-control sl">
                    <option value="USD" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagUSD.png">
                        USD ดอลล่าสหรัฐ
                    </option>
                    <option value="JYP" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagJPY.png">
                        JYP ญี่ปุ่น
                    </option>
                    <option value="KRW"  data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagKRW.png">
                        KRW เกาหลีใต้
                    </option>
                    <option value="GBP" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagGBP.png">
                        GBP สหราชอาณาจักร
                    </option>
                    <option value="EUR" data-imagesrc="https://www.bot.or.th/thai/financialmarkets/_layouts/application/Images/flagEUR.png">
                        EUR ยูโรโซน
                    </option>
                </select>
            </div>

            <input type="hidden" name="type" class="Types">
            <br>

            <div class="float-right">
                <button class="btn btn-success bt" id="target">คำนวณ</button>
                <button class="btn btn-danger" type="reset">รีเซ็ต</button>
            </div>
        </form>
        <hr>

        Krittanai Moungnoi 13580183 ICT::SILPAKORN
    </div>

</div>
<script>
    var typedatas;
    $('#myDropdown').ddslick({
        onSelected: function (data) {
            console.log(data.selectedData.value);
            typedatas = data.selectedData.value;
        }
    });
    $(".bt").click(function(){
        $('.Types').attr({
            "value" : typedatas,
        });
        // alert(datas);
    });


</script>



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    $.validate();
</script>
</body>
</html>
