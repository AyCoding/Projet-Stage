   <div class="modal">
        <div class="modal__content">
            <h1>Ajout d'un projet</h1>
            <form action="/" method="POST">

                <div class="form__group">
                    <input type="text" name="title" id="title" placeholder="Titre du projet" required>
                </div>
                <div class="form__group">
                    <input type="text" name="task" id="task" placeholder="Tâches" required>
                </div>
                <div class="form__group">
                    <input type="text" name="task1" id="task" placeholder="Tâches 2">
                </div>

                <div class="form__group form__last">
                    <button type="submit" name="submit" id="submit">Valider</button>
                </div>
            </form>
        </div>
        <aside>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>
        </aside>
    </div>