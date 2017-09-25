$(document).ready(function () {

        $(".bascula").keyup(multInputs);

        function multInputs() {

            $("tr.bascula").each(function () {
                // get the values from this row:
                var $val1 = $('.cantidad', this).val();
                var $val2 = $('.v_unitario', this).val();


                var $total = ($val1 * 1) * ($val2 * 1);

                $('#subtotal', this).val($total);

                console.log($total);

            });
        }
});

