$(function () {
    $("#state").on("change", function () {
        var $state = $(this).val();
//        console.log($state);
        $.ajax({
            url: 'assets/js/city.json',
            type: 'GET',
            dataType: "json",
            data: {
                id: $state
            },
            success: function (datas) {
                var $options = "";
                $('#city').html('');
//                console.log($state);
                let state = datas[$state];
//                console.log(state);
                state.map((cities, i) => {
                    city_keys = Object.keys(cities);
                    city_val = Object.values(cities);
                    console.log(city_keys);
                    console.log(city_val);
                    if (city_keys) {
                        city_keys.map((city_key) => {
                            $options += `<option value="${city_key}">${cities[city_key]}</option>`;
                        });
                    }
                });
                console.log($options);
                $('#city').html($options);
            }
            , error: function () {
                console.log("Error");
            }
        });
    });
})