<div class="form container">
    <form action=""> 
        <div class="form__title">
            Trabalhe Conosco
        </div>
        <div class="form-box">
            <div class="input-item">
                <label class="input-item__label"> Nome Completo</label>
                <input type="text">
            </div>
            <div class="input-item">
                <label class="input-item__label"> E-mail</label>
                <input type="text">
            </div>
            <div class="input-item">
                <label class="input-item__label"> Telefone</label>
                <input type="text" value="(DDD)">
            </div>
            <div class="input-item">
                <label class="input-item__label"> assunto</label>
                <select>
                    <option>Selecione uma área</option>
                </select>
            </div>
        </div>
        <label class="form__label" for="message">Mensagem</label>
        <textarea name="message" id="message"></textarea>
        <div class="form-attach">
            <div class="form-attach__title">
                Anexo
            </div>
            <div class="form-attach__item">
                <div class="item__icon">X</div>
                <div class="item__text">
                </div>  
            </div>
            <div class="form-attach__size">
                Formatos aceitos: .pdf até 8mb.
            </div>
        </div>
        <div class="form-submit">
            <label for="fileupload" class="submit__label"><p>Adicionar anexo</p>
                <input type="file" id="fileupload">
            </label>
            <input type="submit" class="form__send" value="Enviar currículo"> 
        </div>
    </form> 
</div>