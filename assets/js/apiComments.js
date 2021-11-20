"use strict"
let title = document.querySelector("#item_tittle");
let name_item = title.dataset.item;


const API_URL = `http://localhost/Proyectos/WEB%202/TPE/api/Item/${name_item}`

console.log(API_URL);

async function getComments(){
    try {
        let response = await fetch(API_URL);
        
        let comment = await response.text();
        console.log(comment);
        render(comment);
    } catch (e) {
        console.log("pija")
        console.log(e);
    }
}

function render(comments){
    let list = document.querySelector("#comment-list");
    list.innerHTML = ""; 
    
    
        let html = `<li> ${comments.id}</li>`
        
        list.innerHTML += html; 
    
    

}

getComments();