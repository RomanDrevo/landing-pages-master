<script type="text/javascript">
  $(document).ready(function () {
	$('select#country').val(country_name);
<!--remove placeholder when clicking the input-->	
   $(function()
	{  
      $('input').focusin(function()
      {
        input = $(this);
        input.data('place-holder-text', input.attr('placeholder'))
        input.attr('placeholder', '');
      });

      $('input').focusout(function()
      {
          input = $(this);
          input.attr('placeholder', input.data('place-holder-text'));
      });
	})

<!--      country list info     -->

<!--changed selected country by ip-->
$("select option").each(function(){
	var cc=$('#country_code').val();
  if ($(this).val() == cc){
    $(this).attr("selected","selected");
	var spot_number =  $( this ).attr('id');
	var prefix =  $( this).attr('spotCode');
	var iso3 =  $( this).attr('iso3');
	$('#prefix').val(prefix);
	$('#iso3').val(iso3);
	$('#country_num').val(spot_number);	
	}
});

<!-- update all fields when user change country select-->
   $('#country').on('change', function (e) {	  
	 var spot_number =  $( "select option:selected" ).attr('id');
	 var prefix =  $( "select option:selected" ).attr('spotCode');
	 var iso3 =  $( "select option:selected" ).attr('iso3');
     var country_name  = this.selectedOptions[0].text;    
     var  country_code= this.value;	
	 
	 $('#prefix').val(prefix);	
	 $('#iso3').val(iso3);	
	 $('#country_name').val(country_name);
	 $('#country_code').val(country_code);
	 $('#country_num').val(spot_number);
    
});

   
});

function getUrlParameter(sParam)
            {
                        var sPageURL = window.location.search.substring(1);
                        var sURLVariables = sPageURL.split('&');
                        for (var i = 0; i < sURLVariables.length; i++)
                        {
                                    var sParameterName = sURLVariables[i].split('=');
                                    if (sParameterName[0] == sParam)
                                    {
                                                return sParameterName[1];
                                    }
                        }
            } 
			
var a_aid = getUrlParameter('cmp');
var afp = getUrlParameter('afp');
var inf = getUrlParameter('inf');
var kws = getUrlParameter('kws');
var pls = getUrlParameter('pls');
var dvc = getUrlParameter('dvc');
var crt = getUrlParameter('crt');
var page_name = $('#page_name').val();

var other_parameter = getUrlParameter('oterparam');
var api_aff = '{"a_aid":"'+ a_aid +'", "serial":"'+ afp +"_"+ inf +"_"+ kws +"_"+ pls +"_"+ dvc +"_"+ crt +"_"+ page_name+'"}'; 
$('#landing').val(api_aff); 

</script>