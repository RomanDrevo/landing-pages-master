$(function () {
    var button = $(this).find("input[type='submit']");
    if ($('#name').length) {

        $('#name').change(function () {
            button.prop("disabled", false);
        });

        $('#name').on('focusout', function () {
            if ($(this).val() == "")
                return false;


            var fullName = $('#name').val();
            //
            // console.log(fullName);
            //
            var nameArr = fullName.split(" ");
            console.log(nameArr);

            if(nameArr.length < 2){
                toastr.error('Please enter your full name!', 'Error!');
                button.prop("disabled", true);
            }

            if(nameArr[1] == ""){
                toastr.error('Please enter your full name!', 'Error!')
                button.prop("disabled", true);
            }

        });
    }

});