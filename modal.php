    <div class="modal">
        <div class="modal__content">
            <h1>Ajout d'un projet</h1>
            <form action="#">

                <div class="form__group">
                    <input type="text" name="title" id="title" placeholder="Titre du projet" required>
                </div>
                <div class="form__group">
                    <input type="text" name="task" id="task" placeholder="Tâches" required>
                </div>
                <div class="form__group">
                    <input type="text" name="task" id="task" placeholder="Tâches">
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

<style>

body {
        /* background-color: #333333d3; */
        position: relative;
    }


    .modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 90%;
        height: auto;
        max-height: 90%;
        margin: auto;
        display: flex;
        display: none;
    }

    .modal.active {
        display: flex;
    }
    
    .modal__content {
        background-color: orange;
        width: 90%;
        height: 100%;
        padding: 5%;
        border-radius: 25px 0px 25px 25px;
    }
    
    .modal__content h1 {
        padding: 5%;
    }
    
    
    aside {
        background-color: #333;
        width: 10%;
        border-radius: 0 50px 50px 0;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    aside svg {
        width: 100%;
        margin-bottom: -5px;
        margin-left: -5px;
        fill: #fdfdfd;
    }

    aside:hover {
        transition: .3s;
        background-color: rgba(200, 0, 0, 1);
        cursor: pointer;
    }


    .form__group * {
        padding: 10px;
        margin: 5px;
        border-radius: 5px;
    }

    .form__group input {
        border: 2px solid #333;
        width: 100%;
        color: #fdfdfd;
    }

    .form__last button {
        width: 100%;
        background-color: #fdfdfd;
        display: flex;
        justify-content: center;
        font-size: 20px;
        font-weight: 700;
    }

    .form__last:hover button {
        background-color: #333;
        color: #fdfdfd;
        transition: .3s;
    }
</style>