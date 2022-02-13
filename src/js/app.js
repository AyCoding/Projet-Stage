const task_title = document.querySelectorAll('h2')
const task_list = document.querySelectorAll('section')

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