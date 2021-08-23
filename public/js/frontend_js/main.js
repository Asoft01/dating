
$().ready(function() {
    // validate signup form on keyup and submit
    $("#signupForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                lettersonly: true
            },
            password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                minlength: 6,
                equalTo: "#user_password"
            },
            email: {
                required: true,
                email: true,
                remote: "/check-email"
            },
            agree: "required"
        },
        messages: {
            name: "Please enter your Name",
            email: {
                required: "Please enter your Email",
                email: "Please enter valid Email",
                remote: "Email already Exist"
            },
            password: {
                required: "Please provide your password",
                minlength: "Your password must be at least 6 characters long"
            },
            confirm_password: {
                required: "Please confirm your password",
                minlength: "Your Password must be at least 6 characters long",
                equalTo: "Please enter the same Password as above"
            },
            agree: "Please accept our policy",
        }
    });
});