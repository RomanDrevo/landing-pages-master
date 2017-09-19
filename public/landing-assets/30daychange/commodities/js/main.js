var ticker;

$(function() {
	var csrf_token = $('#csrf_token').data('value');
    var current_locale = $('#locale').data('value');

    // ToolTips
    $('.hasTooltip').tooltip();


    /* * * * * * * * * * * *
     * * * * * * * * * * * *
     * * * * TICKER  * * * *
     * * * * * * * * * * * *
     * * * * * * * * * * * */

    if($('.ticker').length > 0 ){
        if($('.ticker').css('display') != 'none'){

            tickerLoader(100);

        }
    }

    if($('#spotb').length > 0){

        spotCountdown(getCookie('spots_av',17),100);

    }


    /* * * * * * * * * * * *
     * * * * * * * * * * * *
     * * * SUBSCRIBE * * * *
     * * * * * * * * * * * *
     * * * * * * * * * * * */


    $('.subscribe-form').on('submit','form',function(event){
        var form = $(this),
            emailInput = $(this).find('input[name="email"]'),
            nameInput = $(this).find('input[name="name"]'),
            error_text;
        if(nameInput.val() == '') {
            error_text = 'Please, enter your Name.';
            if(current_locale == 'es'){
                error_text = 'Por favor, ingresa tu nombre';
            }
            if ($(this).find('.help-block.for-fname').length == 0){
                nameInput.after('<div class="help-block for-fname">'+error_text+'</div>');
            }else{
                alert(error_text);
            }
            event.preventDefault();
            return false;
        }
        if(emailInput.val() == '') {
            error_text = 'Please, specify your Primary Email Address.';
            if(current_locale == 'es'){
                error_text = 'Por favor, especifica tu Correo Electrónico Principal';
            }
            if ($(this).find('.help-block.for-email').length == 0){
                emailInput.after('<div class="help-block for-email">'+error_text+'</div>');
            }else{
                alert(error_text);
            }
            event.preventDefault();
            return false;
        }


        if($(this).hasClass('ar')){
            event.preventDefault();
            $.ajax({
                url: 'http://ymlp.com/subscribe.php?id=ghwmhwegmguq',
                //type: 'GET',
                dataType: 'jsonp',
                data: {
                    'YMP0': emailInput.val(),
                    'YMP1': nameInput.val()
                },
                success: function(){

                },
                error: function(){
                    console.log('Subscribe Ajax Error!');
                },
                complete: function(){
                    $('.subscribe-form').off('submit','form');
                    form.submit();
                }
            });

        }


    });




    /* * * * * * * * * * * *
     * * * * * * * * * * * *
     * * * * SIGN UP * * * *
     * * * * * * * * * * * *
     * * * * * * * * * * * */


	$('.signup-form').on('submit','form',function(event){
		var emailInput = $(this).find('input[name="email"]'),
			passwordInput = $(this).find('input[name="password"]'),
            fnameInput = $(this).find('input[name="FirstName"]'),
            lnameInput = $(this).find('input[name="LastName"]'),
			phoneInput = $(this).find('input[name="Phone"]'),
			countrySelect = $(this).find('select[name="Country"]'),
            error_text;

		if(emailInput.val() == '') {
            error_text = 'Please, specify your Primary Email Address';
            if(current_locale == 'es'){
                error_text = 'Por favor, especifica tu Correo Electrónico Principal';
            }
            event.preventDefault();
			if ($(this).find('.help-block.for-email').length == 0){
				emailInput.after('<div class="help-block for-email">'+error_text+'</div>');
			}else{
				alert(error_text);
			}
		}

		if(passwordInput.val() == '' || passwordInput.val().length < 6) {
            error_text = 'Minimum password length is 6 characters';
            if(current_locale == 'es'){
                error_text = 'Al menos 6 caracteres de contraseña';
            }
			event.preventDefault();
			if ($(this).find('.help-block.for-password').length == 0){
				passwordInput.after('<div class="help-block for-password">'+error_text+'</div>');
			}else{
				alert(error_text);
			}
		}

		if(phoneInput.val() == '') {
            error_text = 'Please, enter your valid phone number. This is required for broker\'s account verification only.';
            if(current_locale == 'es'){
                error_text = 'Por favor, ingresa tu número telefónico válido. Este es requerido sólo para la verificación de la cuenta de tu broker';
            }
			event.preventDefault();
			if ($(this).find('.help-block.for-phone').length == 0){
				phoneInput.after('<div class="help-block for-phone">'+error_text+'</div>');
			}else{
				alert(error_text);
			}
		}

        if(fnameInput.val() == '') {
            error_text = 'Please, enter your First Name.';
            if(current_locale == 'es'){
                error_text = 'Por favor, ingresa tu Nombre';
            }
            event.preventDefault();
            if ($(this).find('.help-block.for-fname').length == 0){
                fnameInput.after('<div class="help-block for-fname">'+error_text+'</div>');
            }else{
                alert(error_text);
            }
        }

        if(lnameInput.val() == '') {
            error_text = 'Please, enter your Last Name.';
            if(current_locale == 'es'){
                error_text = 'Por favor, ingresa tu Apellido';
            }
            event.preventDefault();
            if ($(this).find('.help-block.for-lname').length == 0){
                lnameInput.after('<div class="help-block for-lname">'+error_text+'</div>');
            }else{
                alert(error_text);
            }
        }

        if(countrySelect.find(':selected').val() == ''){
            error_text = 'Please, select your Country of residense';
			event.preventDefault();
			if ($(this).find('.help-block.for-country').length == 0){
				countrySelect.after('<div class="help-block for-country text-center">'+error_text+'</div>');
			}else{
				alert(error_text);
			}
		}


	});


    /* * * * * * * * * * * *
     * * * * * * * * * * * *
     * * * * RESULTS * * * *
     * * * * * * * * * * * *
     * * * * * * * * * * * */

    /*$('.results-links').on('click','.video-thumbnail',function(event){
        event.preventDefault();
        var video_id = $(this).data('video');
        $('.videoWrapper > iframe').attr('src','//www.youtube.com/embed/'+video_id+'?rel=0&controls=0&autoplay=1&showinfo=0');
    });*/




});


