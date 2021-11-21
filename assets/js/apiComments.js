"use strict"
let title = document.querySelector("#item_tittle");
let id_item = title.dataset.item;

let comment_id = document.querySelector("#comment.id");
console.log (comment_id);

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
        console.log("pijka");
        let response = await fetch(`API_URL/${id_item}`);
        let comments = await response.json();
        app.comments = comments;
    } catch (e) {
      
        console.log(e);
    }
}

// async function Delete(){
//     try {
//         let res2 = await fetch(url2); //GET url
//         let json2 = await res2.json();//texto json a objeto
//              await fetch(`${url2}/${editions.id}`, {
//                     "method": "DELETE"
//                 });
          
        
//     } catch (error) {
//         console.log(error);
//     }
// }

getComments();