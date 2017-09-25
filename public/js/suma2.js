$("#tbody5").delegate('.vtcotizado','keyup',function(){
    var tr =$(this).parent().parent();
    var vtcotizado = tr.find('.vtcotizado').val();
    mneto();
});

function mneto(){
    var neto =0;
    $('.vtcotizado').each(function(i,e){
        var vtcotizado = $(this).val()-0;
        neto = parseInt(vtcotizado*0.19);

        mn=vtcotizado-neto;
    });

    $("#diferencia").val(neto);
}

