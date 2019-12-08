<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me</title>
</head>
<body>
    <form action="data/contact.php" method="post">

    <label for="name">Name</label>
    <input id="name-field" name="name" type="text" placeholder="Name">

    <label for="email">Email</label>
    <input id="email-field" name="email" type="text" placeholder="Email">

    <label for="subject">Subject</label>
    <input id="subject-field" name="subject" type="text" placeholder="Subject">

    <label for="message">Message</label>
    <textarea id="message-field" name="message"></textarea>

    <input id="send" type="submit" value="Send">
    
    </form>
</body>
</html>
