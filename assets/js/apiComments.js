"use strict"
let title = document.querySelector("#item_tittle");
let name_item = title.dataset.item;


const API_URL = `api/Item/${name_item}`

console.log(API_URL);


let app = new Vue({
    el: "#comment-list",
    data: {
        comments: []
    }
})

async function getComments(){
    try {
        let response = await fetch(API_URL);
        let comments = await response.json();
        app.comments = comments;
    } catch (e) {
      
        console.log(e);
    }
}


getComments();