$(document).ready(function() {

    $('body').on('click', '.form-submit',
        function(){
            $(this).parents('form').submit();
            return false;
        }
    );

    $('.form-trigger').submit(
        function(){
            if(!(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i.test($(this).find('input[name="email"]').val()))){
                alert('Please enter a valid email');
                $(this).find('input[name="email"]').focus();
                return false;
            }
            else{
                if(onsubmitfix){
                    yesyoucan = 0;
                    onsubmitfix = 0;
                }
                else return false;
            }
        }
    );


    if ($('input[type="radio"]:checked').length) {
        $('input[type="radio"]:checked').parent("label").addClass('checked');
    }
    if ($('input[type="checkbox"]:checked').length) {
        $('input[type="checkbox"]:checked').parent("label").addClass('checked');
    }

    $('label input[type="radio"]').change(
        function(){
            var el = $(this);

            radioRender(el);
        }
    );
    $('label input[type="checkbox"]').change(
        function(){
            var el = $(this);
            var parent = el.parent('label');
            parent.toggleClass('checked');
        }
    );

    $('.to_top_button').click(function(){
        $('body, html').animate({scrollTop:0}, 300);
        return false;
    });

    $('.jv_nav li a').click(function(){
        var target = $($(this).attr('href')).offset().top-30;
        $('body, html').animate({scrollTop:target}, 300);
        return false;
    });

    $('.tabs_nav li a').click(function(){

        var el = $(this),
            parent = el.parent('li'),
            cont = el.parents('.tabs_wrapper'),
            target = $(el.attr('href'));

        cont.find('.tabs_nav li').removeClass('active');
        parent.addClass('active');
        cont.find('.tab_item').hide();
        target.show();

        return false;
    });

    $('.faq_list li .question').click(
        function (){
            var el = $(this);
            var parent = el.parent('li');

            var target = parent.find('.answer');

            parent.toggleClass('open');
            target.slideToggle('fast');

            return false;
        }
    );

    $(window).trigger('resize');
    $(window).trigger('scroll');

});

$(window).load(function() {
});
$(window).resize(function() {
    scaleTitles();
});
$(window).scroll( function(){
    if ($(window).scrollTop() > 0) {
        $('.to_top_button').fadeIn(300);
    } else {
        $('.to_top_button').fadeOut(300);
    }

    regWidgetCalc();

});


function regWidgetCalc() {
    var posTrigger = $('#regForm');

    if (posTrigger.length){
        var win = $(window),
            winPos = win.scrollTop(),
            startOffset = posTrigger.offset().top + posTrigger.height(),
            winW = win.width(),
            target = $('#widget');

        if (winPos > startOffset) {
            if (winW > 960) {
                //target.slideDown(300);
                target.addClass('shown');
            } else {
                target.hide();
            }
        } else {
            if (winW > 960) {
                target.removeClass('shown');
            } else {
                target.hide();
            }
        }
    }
}

function scaleTitles(){

    $('.trim_spaces').each(
        function(){
            var el = $(this);
            var target = el.find('.scalable');

            var ratio = 1;

            if (target.width() > el.width()){
                ratio = el.width()/target.width();
            }

            target.css('transform', 'scale('+ratio+')');
            el.height(target.height()*ratio);

        }
    );
}

function radioRender(el) {
    var parent = el.parent('label'),
        els = $('input[name="' + el.attr('name') + '"]');

    els.parent('label').removeClass('checked');
    els.prop('checked', false);

    parent.toggleClass('checked');
}
