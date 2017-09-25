$(document).ready(function () {

    $(".pesometro").keyup(multInputs4);

    function multInputs4() {

        $("tr.pesometro").each(function () {
            // get the values from this row:
            var $val3 = $('.cantidad4', this).val();
            var $val4 = $('.v_unitario4', this).val();


            var $total4 = ($val3 * 1) * ($val4 * 1);

            $('#subtotal4', this).val($total4);

            console.log($total4);

        });
    }
});

