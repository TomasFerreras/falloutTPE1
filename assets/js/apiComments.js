"use strict"
let title = document.querySelector("#item_tittle");
let user_rol = title.dataset.rol;
let id_item = title.dataset.item;
let id_user = title.dataset.user;

const API_URL = `api/Item`


document.querySelector("#deleteBtn").addEventListener('click', deleteComment);
document.querySelector("#addForm").addEventListener('submit', addComment);


async function addComment(e){
    e.preventDefault();
    let comment = {
        comentario : document.querySelector("input[name= comment]").value,
        valoracion : document.querySelector("select[name= rating]").value,
        id_item : id_item,
        id_user : id_user
    }
    
    console.log(comment);
    try {
        await fetch(API_URL,{
            "method": "POST",
            "headers":{"Content-type":"application/JSON"},
            "body": JSON.stringify(comment)
        })
    } catch (e) {
        console.log(e);
    }
    getComments();
};


let app = new Vue({
    el: "#comment-list",
    data: {
        comments: [],
        rol: user_rol
    },
    methods: {
        deleteComment: deleteComment
    }
})

async function getComments(){
    try {
        let response = await fetch(API_URL + "/" + id_item);
        let comments = await response.json();
        app.comments = comments;
    } catch (e) {
        console.log(e);
    }
}

async function deleteComment(comment_id){
    try {
        await fetch(`${API_URL}/${comment_id}`, {
            "method": "DELETE"
        });
    } catch (error) {
        console.log(error);
    }
    getComments();
}

getComments();