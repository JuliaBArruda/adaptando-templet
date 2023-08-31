<h2>Contact</h2>

<?php echo getFlash('mail'); ?>

<form action="?inc=send-contact" method="post">
    <input type="text" name="name" value="Júlia Barbosa">
    <input type="text" name="email" value="bjusnk@gmail.com">
    <input type="text" name="subject" value="teste">
    <textarea name="message" id="" cols="30" rows="10">Message</textarea>
    <button type="submit">Send</button>
</form>