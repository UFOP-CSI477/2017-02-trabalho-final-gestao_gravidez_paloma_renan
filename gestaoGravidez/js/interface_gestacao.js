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
  });


});
