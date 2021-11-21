"use strict"
let title = document.querySelector("#item_tittle");
let id_item = title.dataset.item;


const API_URL = `api/Item`

console.log(API_URL);



let app = new Vue({
    el: "#comment-list",
    data: {
        comments: []
    }
})

async function getComments(){
    try {
        let response = await fetch(`API_URL/${id_item}`);
        let comments = await response.json();
        app.comments = comments;
    } catch (e) {
      
        console.log(e);
    }
}



async function deleteComment(idComment){
    try {
        await fetch(`${API_URL}}/${idComment}`, {
            "method": "DELETE"
        });
          
        
    } catch (error) {
        console.log(error);
    }
}


async function addComment(){
    let comment = {
        comentario : document.querySelector("input[name= comment]").value,
        valoracion : document.querySelector("select[name= rating]").value,
        id_item : id_item
    }
    try {
        await fetch(API_URL,{
            method: POST,
            headers:{"Content-type":"application/JSON"},                
            body: JSON.stringify(comment)
        })
    } catch (e) {
        console.log(e);
    }
}
getComments();