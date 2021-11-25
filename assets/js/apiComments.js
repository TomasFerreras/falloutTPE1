"use strict"

let title = document.querySelector("#item_tittle");
<<<<<<< HEAD
let idItem = title.dataset.item;

=======
let user_rol = title.dataset.rol;
let id_item = title.dataset.item;
let id_user = title.dataset.user;
>>>>>>> working

const API_URL = `api/Item`


<<<<<<< HEAD
document.querySelector("#deletebtn").addEventListener("click", deleteComment);
document.querySelector("#addComment").addEventListener("submit" , addComment);
=======
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
>>>>>>> working


let app = new Vue({
    el: "#comment-list",
    data: {
<<<<<<< HEAD
        comments: []
    },
    methods:{
        deleteComment : deleteComment
=======
        comments: [],
        rol: user_rol
    },
    methods: {
        deleteComment: deleteComment
>>>>>>> working
    }
})

async function getComments(){
    try {
<<<<<<< HEAD
        
        let response = await fetch(API_URL + " / " + idItem);
        console.log(response);
=======
        let response = await fetch(API_URL + "/" + id_item);
>>>>>>> working
        let comments = await response.json();
        
        app.comments = comments;
    } catch (e) {
<<<<<<< HEAD
        
=======
>>>>>>> working
        console.log(e);
    }
}

<<<<<<< HEAD
async function deleteComment(idComment){
    try {
        await fetch(`${API_URL}/${idComment}`, {
            "method": "DELETE"
        });        
=======
async function deleteComment(comment_id){
    try {
        await fetch(`${API_URL}/${comment_id}`, {
            "method": "DELETE"
        });
>>>>>>> working
    } catch (error) {
        console.log(error);
    }
    getComments();
}
<<<<<<< HEAD

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
=======
>>>>>>> working

getComments();