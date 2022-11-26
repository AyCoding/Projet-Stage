const task_title = document.querySelectorAll('.title__project');
const task_list = document.querySelectorAll('section');


// Pour ouvrir les contenus des tâches
function toggleTask() {

    const title = document.querySelectorAll('.title__task');
    const title_wrapper = document.querySelectorAll('.title__wrapper');

    for (let a = 0; a < title.length; a++) {
        title[a].addEventListener('click', () => {
            title_wrapper[a].classList.toggle('active');
        })

    }
}

toggleTask();

// Ajout de la class "active" sur les sections en passant par "Projets en cours" ou "Projets finis" 
for (let i = 0; i < task_title.length; i++) {

    task_title[i].addEventListener("click", () => {

        if (i == 0) {

            task_title[0].classList.add('active');
            task_title[1].classList.remove('active');
            task_list[0].classList.add('active');
            task_list[1].classList.remove('active');

        } else {

            task_title[1].classList.add('active');
            task_title[0].classList.remove('active');
            task_list[1].classList.add('active');
            task_list[0].classList.remove('active');

        }

    });

}


const addingTasks = document.querySelector('.add__project');
const modal = document.querySelector('.modal');

function addTasks() {

    addingTasks.addEventListener('click', () => {
        modal.classList.toggle('active');
    })

    const aside = document.querySelector('aside');

    aside.addEventListener('click', () => {
        modal.classList.remove('active');
    })
}

addTasks();

const removeTask = document.querySelectorAll('.delete');
// console.log(removeTask);