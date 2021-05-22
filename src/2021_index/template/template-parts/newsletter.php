<section class="newsletter container">
    <div class="newsletter__title">Assine nossa<br>newsletter</div>
    <form action="" class="newsletter__form">
        <div class="newsletter__form-column">
            <div class="newsletter__input-container">
                <input class="newsletter__input-text"type="text" placeholder="Digite seu e-mail aqui">
            </div>
            <div class="newsletter__action-row">
                <div class="action-row__error-message">E-mail já cadastrado | E-mail inválido</div>
                <i class="fas fa-spinner action-row__loading"></i>
            </div>

            <input type="checkbox" name="" class="terms-checkbox"id="terms-checkbox">
            <label for="terms-checkbox" class="terms-checkbox__label">
                <div class="terms-checkbox__fake-input">
                    <i class="fas fa-check"></i>
                </div>
                <div class="terms-checkbox__label-text">Aceito receber e-mails de notícias.</div>
            </label>
        </div>

        <label for="submit-input" class="newsletter__input-submit-label">
            <img src="./assets/images/newsletter-icon.png" alt="">
            <input class="newsletter__input-submit" id="submit-input" type="submit" value="">
        </label>
    </form>
</section>
