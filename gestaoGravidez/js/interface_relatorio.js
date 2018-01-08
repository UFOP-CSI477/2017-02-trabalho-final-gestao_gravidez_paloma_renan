jQuery(document).ready(function($) {

  $("button[name='gestacao']").click(function(event) {
    $("#grupo-info-relatorio").hide();
    $("#grupo-posparto").hide();
    $("#grupo-gestacao").show();
  });

  $("button[name='posparto']").click(function(event) {
    $("#grupo-info-relatorio").hide();
    $("#grupo-gestacao").hide();
    $("#grupo-posparto").show();
  });

});
