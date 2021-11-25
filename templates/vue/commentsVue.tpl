{literal}
    <div id = "comment-list">
            <ul>
                <li v-for="comment in comments" class="comments">
<<<<<<< HEAD
                    User:{{comment.id}} Comment: {{comment.comentario}} Rating: {{comment.valoracion}} <button id="deletebtn" v-on:click = "deleteComment(comment.id)"> X </button>
=======
                    User:{{comment.id_user}} Comment: {{comment.comentario}} Rating: {{comment.valoracion}} <button v-if="rol == 1" id="deleteBtn" v-on:click="deleteComment(comment.id)"> X </button>
>>>>>>> working
                </li>
            <ul>
    <div>
{/literal}
