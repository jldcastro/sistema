$("#tbody").delegate('.cantidad,.v_unitario','keyup',function(){
    var tr =$(this).parent().parent();
    var cantidad = tr.find('.cantidad').val();
    var v_unitario = tr.find('.v_unitario').val();

    total();
});


function total(){
    var total =0;
    $('.v_unitario').each(function(i,e){
        var v_unitario = $(this).val()-0;

        total += v_unitario;
    });

    $('.total').html(total);
}

$("#tbody2").delegate('.cantidad2,.v_unitario2','keyup',function(){


    var tr =$(this).parent().parent();
    var cantidad2 = tr.find('.cantidad2').val();
    var v_unitario2 = tr.find('.v_unitario2').val();


    total2();
});

function total2(){
    var total2 =0;
    $('.v_unitario2').each(function(i,e){
        var v_unitario2 = $(this).val()-0;
        total2 += v_unitario2;
    });

    $('.total2').html(total2);
}

$("#tbody3").delegate('.cantidad3,.v_unitario3','keyup',function(){
    var tr =$(this).parent().parent();
    var cantidad3 = tr.find('.cantidad3').val();
    var v_unitario3 = tr.find('.v_unitario3').val();

    total3();
});


function total3(){
    var total3 =0;
    $('.v_unitario3').each(function(i,e){
        var v_unitario3 = $(this).val()-0;

        total3 += v_unitario3;
    });

    $('.total3').html(total3);
}

$("#tbody4").delegate('.cantidad4,.v_unitario4','keyup',function(){


    var tr =$(this).parent().parent();
    var cantidad4 = tr.find('.cantidad4').val();
    var v_unitario4 = tr.find('.v_unitario4').val();

    total4();
});

function total4(){
    var total4 =0;
    $('.v_unitario4').each(function(i,e){
        var v_unitario4 = $(this).val()-0;
        total4 += v_unitario4;
    });

    $('.total4').html(total4);
}