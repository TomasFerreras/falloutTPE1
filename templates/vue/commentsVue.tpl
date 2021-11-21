{literal}
    <div id = "comment-list">
            <ul>
                <li v-for="comment in comments" class="comments">
<<<<<<< HEAD
                    User:{{comment.id}} Comment: {{comment.comentario}} Rating: {{comment.valoracion}} <button v-on:click = "deleteComment(comment.id)"> X </button>
=======
                    User:{{comment.id}} Comment: {{comment.comentario}} Rating: {{comment.valoracion}} <button id="deleteBtn" v-on:click="deleteComment(comment.id)"> X </button>
>>>>>>> b5bb22b6fcb8cb22e475c6beba82b842205fb196
                </li>
            <ul>
    <div>
{/literal}
