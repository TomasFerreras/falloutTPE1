"use strict"
let title = document.querySelector("#item_tittle");
let id_item = title.dataset.item;

const API_URL = `api/Item`


document.querySelector("#deleteBtn").addEventListener('click', deleteComment);


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