function tickerLoader(num){

    var token = $('#token').data('token');
    var current_locale = $('#locale').data('value');

    /*$.ajax({
        url: '/api/ticker/'+num,
        type: 'POST',
        dataType: 'json',
        data: 'csrf_token='+token,
        success: function(result){
            if(result){
                ticker = result;
            }else{
                alert('Some error occured! Please reload this page.');
            }
        },
        error: function(){
            //alert('Service currently unavailable, please log out and then try to sign in after 5 minutes or contact our customer support and report the problem!');
        }

    }).done(function(){*/

    /*});*/

    var result,
        names;

    names = ['Bruce Tucker','Felicia Fletcher','Josephine May','Benjamin Bell','Mathew Perry','Madison Neal','Beverly Andrews','Mia Arnold','Mitchell Hopkins','Martin Ellis','Jose Morris','Herminia Jacobs','Stanley Reynolds','Heather Carter','Corey Garcia','Gavin Jennings','Justin Mckinney','Audrey Bishop','Rodney Hunt','Mary Watson','Duane Palmer','Willard Rhodes','Michelle Reid','Edna Jenkins','Vernon Johnston','Alan Ward','Kylie Steward','Mary Cunningham','Darlene Rivera','Ivan Thompson','Clinton Rogers','Alan Hale','Terry Moreno','Christy Bowman','Jimmie Lee','Jessie Washington','Arron Chambers','Riley Little','Claude Grant','Riley Simmmons','Vernon Palmer','Becky Douglas','Sergio Ruiz','Wallace Castillo','Peyton Foster','Ted Lambert','Diana Morrison','Lois Wagner','Cherly Webb','Lonnie Herrera','Jackie Fowler','Donald Soto','Joe Williams','Brent Allen','Earl Hoffman','Bryan Davidson','Guy Gomez','Steve Gutierrez','Lois Harper','Jamie Pierce','David Rice','Ramona Gutierrez','Lucas Hale','Debbie Morrison','Deann Griffin','Heather Wilson','Hailey Welch','Julia Mitchelle','Jessie Jennings','Lydia Griffin','Tanya Austin','Matthew Burke','Charles Frazier','Alexa Carr','Mildred Bishop','Caroline Hughes','Mike Sanchez','Leonard Schmidt','Lonnie Owens','Kathy Mccoy','Alan Hernandez'/*,'Clarence Mills','Jennie Black','Pamela Bell','Ramon Medina','Fred Stone','Holly Burke','Bruce Mills','Max Austin','Janice West','Ruby Castro','Enrique Dixon','David Holland','Arthur Wood','Stacey Gomez','Justin Morales','Leroy Daniels','Flenn Barnett','Kelly Cunningham','Mae West','Kathy Williams','Charles Hunt','Stephanie Carlson','Johnny James','Jack Soto','Janice Burke','Lillian Spencer','Joyce Phillips','Jeremiah Woods','Alicia Gregory','Carter Howard','Eli Burns','Tamara Ramirez','Emma Russell','Pedro Ramos','Denise Black','Leslie George','Jackson Turner','Clarence Dixon','Eugene Hoffman','Sandra Johnston','Courtney Nichols','Jessie Howell','Francisco Jordan','Carter Armstrong','Jorge Porter','Chris Hansen','Tamara Jacobs','Harry Anderson','Cory Watson','Howard Newman','Clarence Freeman','Harper Patterson','Dustin Gibson','Chloe Herrera','Alexander Thompson','Dan Weaver','Stanley Craig','Julia Lee','Milton Johnston','Sherry Fowler','Raul Day','Darren Sims','Aiden Taylor','Wyatt Woods','Clarence Bell','Arthur Watkins','Lucille Dixon','Marc Foster','Clinton Mitchell','Sherri Mcdonalid','Aubrey Arnold','Tonya Taylor','Caleb Dunn','Cecil Berry','Lesa Robertson','Eli Mendoza','Larry Webb','Joan Garcia','Keith Anderson','Darlene Ortiz','Irma Garrett','Arthur Reid','Kristen Stone','Cory Jenkins','Sue Reyes','Jayden Snyder','Carl Snyder','Jonathan Barnes','Brandie Nguyen','Pedro Gibson','Sherri Mcdonalid','Aaron Dixon','Willard Owens','Lois Garrett','Roberta Dean','Derek Gregory','Alberto Hudson','Aubrey Coleman','Scott Mitchell','Karl Williams','Tina Armstrong','Myrtle Cruz','Gertrude Butler','Jeff Chavez','Albert Warren','Beatrice Rivera','Francisco Robertson','Walter Sanchez','Paul Perry','Ramona Watts','Marsha Mcdonalid','Max Jacobs','Eric Patterson','Scarlett Carroll','Rodney Flores','Peter Duncan','Jayden Stephens','Cassandra Nguyen','Ian Burke'*/];

    if(current_locale == 'es'){
        names = ['Moisés Jiménez','Arturo Rico','Gonzalo Mora','Edgar Carbonero','Jesús Cedeño','Alberto García','Leonel Martínez','Luis Silva','Fernando Rodríguez','Osvaldo Gómez','Federico Sánchez','Francisco Ordoñez','Gustavo Jurado','Daniel González','Mario Fernández','Santiago Torres','Miguel Benítez','Sebastián Jurado','David Flores','Samuel Ascázubi','Julieta Pérez','Camila lara','Valeria Quispe','Mariana Rojas','Samantha Muñoz','Sofía López','Valentina Salazar','Lucía Calvete','Catalina Reyes','Violeta Laguna','Victoria Manzueta','Martina Páez','Jimena Alvítez','Sandra Valero','Claudia Bárcena','Rosa Calderón','Martha Quintero','Paola Rivera','Alejandra Soto','María Arias'];
    }

    result = shuffle(names);

    /*for(i=0;i<names.length;i++){
        result.push(names[array_rand(names,1)]);
    }*/

    ticker = result;

    tickerUpdate();
    tickerUpdate2();

}


