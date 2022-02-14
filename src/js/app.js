const task_title = document.querySelectorAll('h2');
const task_list = document.querySelectorAll('section');

const title = document.getElementsByClassName('title__task');
const title_wrapper = document.getElementsByClassName('title__wrapper');

// 
// Si title == 1 alors ajout class ".active" à ".title__wrapper"
// Sinon supprime .active" à ".title__wrapper"  
// 

for (let a = 0; a < title.length; a++) {

    title[a].addEventListener("click", () => {

        if (a == a) {
            title_wrapper[a].classList.add('active');              
        }

    })
        
}
        
       

// console.log(title)

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