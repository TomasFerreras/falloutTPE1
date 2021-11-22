{literal}
    <div id = "comment-list">
            <ul>
                <li v-for="comment in comments" class="comments">
                    User:{{comment.id_user}} Comment: {{comment.comentario}} Rating: {{comment.valoracion}} <button v-if="rol == 1" id="deleteBtn" v-on:click="deleteComment(comment.id)"> X </button>
                </li>
            <ul>
    <div>
{/literal}
