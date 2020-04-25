<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.google.com/recaptcha/api.js?render=6LctBe4UAAAAALlSxa8C3CcvbZfHDXQh9WGd2SEg"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LctBe4UAAAAALlSxa8C3CcvbZfHDXQh9WGd2SEg', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
</head>

<?php // Check if form was submitted:
