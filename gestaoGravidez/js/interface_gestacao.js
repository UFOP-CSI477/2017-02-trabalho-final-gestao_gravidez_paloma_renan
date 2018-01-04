jQuery(document).ready(function($) {

  $("button[name='consultas']").click(function(event) {
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-album").hide();
    $("#grupo-desejos").hide();
    $("#grupo-humor").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").show();
  });

  $("button[name='vacinas']").click(function(event) {
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-album").hide();
    $("#grupo-desejos").hide();
    $("#grupo-humor").hide();
    $("#grupo-consultas").hide();
    $("#grupo-vacinas").show();
  });

  $("button[name='humor']").click(function(event) {
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-album").hide();
    $("#grupo-desejos").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").hide();
    $("#grupo-humor").show();
  });

  $("button[name='desejos']").click(function(event) {
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-album").hide();
    $("#grupo-humor").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").hide();
    $("#grupo-desejos").show();
  });

  $("button[name='albuns']").click(function(event) {
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-desejos").hide();
    $("#grupo-humor").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").hide();
    $("#grupo-album").show();
  });

  $("button[name='diario']").click(function(event) {
    $("#grupo-info-gestacao").hide();
    $("#grupo-album").hide();
    $("#grupo-desejos").hide();
    $("#grupo-humor").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").hide();
    $("#grupo-diario").show();
  }); // fim controle de interface do menu

  /* ############################################### */

  $("button[name='cadastrar-consulta']").click(function(event) {

    if(!$("input[name='data-consulta']").val())
    {
      $("#alertaConsultas-data").slideDown();
      $("input[name='data-consulta']").val("");
      $("input[name='data-consulta']").focus();
      return;
    }

    $("#alertaConsultas-data").hide();

    ////

    if(!$("input[name='horario-consulta']").val())
    {
      $("#alertaConsultas-horario").slideDown();
      $("input[name='horario-consulta']").val("");
      $("input[name='horario-consulta']").focus();
      return;
    }

    $("#alertaConsultas-horario").hide();

    ////

    if(!$("input[name='medico-consulta']").val())
    {
      $("#alertaConsultas-medico").slideDown();
      $("input[name='medico-consulta']").val("");
      $("input[name='medico-consulta']").focus();
      return;
    }

    $("#alertaConsultas-medico").hide();

    $("#grupo-consultas").hide();
    $("#grupo-info-gestacao").show();

  });


});
