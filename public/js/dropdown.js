$("#tipo_equipo").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca").empty();

        for(i=0;i<response.length;i++){
            $("#marca").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo").empty();

        for(i=0;i<response.length;i++){
            $("#tipo").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion").empty();

        for(i=0;i<response.length;i++){
            $("#condicion").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo1").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca1").empty();

        for(i=0;i<response.length;i++){
            $("#marca1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca1").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo1").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo1").empty();

        for(i=0;i<response.length;i++){
            $("#tipo1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc1").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg1").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion1").empty();

        for(i=0;i<response.length;i++){
            $("#condicion1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo2").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca2").empty();

        for(i=0;i<response.length;i++){
            $("#marca2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca2").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo2").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo2").empty();

        for(i=0;i<response.length;i++){
            $("#tipo2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc2").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg2").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion2").empty();

        for(i=0;i<response.length;i++){
            $("#condicion2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo3").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca3").empty();

        for(i=0;i<response.length;i++){
            $("#marca3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca3").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo3").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo3").empty();

        for(i=0;i<response.length;i++){
            $("#tipo3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc3").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg3").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion3").empty();

        for(i=0;i<response.length;i++){
            $("#condicion3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo4").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca4").empty();

        for(i=0;i<response.length;i++){
            $("#marca4").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca4").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo4").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo4").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo4").empty();

        for(i=0;i<response.length;i++){
            $("#tipo4").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc4").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc4").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg4").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg4").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion4").empty();

        for(i=0;i<response.length;i++){
            $("#condicion4").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo5").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca5").empty();

        for(i=0;i<response.length;i++){
            $("#marca5").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca5").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo5").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo5").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo5").empty();

        for(i=0;i<response.length;i++){
            $("#tipo5").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc5").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc5").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg5").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg5").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion5").empty();

        for(i=0;i<response.length;i++){
            $("#condicion5").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo6").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca6").empty();

        for(i=0;i<response.length;i++){
            $("#marca6").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca6").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo6").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo6").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo6").empty();

        for(i=0;i<response.length;i++){
            $("#tipo6").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc6").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc6").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg6").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg6").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion6").empty();

        for(i=0;i<response.length;i++){
            $("#condicion6").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo7").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca7").empty();

        for(i=0;i<response.length;i++){
            $("#marca7").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca7").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo7").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo7").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo7").empty();

        for(i=0;i<response.length;i++){
            $("#tipo7").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc7").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc7").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg7").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg7").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion7").empty();

        for(i=0;i<response.length;i++){
            $("#condicion7").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo8").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca8").empty();

        for(i=0;i<response.length;i++){
            $("#marca8").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca8").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo8").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo8").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo8").empty();

        for(i=0;i<response.length;i++){
            $("#tipo8").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc8").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc8").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg8").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg8").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion8").empty();

        for(i=0;i<response.length;i++){
            $("#condicion8").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo9").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca9").empty();

        for(i=0;i<response.length;i++){
            $("#marca9").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca9").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo9").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo9").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo9").empty();

        for(i=0;i<response.length;i++){
            $("#tipo9").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc9").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc9").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg9").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg9").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion9").empty();

        for(i=0;i<response.length;i++){
            $("#condicion9").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo10").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca10").empty();

        for(i=0;i<response.length;i++){
            $("#marca10").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca10").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo10").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo10").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo10").empty();

        for(i=0;i<response.length;i++){
            $("#tipo10").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc10").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc10").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg10").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg10").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion10").empty();

        for(i=0;i<response.length;i++){
            $("#condicion10").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo11").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca11").empty();

        for(i=0;i<response.length;i++){
            $("#marca11").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca11").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo11").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo11").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo11").empty();

        for(i=0;i<response.length;i++){
            $("#tipo11").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc11").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc11").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg11").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg11").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion11").empty();

        for(i=0;i<response.length;i++){
            $("#condicion11").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo12").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca12").empty();

        for(i=0;i<response.length;i++){
            $("#marca12").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca12").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo12").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo12").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo12").empty();

        for(i=0;i<response.length;i++){
            $("#tipo12").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc12").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc12").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg12").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg12").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion12").empty();

        for(i=0;i<response.length;i++){
            $("#condicion12").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo13").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca13").empty();

        for(i=0;i<response.length;i++){
            $("#marca13").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca13").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo13").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo13").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo13").empty();

        for(i=0;i<response.length;i++){
            $("#tipo13").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc13").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc13").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg13").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg13").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion13").empty();

        for(i=0;i<response.length;i++){
            $("#condicion13").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo14").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca14").empty();

        for(i=0;i<response.length;i++){
            $("#marca14").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca14").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo14").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo14").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo14").empty();

        for(i=0;i<response.length;i++){
            $("#tipo14").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc14").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc14").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg14").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg14").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion14").empty();

        for(i=0;i<response.length;i++){
            $("#condicion14").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo15").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca15").empty();

        for(i=0;i<response.length;i++){
            $("#marca15").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca15").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo15").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo15").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo15").empty();

        for(i=0;i<response.length;i++){
            $("#tipo15").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc15").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc15").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg15").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg15").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion15").empty();

        for(i=0;i<response.length;i++){
            $("#condicion15").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo16").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca16").empty();

        for(i=0;i<response.length;i++){
            $("#marca16").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca16").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo16").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo16").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo16").empty();

        for(i=0;i<response.length;i++){
            $("#tipo16").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc16").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc16").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg16").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg16").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion16").empty();

        for(i=0;i<response.length;i++){
            $("#condicion16").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo17").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca17").empty();

        for(i=0;i<response.length;i++){
            $("#marca17").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca17").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo17").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo17").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo17").empty();

        for(i=0;i<response.length;i++){
            $("#tipo17").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc17").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc17").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg17").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg17").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion17").empty();

        for(i=0;i<response.length;i++){
            $("#condicion17").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo18").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca18").empty();

        for(i=0;i<response.length;i++){
            $("#marca18").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca18").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo18").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo18").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo18").empty();

        for(i=0;i<response.length;i++){
            $("#tipo18").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc18").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc18").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg18").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg18").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion18").empty();

        for(i=0;i<response.length;i++){
            $("#condicion18").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo19").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca19").empty();

        for(i=0;i<response.length;i++){
            $("#marca19").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca19").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo19").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo19").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("tipos/"+event.target.value+"",function(response,tipo_equipo){
        $("#tipo19").empty();

        for(i=0;i<response.length;i++){
            $("#tipo19").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc19").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc19").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg19").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg19").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion19").empty();

        for(i=0;i<response.length;i++){
            $("#condicion19").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo20").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca20").empty();

        for(i=0;i<response.length;i++){
            $("#marca20").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca20").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo20").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo20").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material").empty();

        for(i=0;i<response.length;i++){
            $("#material").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc20").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc20").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg20").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg20").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion20").empty();

        for(i=0;i<response.length;i++){
            $("#condicion20").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo21").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca21").empty();

        for(i=0;i<response.length;i++){
            $("#marca21").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca21").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo21").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo21").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material1").empty();

        for(i=0;i<response.length;i++){
            $("#material1").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc21").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc21").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg21").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg21").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion21").empty();

        for(i=0;i<response.length;i++){
            $("#condicion21").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipo_equipo22").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca22").empty();

        for(i=0;i<response.length;i++){
            $("#marca22").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca22").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo22").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo22").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material2").empty();

        for(i=0;i<response.length;i++){
            $("#material2").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc22").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc22").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg22").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg22").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion22").empty();

        for(i=0;i<response.length;i++){
            $("#condicion22").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo23").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca23").empty();

        for(i=0;i<response.length;i++){
            $("#marca23").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca23").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo23").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo23").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material3").empty();

        for(i=0;i<response.length;i++){
            $("#material3").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc23").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc23").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg23").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg23").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion23").empty();

        for(i=0;i<response.length;i++){
            $("#condicion23").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipo_equipo24").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca24").empty();

        for(i=0;i<response.length;i++){
            $("#marca24").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca24").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo24").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo24").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material4").empty();

        for(i=0;i<response.length;i++){
            $("#material4").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc24").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc24").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg24").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg24").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion24").empty();

        for(i=0;i<response.length;i++){
            $("#condicion24").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo25").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca25").empty();

        for(i=0;i<response.length;i++){
            $("#marca25").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca25").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo25").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo25").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material5").empty();

        for(i=0;i<response.length;i++){
            $("#material5").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc25").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc25").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg25").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg25").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion25").empty();

        for(i=0;i<response.length;i++){
            $("#condicion25").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo26").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca26").empty();

        for(i=0;i<response.length;i++){
            $("#marca26").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca26").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo26").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo26").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material6").empty();

        for(i=0;i<response.length;i++){
            $("#material6").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc26").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc26").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg26").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg26").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion26").empty();

        for(i=0;i<response.length;i++){
            $("#condicion26").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo27").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca27").empty();

        for(i=0;i<response.length;i++){
            $("#marca27").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca27").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo27").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo27").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material7").empty();

        for(i=0;i<response.length;i++){
            $("#material7").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc27").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc27").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg27").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg27").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion27").empty();

        for(i=0;i<response.length;i++){
            $("#condicion27").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipo_equipo28").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca28").empty();

        for(i=0;i<response.length;i++){
            $("#marca28").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca28").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo28").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo28").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material8").empty();

        for(i=0;i<response.length;i++){
            $("#material8").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc28").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc28").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg28").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg28").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion28").empty();

        for(i=0;i<response.length;i++){
            $("#condicion28").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo29").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca29").empty();

        for(i=0;i<response.length;i++){
            $("#marca29").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca29").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo29").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo29").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("materiales/"+event.target.value+"",function(response,tipo_equipo){
        $("#material9").empty();

        for(i=0;i<response.length;i++){
            $("#material9").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc29").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc29").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg29").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg29").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion29").empty();

        for(i=0;i<response.length;i++){
            $("#condicion29").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipo_equipo30").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca30").empty();

        for(i=0;i<response.length;i++){
            $("#marca30").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca30").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo30").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo30").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc30").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc30").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg30").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg30").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion30").empty();

        for(i=0;i<response.length;i++){
            $("#condicion30").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo31").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca31").empty();

        for(i=0;i<response.length;i++){
            $("#marca31").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca31").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo31").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo31").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc31").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc31").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg31").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg31").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion31").empty();

        for(i=0;i<response.length;i++){
            $("#condicion31").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipo_equipo32").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca32").empty();

        for(i=0;i<response.length;i++){
            $("#marca32").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca32").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo32").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo32").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc32").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc32").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg32").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg32").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion32").empty();

        for(i=0;i<response.length;i++){
            $("#condicion32").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo33").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca33").empty();

        for(i=0;i<response.length;i++){
            $("#marca33").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca33").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo33").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo33").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc33").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc33").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg33").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg33").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion33").empty();

        for(i=0;i<response.length;i++){
            $("#condicion33").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipo_equipo34").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca34").empty();

        for(i=0;i<response.length;i++){
            $("#marca34").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca34").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo34").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo34").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc34").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc34").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg34").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg34").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion34").empty();

        for(i=0;i<response.length;i++){
            $("#condicion34").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo35").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca35").empty();

        for(i=0;i<response.length;i++){
            $("#marca35").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca25").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo35").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo35").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc35").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc35").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg35").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg35").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion35").empty();

        for(i=0;i<response.length;i++){
            $("#condicion35").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo36").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca36").empty();

        for(i=0;i<response.length;i++){
            $("#marca36").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca36").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo36").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo36").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc36").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc36").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg36").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg36").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion36").empty();

        for(i=0;i<response.length;i++){
            $("#condicion36").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo37").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca37").empty();

        for(i=0;i<response.length;i++){
            $("#marca37").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca37").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo37").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo37").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc37").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc37").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg37").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg37").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion37").empty();

        for(i=0;i<response.length;i++){
            $("#condicion37").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});


$("#tipo_equipo38").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca38").empty();

        for(i=0;i<response.length;i++){
            $("#marca38").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca38").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo38").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo38").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc38").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc38").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg38").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg38").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion38").empty();

        for(i=0;i<response.length;i++){
            $("#condicion38").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#tipo_equipo39").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipo_equipo){
        $("#marca39").empty();

        for(i=0;i<response.length;i++){
            $("#marca39").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }

        $("#marca39").change(function(event){
            $.get("modelos/"+event.target.value+"",function(response,marca){
                $("#modelo39").empty();

                for(i=0;i<response.length;i++){
                    $("#modelo39").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
                }
            });
        })
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadc39").empty();

        for(i=0;i<response.length;i++){
            $("#unidadc39").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("unidades/"+event.target.value+"",function(response,tipo_equipo){
        $("#unidadg39").empty();

        for(i=0;i<response.length;i++){
            $("#unidadg39").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });

    $.get("condiciones/"+event.target.value+"",function(response,tipo_equipo){
        $("#condicion39").empty();

        for(i=0;i<response.length;i++){
            $("#condicion39").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

