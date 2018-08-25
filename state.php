<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="#" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <div class="form-group">
            <select name="ostate" id="ostate" class="form-control">
                <option selected="selected">Select item...</option>
                <option value='Abia'>Abia</option>
                <option value='Adamawa'>Adamawa</option>
                <option value='AkwaIbom'>AkwaIbom</option>
                <option value='Anambra'>Anambra</option>
                <option value='Bauchi'>Bauchi</option>
                <option value='Bayelsa'>Bayelsa</option>
                <option value='Benue'>Benue</option>
                <option value='Borno'>Borno</option>
                <option value='CrossRiver'>CrossRiver</option>
                <option value='Delta'>Delta</option>
                <option value='Ebonyi'>Ebonyi</option>
                <option value='Edo'>Edo</option>
                <option value='Ekiti'>Ekiti</option>
                <option value='Enugu'>Enugu</option>
                <option value='Gombe'>Gombe</option>
                <option value='Imo'>Imo</option>
                <option value='Jigawa'>Jigawa</option>
                <option value='Kaduna'>Kaduna</option>
                <option value='Kano'>Kano</option>
                <option value='Katsina'>Katsina</option>
                <option value='Kebbi'>Kebbi</option>
                <option value='Kogi'>Kogi</option>
                <option value='Kwara'>Kwara</option>
                <option value='Lagos'>Lagos</option>
                <option value='Nasarawa'>Nasarawa</option>
                <option value='Niger'>Niger</option>
                <option value='Ogun'>Ogun</option>
                <option value='Ondo'>Ondo</option>
                <option value='Osun'>Osun</option>
                <option value='Oyo'>Oyo</option>
                <option value='Plateau'>Plateau</option>
                <option value='Rivers'>Rivers</option>
                <option value='Sokoto'>Sokoto</option>
                <option value='Taraba'>Taraba</option>
                <option value='Yobe'>Yobe</option>
                <option value='Zamfara'>Zamafara</option>
            </select>
        </div>
        <div class="form-group">
            <select name="lga" id="lga" class="form-control">
                <option selected="selected">Select item...</option>
            </select>
        </div>

    </form>
    <script src="jquery-1.10.2.js"></script>
    <script src="state-lga.js"></script>
    <script>
        $("#ostate").on("change", function () {
            var $state = $(this).val();
            $.ajax({
                url: 's-lga.json',
                type: 'GET',
                dataType: "json",
                data: {
                    id: $state
                },
                success: function (datas) {
                    var $options = "";
                    $("#lga").html("");
                    var $count = 1;
                    $.each(datas, function (index, all) {
                        $.each(all, function (index, states) {
                            var s = index;
                            $.each(states, function (index, lga) {
                                $.each(lga, function (i, val) {
                                    console.log(index);
                                    if ($count == $state) {
                                        $options += "<option value='" + i + "'>" + val + "</option>";
                                    }
                                });
                            });
                        });
                        $count++;
                    });
                    console.log($options);
                    $("#lga").html($options);
                },
                error: function () {
                    alert("Error");
                }
            });
        });

    </script>
</body>

</html>
