<?php include 'partials/header.php'; ?>

<h6>Pošaljte nam poruku i očekujte odgovor uskoro</h6>

<!-- <form class="contact-form" action="contactform.php" method="POST">
    <input type="text" name="name" placeholder="Vase ime">
    <input type="mail" name="mail" placeholder="Vas imejl">
    <input type="text" name="subject" placeholder="Naslov poruke">
    <textarea name="message" placeholder="Vasa poruka"></textarea>
    <button type="submit" name="submit">Pošaljite</button>
</form> -->


<form class="col-4 offset-4" action="contactform.php" method="POST">
    <div>
        <label for="exampleFormControlInput1">Imejl adresa</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div>
        <label for="exampleFormControlInput1">Vaše ime</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
    </div>
    <div>
        <label for="exampleFormControlInput1">Naslov poruke</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
    </div>
    <div>
        <label for=" exampleFormControlTextarea1">Vaša poruka</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div><br><br>
    <div>
        <button class="btn btn-success" type="submit" name="submit">Pošaljite</button>
    </div><br>
</form>
<?php include 'partials/footer.php'; ?>