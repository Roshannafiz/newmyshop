$().ready(function () {
    // Validate User Register Form On Keyup And Submit
    $("#RegisterForm").validate({
        rules: {
            name: "required",
            address: "required",
            state: "required",
            city: "required",
            country: "required",
            pincode: "required",
            mobile: {
                required: true,
                minlength: 11,
                maxlength: 11,
            },
            password: {
                required: true,
                minlength: 8,
            },
            email: {
                required: true,
                email: true,
                remote: "check-email",
            },
            agree: "required",
        },
        messages: {
            name: "Please enter your name",
            address: "Please enter your address",
            state: "Please enter your state",
            city: "Please enter your address",
            country: "Please enter your address",
            pincode: "Please enter your address",
            mobile: {
                required: "Please enter your mobile",
                minlength: "Your mobile must be at least 10 characters long",
                maxlength: "Your mobile must be at least 10 characters long",
            },

            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long",
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address",
                remote: "Email already exists",
            },
        },
    });
});
