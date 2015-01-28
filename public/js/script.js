(function () {
    // ie10 and windows phone viewport support
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
            document.createTextNode(
            '@-ms-viewport{width:auto!important}'
        )
    )
        document.querySelector('head').appendChild(msViewportStyle);
    }
        
    // android stock browser css support
    $(function () {
        var nua = navigator.userAgent
        var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 &&      nua.indexOf('Chrome') === -1)
        if (isAndroid) {
            $('select.form-control').removeClass('form-control').css('width', '100%');
        }
    });
    
    // fastclick
    window.addEventListener('load', function () {
        new FastClick(document.body);
    }, false);
	
	// fittext
	$("#fittext1").fitText(1.1, { minFontSize: '16px', maxFontSize: '36px' });
	$("#fittext2").fitText(1.1, { minFontSize: '16px', maxFontSize: '36px' });
	
    //Slider
    $('#banner').carousel();
    $('#added-item').carousel({interval: false});
    
    
}());