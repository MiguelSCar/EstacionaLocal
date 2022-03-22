$(function () {
	/*** modal **/
	$("a[rel=modal]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");                 
         tela(id);	
		
    });
 
    $("#fundo_preto").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#fundo_preto").hide();
        $(".window").hide();
    });
	
	/*** fim modal 	**/ 

});	

function abrirModal(id){
    var alturaTela = $(document).height();
    var larguraTela = $(window).width();

    //colocando o fundo preto
    $('#fundo_preto').css({'width':larguraTela,'height':alturaTela});
    $('#fundo_preto').fadeIn(1000);	
    $('#fundo_preto').fadeTo("slow",0.8);

    var left = ($(window).width() /2) - ( $(id).width() / 2 );
    var top = ($(window).height() / 2) - ( $(id).height() / 2 );

    $(id).css({'top':top,'left':left});
    $(id).show();
	$(window).scrollTop(0) ;
}

function fecharModal(){
	//inicio();	
	$("#fundo_preto").hide();
    $(".window").hide();
}

