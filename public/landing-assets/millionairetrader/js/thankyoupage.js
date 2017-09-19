$(function () {
    
    $('#thankyoupage').on('click', function(event) {
        
        event.preventDefault();
        
        // unbiding the event
        window.onbeforeunload = function(){null}
        
        // reload the thank you page
        window.location.href = 'http://millionairetrader.net/mo/en/thankyou/thank_you.php';
    });
    
});