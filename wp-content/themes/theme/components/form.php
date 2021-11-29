<div class="form">
    <div class="container">

        <div class="form-wrapper">

            <h3 class="title">Avete domande?</h3>
            <p>Hai bisogno di una consulenza professionale?</p>
            <p>Lascia una richiesta e ti richiamerò a breve</p>

            <form class="form-wrapper-items home-form" id="formhome">
                <input type="hidden" name="action" value="sendform">
                <input type="text" name="name"  placeholder="Il tuo nome*" required>
                <input type="email" name="email"  placeholder="La tua email">
                <input type="tel" name="tel"  placeholder="Il tuo numero di telefono*" required>
                <textarea name="comment" placeholder="Il tuo commento"></textarea>
                <button class="btn">Lascia una richiesta di consulenza</button>

            </form>
        </div>
        <img src="<?= IMG  . "/form/3.png" ?>" alt="" class="form-image-full">
        <img src="<?= IMG  . "form-image-tablet.png" ?>" alt="" class="form-image-tablet">
        
    </div>
</div>