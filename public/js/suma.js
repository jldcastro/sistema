$(document).ready(function () {
    $(".pesometro").keyup(multInputs);

    function multInputs() {
        var mult = 0;

        $("tr.pesometro").each(function () {
            // get the values from this row:
            var $val1 = parseInt($('.cantidad4', this).val());
            var $val2 = parseInt($('.v_unitario4', this).val());

            var $total = ($val1 * 1) * ($val2 * 1);

            $('#subtotal4',this).val($total);


        });



    }
});