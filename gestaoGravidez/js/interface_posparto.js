jQuery(document).ready(function($) {

  function limparCampos(){
    $("form[name='ficha']")[0].reset();
    $("form[name='alimentacao']")[0].reset();
    $("form[name='banho']")[0].reset();
    $("form[name='itens']")[0].reset();
    $("form[name='sono']")[0].reset();
    $("form[name='consulta']")[0].reset();
    $("form[name='vacina']")[0].reset();
    $("form[name='album']")[0].reset();
  }

  $("button[name='ficha']").click(function(event) {
    limparCampos();
    $("#grupo-info-posparto").hide();
    $("#grupo-alimentacao").hide();
    $("#grupo-banho").hide();
    $("#grupo-itens").hide();
    $("#grupo-sono").hide();
    $("#grupo-consulta").hide();
    $("#grupo-vacina").hide();
    $("#grupo-album").hide();
    $("#grupo-ficha").show();
  });

  $("button[name='alimentacao']").click(function(event) {
    limparCampos();
    $("#grupo-ficha").hide();
    $("#grupo-info-posparto").hide();
    $("#grupo-banho").hide();
    $("#grupo-itens").hide();
    $("#grupo-sono").hide();
    $("#grupo-consulta").hide();
    $("#grupo-vacina").hide();
    $("#grupo-album").hide();
    $("#grupo-alimentacao").show();
  });

  $("button[name='banho']").click(function(event) {
    limparCampos();
    $("#grupo-ficha").hide();
    $("#grupo-info-posparto").hide();
    $("#grupo-alimentacao").hide();
    $("#grupo-itens").hide();
    $("#grupo-sono").hide();
    $("#grupo-consulta").hide();
    $("#grupo-vacina").hide();
    $("#grupo-album").hide();
    $("#grupo-banho").show();
  });

  $("button[name='itens']").click(function(event) {
    limparCampos();
    $("#grupo-ficha").hide();
    $("#grupo-info-posparto").hide();
    $("#grupo-alimentacao").hide();
    $("#grupo-banho").hide();
    $("#grupo-sono").hide();
    $("#grupo-consulta").hide();
    $("#grupo-vacina").hide();
    $("#grupo-album").hide();
    $("#grupo-itens").show();
  });

  $("button[name='sono']").click(function(event) {
    limparCampos();
    $("#grupo-ficha").hide();
    $("#grupo-info-posparto").hide();
    $("#grupo-alimentacao").hide();
    $("#grupo-banho").hide();
    $("#grupo-itens").hide();
    $("#grupo-consulta").hide();
    $("#grupo-vacina").hide();
    $("#grupo-album").hide();
    $("#grupo-sono").show();
  });

  $("button[name='consultas']").click(function(event) {
    limparCampos();
    $("#grupo-ficha").hide();
    $("#grupo-info-posparto").hide();
    $("#grupo-alimentacao").hide();
    $("#grupo-banho").hide();
    $("#grupo-itens").hide();
    $("#grupo-sono").hide();
    $("#grupo-vacina").hide();
    $("#grupo-album").hide();
    $("#grupo-consulta").show();
  });

  $("button[name='vacinas']").click(function(event) {
    limparCampos();
    $("#grupo-ficha").hide();
    $("#grupo-info-posparto").hide();
    $("#grupo-alimentacao").hide();
    $("#grupo-banho").hide();
    $("#grupo-itens").hide();
    $("#grupo-sono").hide();
    $("#grupo-consulta").hide();
    $("#grupo-album").hide();
    $("#grupo-vacina").show();
  });

  $("button[name='album']").click(function(event) {
    limparCampos();
    $("#grupo-ficha").hide();
    $("#grupo-info-posparto").hide();
    $("#grupo-alimentacao").hide();
    $("#grupo-banho").hide();
    $("#grupo-itens").hide();
    $("#grupo-sono").hide();
    $("#grupo-consulta").hide();
    $("#grupo-vacina").hide();
    $("#grupo-album").show();
  }); // fim controle de interface do menu

    /* [Erros - Ficha] */

    $("button[name='cadastrar-ficha']").click(function(event) {

      if(!$("input[name='nome-ficha']").val())
      {
        $("#alertaFicha-nome").slideDown();
        $("input[name='nome-ficha']").val("");
        $("input[name='nome-ficha']").focus();
        return;
      }

      $("#alertaFicha-nome").hide();

      /////

      if(!$("input[name='data-ficha']").val())
      {
        $("#alertaFicha-data").slideDown();
        $("input[name='data-ficha']").val("");
        $("input[name='data-ficha']").focus();
        return;
      }

      $("#alertaFicha-data").hide();

      /////

      if(!$("input[name='horario-ficha']").val())
      {
        $("#alertaFicha-horario").slideDown();
        $("input[name='horario-ficha']").val("");
        $("input[name='horario-ficha']").focus();
        return;
      }

      $("#alertaFicha-horario").hide();

      /////

      if(!$("input[name='local-ficha']").val())
      {
        $("#alertaFicha-local").slideDown();
        $("input[name='local-ficha']").val("");
        $("input[name='local-ficha']").focus();
        return;
      }

      $("#alertaFicha-local").hide();

      /////

      if(!$("input[name='hospital-ficha']").val())
      {
        $("#alertaFicha-hospital").slideDown();
        $("input[name='hospital-ficha']").val("");
        $("input[name='hospital-ficha']").focus();
        return;
      }

      $("#alertaFicha-hospital").hide();

      /////

      if(!$("input[name='mae-ficha']").val())
      {
        $("#alertaFicha-mae").slideDown();
        $("input[name='mae-ficha']").val("");
        $("input[name='mae-ficha']").focus();
        return;
      }

      $("#alertaFicha-mae").hide();

      /////

      if(!$("input[name='medico-ficha']").val())
      {
        $("#alertaFicha-medico").slideDown();
        $("input[name='medico-ficha']").val("");
        $("input[name='medico-ficha']").focus();
        return;
      }

      $("#alertaFicha-medico").hide();

      /* ~~~~ */

      $("#grupo-ficha").hide();
      $("#grupo-info-posparto").show();

    });

    /* [Erros - Alimentacao] */

    $("button[name='cadastrar-alimentacao']").click(function(event) {

      if(!$("input[name='data-alimentacao']").val())
      {
        $("#alertaAlimentacao-data").slideDown();
        $("input[name='data-alimentacao']").val("");
        $("input[name='data-alimentacao']").focus();
        return;
      }

      $("#alertaAlimentacao-data").hide();

      /////

      if(!$("input[name='horario-alimentacao']").val())
      {
        $("#alertaAlimentacao-horario").slideDown();
        $("input[name='horario-alimentacao']").val("");
        $("input[name='horario-alimentacao']").focus();
        return;
      }

      $("#alertaAlimentacao-horario").hide();

      //////

      if(!$("textarea[name='cardapio-alimentacao']").val())
      {
        $("#alertaAlimentacao-cardapio").slideDown();
        $("textarea[name='cardapio-alimentacao']").val("");
        $("textarea[name='cardapio-alimentacao']").focus();
        return;
      }

      $("#alertaAlimentacao-cardapio").hide();

      /* ~~~~ */

      $("#grupo-alimentacao").hide();
      $("#grupo-info-posparto").show();

    });

    /* [Erros - Banho] */

    $("button[name='cadastrar-banho']").click(function(event) {

      if(!$("input[name='data-banho']").val())
      {
        $("#alertaBanho-data").slideDown();
        $("input[name='data-banho']").val("");
        $("input[name='data-banho']").focus();
        return;
      }

      $("#alertaBanho-data").hide();

      /////

      if(!$("input[name='horario-banho']").val())
      {
        $("#alertaBanho-horario").slideDown();
        $("input[name='horario-banho']").val("");
        $("input[name='horario-banho']").focus();
        return;
      }

      $("#alertaBanho-horario").hide();

      /* ~~~~ */

      $("#grupo-banho").hide();
      $("#grupo-info-posparto").show();

    });

    /* [Erros - Itens] */

    $("button[name='cadastrar-itens']").click(function(event) {

      if(!$("input[name='data-itens']").val())
      {
        $("#alertaItens-data").slideDown();
        $("input[name='data-itens']").val("");
        $("input[name='data-itens']").focus();
        return;
      }

      $("#alertaItens-data").hide();

      //////

      if(!$("input[name='nome-itens']").val())
      {
        $("#alertaItens-nome").slideDown();
        $("input[name='nome-itens']").val("");
        $("input[name='nome-itens']").focus();
        return;
      }

      $("#alertaItens-nome").hide();

      //////

      if(!$("input[name='nome-itens']").val())
      {
        $("#alertaItens-nome").slideDown();
        $("input[name='nome-itens']").val("");
        $("input[name='nome-itens']").focus();
        return;
      }

      $("#alertaItens-nome").hide();

      //////

      if(!$("input[name='quantidade-itens']").val() || isNaN($("input[name='quantidade-itens']").val()))
      {
        $("#alertaItens-quantidade").slideDown();
        $("input[name='quantidade-itens']").val("");
        $("input[name='quantidade-itens']").focus();
        return;
      }

      $("#alertaItens-quantidade").hide();

      //////

      if(!$("input[name='preco-itens']").val() || isNaN($("input[name='preco-itens']").val()))
      {
        $("#alertaItens-preco").slideDown();
        $("input[name='preco-itens']").val("");
        $("input[name='preco-itens']").focus();
        return;
      }

      $("#alertaItens-preco").hide();

      /* ~~~~ */

      $("#grupo-itens").hide();
      $("#grupo-info-posparto").show();

    });

    /* [Erros - Sono] */

    $("button[name='cadastrar-sono']").click(function(event) {

      if(!$("input[name='data-sono']").val())
      {
        $("#alertaSono-data").slideDown();
        $("input[name='data-sono']").val("");
        $("input[name='data-sono']").focus();
        return;
      }

      $("#alertaSono-data").hide();

      /////

      if(!$("input[name='horario-sono']").val())
      {
        $("#alertaSono-horario").slideDown();
        $("input[name='horario-sono']").val("");
        $("input[name='horario-sono']").focus();
        return;
      }

      $("#alertaSono-horario").hide();

      /* ~~~~ */

      $("#grupo-sono").hide();
      $("#grupo-info-posparto").show();

    });

    /* [Erros - Consulta] */

    $("button[name='cadastrar-consulta']").click(function(event) {

      if(!$("input[name='data-consulta']").val())
      {
        $("#alertaConsulta-data").slideDown();
        $("input[name='data-consulta']").val("");
        $("input[name='data-consulta']").focus();
        return;
      }

      $("#alertaConsulta-data").hide();

      /////

      if(!$("input[name='horario-consulta']").val())
      {
        $("#alertaConsulta-horario").slideDown();
        $("input[name='horario-consulta']").val("");
        $("input[name='horario-consulta']").focus();
        return;
      }

      $("#alertaConsulta-horario").hide();

      /////

      if(!$("input[name='pediatra-consulta']").val())
      {
        $("#alertaConsulta-pediatra").slideDown();
        $("input[name='pediatra-consulta']").val("");
        $("input[name='pediatra-consulta']").focus();
        return;
      }

      $("#alertaConsulta-pediatra").hide();

      /* ~~~~ */

      $("#grupo-consulta").hide();
      $("#grupo-info-posparto").show();

    });

    /* [Erros - Vacina] */

    $("button[name='cadastrar-vacina']").click(function(event) {

      if(!$("input[name='data-vacina']").val())
      {
        $("#alertaVacina-data").slideDown();
        $("input[name='data-vacina']").val("");
        $("input[name='data-vacina']").focus();
        return;
      }

      $("#alertaVacina-data").hide();

      /////

     if(!$("input[name='horario-vacina']").val())
      {
      $("#alertaVacina-horario").slideDown();
      $("input[name='horario-vacina']").val("");
      $("input[name='horario-vacina']").focus();
      return;
      }

      $("#alertaVacina-horario").hide();

      /////

      if(!$("input[name='nome-vacina']").val())
      {
      $("#alertaVacina-nome").slideDown();
      $("input[name='nome-vacina']").val("");
      $("input[name='nome-vacina']").focus();
      return;
      }

      $("#alertaVacina-nome").hide();
      /* ~~~~ */

      $("#grupo-vacina").hide();
      $("#grupo-info-posparto").show();

    });

    /* [Erros - Álbum] */

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


      /* ~~~~ */

      $("#grupo-album").hide();
      $("#grupo-info-posparto").show();

    });














































});
