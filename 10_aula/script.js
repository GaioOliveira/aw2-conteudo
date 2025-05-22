const tasks = document.querySelectorAll(".lista li");
let draggedTask = null

for (let task of tasks){
    task.addEventListener("dragstart", function(event){
        draggedTask = task;
        event.dataTransfer.effectAllowed = "move"
        event.dataTransfer.setData("text/html",task.innerHTML);
        task.classList.add("dragging");
    });
    task.addEventListener("dragend",function(){
        draggedTask.classList.remove("dragging");
        draggedTask = null;
    });

}

const listas = document.querySelectorAll(".lista");
for (let coluna of listas){
    coluna.addEventListener("dragover", (event)=>{
            event.preventDefault();
            event.dataTransfer.dropEffect = "move";
            coluna.classList.add("dragover");
    });
    coluna.addEventListener("dragleave",()=>{
        coluna.classList.remove("dragover");
    });

    coluna.addEventListener("drop", (event)=>{
        event.preventDefault();
        const task = document.createElement("li");
        task.innerHTML = event.dataTransfer.getData("text/html");
        task.setAttribute("draggable",true);
        task.addEventListener("dragstart", (event)=>{
            draggedTask = task;
            event.dataTransfer
                .effectAllowed = "move"
                .setData("text/html",task.innerHTML);
                task.classList.add("dragging");
        });
        coluna.appendChild(task);
        coluna.classList.remove("dragover");

        //REMOVE UMA TASK DA COLUNA DE ONDE FOI RETIRADA
        const colunaAnterior = draggedTask.parentNode;
        colunaAnterior.removeChild(draggedTask);


    });
}

// CRIAÇÃO DE NOVA TASK
const addTaskForm = document.querySelector("#add-task-form");
const addTaskInput = addTaskForm.querySelector("input");

addTaskForm.addEventListener("submit",(event)=>{
    event.preventDefault();
    const newTaskText = addTaskInput.value.trim();
    if (newTaskText !== ""){
        const newTask = document.createElement("li");
        newTask.innerHTML = newTaskText;
        newTask.setAttribute("draggable",true);
        newTask.addEventListener("dragstart", ()=>{
            draggedTask = newTask;
            event.dataTransfer
                .effectAllowed = "move"
                .setData("text/html",newTask.innerHTML);
            newTask.classList.add("dragging");
        });
        document.querySelector("#todo").appendChild(newTask);
        addTaskInput.value="";
    }
});