function tickerUpdate(){

    var header = $('.ticker1 .header');
    var current_locale = $('#locale').data('value');

    var profits_text, latest_text;
    profits_text = '24h Profits:';
    latest_text = 'Latest WIN:';
    if(current_locale == 'es'){
        profits_text = 'Ganancia en 24h:';
        latest_text = 'Última GANADA:';
    }

    // select element
    var item = ticker[getRandomInt(0,ticker.length-1)],
        h24 = Math.round(getRandomInt(15000,100000)/100,2),
        win = Math.round(getRandomInt(1775,8100)/100,2),
        curr_num = getRandomInt(1,10),
        curr = '$';

    var items = $('.ticker1-item'),
        n = 0;

    if(curr_num >= 6 && curr_num <= 9){
        curr = '€';
    }
    if(curr_num == 10){
        curr = '£';
    }

    if(current_locale == 'es'){
        curr = '$';
    }

    // We remove the strings which are the oldest
    items.each(function(){
        n++;
        if(n > 6 ){
            $(this).remove();
        }
    });

    var newhtml = '<div class="ticker-item ticker1-item">'+item+'<br><strong>'+profits_text+' '+curr+h24+'</strong><br>'+latest_text+' '+curr+win+'</div>';

    header.after(newhtml);


    setTimeout(function(){ tickerUpdate() },getRandomInt(3000,12000));

}

