$(document).ready(function () {

$('#Registerform').validate({
    rules: {
        firstname: {
            minlength: 5,
            required: true
        },
         lastname: {
            minlength: 5,
            required: true
        },
        email: {
            required: true,
            email: true
        },
        mobile: {
            required: true,
            mobile: true
        }
    },
    highlight: function (element) {
        $(element).closest('.control-group').removeClass('success').addClass('error');
    },
    success: function (element) {
        element.text('OK!').addClass('valid')
            .closest('.control-group').removeClass('error').addClass('success');
    }
});
});