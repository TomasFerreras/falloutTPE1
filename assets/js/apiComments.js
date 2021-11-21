"use strict"

let title = document.querySelector("#item_tittle");
let idItem = title.dataset.item;


const API_URL = `api/Item`

console.log(API_URL);

document.querySelector("#deletebtn").addEventListener("click", deleteComment);
document.querySelector("#addComment").addEventListener("submit" , addComment);


let app = new Vue({
    el: "#comment-list",
    data: {
        comments: []
    },
    methods:{
        deleteComment : deleteComment
    }
})

async function getComments(){
    try {
        
        let response = await fetch(API_URL + " / " + idItem);
        console.log(response);
        let comments = await response.json();
        
        app.comments = comments;
    } catch (e) {
        
        console.log(e);
    }
}

async function deleteComment(idComment){
    try {
        await fetch(`${API_URL}/${idComment}`, {
            "method": "DELETE"
        });        
    } catch (error) {
        console.log(error);
    }
    getComments();
}

async function addComment(){
    e.preventDefault();

    let comment = {
        comentario : document.querySelector("input[name = comment]").value,
        valoracion : document.querySelector("select[name = rating]").value,
        id_item : idItem
    }

    console.log(comment);

    try {
        await fetch (API_URL,{
            method : POST,
            headers:{"Content-type":"application/JSON"},                
            body: JSON.stringify(comment)
        })
    } catch (e) {
        console.log(e)
    }
    getComments();
}

getComments();