function tickerUpdate2(){

    var header = $('.ticker2 .header');
    var current_locale = $('#locale').data('value');

    var profits_text, latest_text;
    profits_text = '24h Profits:';
    latest_text = 'Latest WIN:';
    if(current_locale == 'es'){
        profits_text = 'Ganancia en 24h:';
        latest_text = 'Última GANADA:';
    }

    // select element
    var item = ticker[Math.floor(Math.random()*ticker.length)],
        h24 = Math.round(getRandomInt(15000,100000)/100,2),
        win = Math.round(getRandomInt(1775,8100)/100,2),
        curr_num = getRandomInt(1,10),
        curr = '$';

    var items = $('.ticker2-item'),
        n = 0;

    if(curr_num >= 6 && curr_num <= 9){
        curr = '€';
    }
    if(curr_num == 10){
        curr = '£';
    }

    if(current_locale == 'es'){
        curr = '$';
    }

    // We remove the strings which are the oldest
    items.each(function(){
        n++;
        if(n > 6 ){
            $(this).remove();
        }
    });

    var newhtml = '<div class="ticker-item ticker2-item">'+item+'<br><strong>'+profits_text+' '+curr+h24+'</strong><br>'+latest_text+' '+curr+win+'</div>';

    header.after(newhtml);


    setTimeout(function(){ tickerUpdate2() },getRandomInt(3000,12000));

}


function spotCountdown(av_num,total_num){
    var taken_cont = $('#spots_taken'),
        available_cont = $('#spots_available'),
        domain = window.location.host;

    if(av_num > 3){
        var av = av_num - 1;
        var tk = total_num - av;

        taken_cont.html(tk);
        available_cont.html(av);

        setCookie('spots_av',av,{
            expires: 3600*24*30,
            path: '/',
            domain: '.'+domain
        });

        var pause = Math.round(170/av)*1000;


        setTimeout(function(){ spotCountdown(av,total_num) },pause);
    }else{
        taken_cont.html(total_num - av_num);
        available_cont.html(av_num);
    }

}

function actionOnVideo(id,state) {
    // if state == 'pause', pause. Else: play video
    var iframe = document.getElementById(id).contentWindow;
    var func = state == 'pause' ? 'pauseVideo' : 'playVideo';
    iframe.postMessage('{"event":"command","func":"' + func + '","args":""}','*');
    return true;
}


function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex ;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

function array_rand(input, num_req) {
    //  discuss at: http://phpjs.org/functions/array_rand/
    // original by: Waldo Malqui Silva
    //   example 1: array_rand( ['Kevin'], 1 );
    //   returns 1: 0

    var indexes = [];
    var ticks = num_req || 1;
    var checkDuplicate = function(input, value) {
        var exist = false,
            index = 0,
            il = input.length;
        while (index < il) {
            if (input[index] === value) {
                exist = true;
                break;
            }
            index++;
        }
        return exist;
    };

    if (Object.prototype.toString.call(input) === '[object Array]' && ticks <= input.length) {
        while (true) {
            var rand = Math.floor((Math.random() * input.length));
            if (indexes.length === ticks) {
                break;
            }
            if (!checkDuplicate(indexes, rand)) {
                indexes.push(rand);
            }
        }
    } else {
        indexes = null;
    }

    return ((ticks == 1) ? indexes.join() : indexes);
}