console.log("works");

const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('navToggle','navMenu');

let editItem =document.getElementById("editItem");
document.getElementById("edit").addEventListener("click", function(e){
    editItem.classList.remove("item");
})

