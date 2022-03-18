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

   <style>
       :root {
           --white: #FDFDFD;
           --black: #222831;
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
           display: none;
           color: #333;
       }

       .modal.active {
           display: flex;
       }

       .modal__content {
           background-color: #fdfdfd;
           width: 90%;
           height: 100%;
           padding: 5%;
           border-radius: 25px 0 25px 25px;
       }

       .modal__content h1 {
           padding: 5% 0;
       }

       aside {
           background-color: var(--white);
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
           fill: var(--black);
       }

       aside svg:hover {
           fill: var(--white);
           transition: .3s;
       }

       aside:hover {
           transition: .3s;
           background-color: rgba(255, 0, 0, 1);
           cursor: pointer;
       }


       .form__group * {
           padding: 10px;
           margin: 5px;
           border-radius: 5px;
       }

       .form__group input {
           border: 2px solid var(--black);
           width: 100%;
           color: var(--black);
       }

       .form__last button {
           width: 100%;
           background-color: var(--black);
           color: var(--white);
           display: flex;
           justify-content: center;
           font-size: 20px;
           font-weight: 700;
           border: 2px solid var(--black)
       }

       .form__last:hover button {
           background-color: var(--white);
           color: var(--black);
           border: 2px solid var(--black);
           transition: .1s;
       }

       input::placeholder {
           color: var(--black);
       }

       .modal__content {
           border: 2px solid black;
       }

       aside {
           border-top: 2px solid black;
           border-bottom: 2px solid black;
           border-right: 2px solid black;
       }
   </style>