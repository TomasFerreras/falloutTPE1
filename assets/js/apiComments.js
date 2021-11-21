"use strict"
let title = document.querySelector("#item_tittle");
let id_item = title.dataset.item;

const API_URL = `api/Item`


document.querySelector("#deleteBtn").addEventListener('click', deleteComment);
document.querySelector("#addForm").addEventListener('submit', async function (e){
    e.preventDefault();
    console.log("PIJA");

    let comment = {
        comentario : document.querySelector("input[name= comment]").value,
        valoracion : document.querySelector("select[name= rating]").value,
        id_item : id_item
    }

    try {
        await fetch(API_URL,{
            "method": "POST",
            "headers":{"Content-type":"application/JSON"},
            "body": JSON.stringify(comment)
        })
    } catch (e) {
        console.log(e);
    }

    console.log(comment)
});


let app = new Vue({
    el: "#comment-list",
    data: {
        comments: []
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
    getComments()
}

getComments();