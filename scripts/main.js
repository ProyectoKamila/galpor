$(document).ready(function() {
    console.log('el documento está preparado');
  $('#switch-head').click(function () {
    var elemento = document.getElementById('header-principal');
    var status = elemento.getAttribute("data-status");
    console.log(status);
    if(status === 'close'){
    	$('#header-principal').animate(
                {
                    height: ["70px", "swing"]
                },700); 
    	$('#switch-head').animate(
                {
                    top: ["70px", "swing"]
                },300); 
    	$('.cover').animate(
                {
                    top: ["70px", "swing"]
                },800); 
    	$('#switch-head').addClass('tab-rotate');
    	$('#header-principal').attr('data-status','open');
    }else if(status === 'open'){
		$('#header-principal').animate(
                {
                    height: ["0px", "swing"]
                },400); 
    	$('#switch-head').animate(
                {
                    top: ["0px", "swing"]
                },400);
                $('.cover').animate(
                {
                    top: ["0px", "swing"]
                },300); 
    	$('#switch-head').removeClass('tab-rotate');
    	$('#header-principal').attr('data-status','close');
    }
});
});

