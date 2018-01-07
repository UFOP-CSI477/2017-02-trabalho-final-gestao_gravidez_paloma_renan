jQuery(document).ready(function($) {

  function limparCampos(){
    $("form[name='consultas']")[0].reset();
    $("form[name='vacinas']")[0].reset();
    $("form[name='humor']")[0].reset();
    $("form[name='desejos']")[0].reset();
    $("form[name='album']")[0].reset();
    $("form[name='diario']")[0].reset();
  }

  $("button[name='consultas']").click(function(event) {
    limparCampos()
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-album").hide();
    $("#grupo-desejos").hide();
    $("#grupo-humor").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").show();
  });

  $("button[name='vacinas']").click(function(event) {
    limparCampos()
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-album").hide();
    $("#grupo-desejos").hide();
    $("#grupo-humor").hide();
    $("#grupo-consultas").hide();
    $("#grupo-vacinas").show();
  });

  $("button[name='humor']").click(function(event) {
    limparCampos()
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-album").hide();
    $("#grupo-desejos").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").hide();
    $("#grupo-humor").show();
  });

  $("button[name='desejos']").click(function(event) {
    limparCampos()
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-album").hide();
    $("#grupo-humor").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").hide();
    $("#grupo-desejos").show();
  });

  $("button[name='albuns']").click(function(event) {
    limparCampos()
    $("#grupo-info-gestacao").hide();
    $("#grupo-diario").hide();
    $("#grupo-desejos").hide();
    $("#grupo-humor").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").hide();
    $("#grupo-album").show();
  });

  $("button[name='diario']").click(function(event) {
    limparCampos() 
    $("#grupo-info-gestacao").hide();
    $("#grupo-album").hide();
    $("#grupo-desejos").hide();
    $("#grupo-humor").hide();
    $("#grupo-vacinas").hide();
    $("#grupo-consultas").hide();
    $("#grupo-diario").show();
  }); // fim controle de interface do menu

  /* [Erros - Consultas] */

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

  /*[Erros - Vacinas]*/

  $("button[name='cadastrar-vacina']").click(function(event) {

    if(!$("input[name='data-vacina']").val())
    {
      $("#alertaVacinas-data").slideDown();
      $("input[name='data-vacina']").val("");
      $("input[name='data-vacina']").focus();
      return;
    }

    $("#alertaVacinas-data").hide();

    ////

    if(!$("input[name='horario-vacina']").val())
    {
      $("#alertaVacinas-horario").slideDown();
      $("input[name='horario-vacina']").val("");
      $("input[name='horario-vacina']").focus();
      return;
    }

    $("#alertaVacinas-horario").hide();

    ////

    if(!$("input[name='nome-vacina']").val())
    {
      $("#alertaVacinas-nome").slideDown();
      $("input[name='nome-vacina']").focus();
      $("input[name='nome-vacina']").val("");
      return;
    }

    $("#alertaVacinas-nome").hide();

    ////

    $("#alertaVacinas-medico").hide();

    $("#grupo-vacinas").hide();
    $("#grupo-info-gestacao").show();

  });

  /* [Erros - Humor] */

  $("button[name='cadastrar-humor']").click(function(event) {

    if(!$("input[name='data-humor']").val())
    {
      $("#alertaHumor-data").slideDown();
      $("input[name='data-humor']").val("");
      $("input[name='data-humor']").focus();
      return;
    }

    $("#alertaHumor-data").hide();

    ////

    if(!$("input[name='radio']:checked").val())
    {
      $("#alertaHumor-sentimento").slideDown();
      return;
    }

    $("#alertaHumor-sentimento").hide();

    ////

    $("#grupo-humor").hide();
    $("#grupo-info-gestacao").show();

  });

    /* [Erros - Desejos] */

  $("button[name='cadastrar-desejo']").click(function(event) {

    if(!$("input[name='data-desejo']").val())
    {
      $("#alertaDesejos-data").slideDown();
      $("input[name='data-desejo']").val("");
      $("input[name='data-desejo']").focus();
      return;
    }

    $("#alertaDesejos-data").hide();

    ////

    if(!$("textarea[name='descricao-desejo']").val())
    {
      $("#alertaDesejos-descricao").slideDown();
      $("input[name='descricao-desejo']").val("");
      $("input[name='descricao-desejo']").focus();
      return;
    }

    $("#alertaDesejos-descricao").hide();

    ////

    $("#grupo-desejos").hide();
    $("#grupo-info-gestacao").show();

  });

  /* [Erros - Album] */

$("button[name='cadastrar-album']").click(function(event) {

  if(!$("input[name='data-album']").val())
  {
    $("#alertaAlbum-data").slideDown();
    $("input[name='data-album']").val("");
    $("input[name='data-album']").focus();
    return;
  }

  $("#alertaAlbum-data").hide();

  ////

  if(!$("input[name='arquivo-album']").val())
  {
    $("#alertaAlbum-arquivo").slideDown();
    $("input[name='arquivo-album']").val("");
    $("input[name='arquivo-album']").focus();
    return;
  }

  $("#alertaAlbum-arquivo").hide();

  ////

  $("#grupo-album").hide();
  $("#grupo-info-gestacao").show();

});

  /* [Erros - Diario] */

$("button[name='cadastrar-diario']").click(function(event) {

  if(!$("input[name='data-diario']").val())
  {
    $("#alertaDiario-data").slideDown();
    $("input[name='data-diario']").val("");
    $("input[name='data-diario']").focus();
    return;
  }

  $("#alertaDiario-data").hide();

  ////

  if(!$("input[name='peso-diario']").val() || isNaN($("input[name='peso-diario']").val()))
  {
    $("#alertaDiario-peso").slideDown();
    $("input[name='peso-diario']").val("");
    $("input[name='peso-diario']").focus();
    return;
  }

  $("#alertaDiario-peso").hide();

  ////

  if(!$("input[name='altura-diario']").val() || isNaN($("input[name='altura-diario']").val()))
  {
    $("#alertaDiario-altura").slideDown();
    $("input[name='altura-diario']").val("");
    $("input[name='altura-diario']").focus();
    return;
  }

  $("#alertaDiario-altura").hide();

  ////

  $("#grupo-diario").hide();
  $("#grupo-info-gestacao").show();

});












});
