<!DOCTYPE html>
<html lang="en">

<?php

$title = "Contact us";
require_once "blocks/head.php"?>

<script>
    $(document).ready (function() {
        $("#done").click( function () {
            $('#messageShow').hide ();
            var name = $("#name").val ();
            var email = $("#email").val ();
            var subject = $("#subject").val ();
            var message = $("#message").val ();
            var fail = "";
            if (name.length < 3) fail = "Name should not be less than 3 letters";
            else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
                fail = "Please enter a valid email";
            else if (subject.length < 3)
                fail = "Subject should not be less than 3 letters";
            else if (message.length < 10)
                fail = "Enter more explanation please";
            if (fail != "") {
                $('#messageShow').html(fail + "<div class='clear'><br></div>");
                $('#messageShow').show ();
                return false;
            }
        });
    });
</script>

<body>

<?php require_once "blocks/header.php"?>

<!-- Main blocks -->

<div id="wrapper">
    <div id="leftcol">
        <input type="text" name="name" id="name" placeholder="Name"> <br>
        <input type="text" name="email" id="email" placeholder="Email"> <br>
        <input type="text" name="subject" id="subject" placeholder="Subject" > <br>
        <textarea name="message" id="message" placeholder="Write your message here" cols="30" rows="10"></textarea> <br>
        <div id="messageShow"></div>
        <input type="button" name="done" id="done" value="Send">
    </div>

    <?php require_once "blocks/rightcol.php"?>

</div>

<?php require_once "blocks/footer.php"?>

</body>
</html>