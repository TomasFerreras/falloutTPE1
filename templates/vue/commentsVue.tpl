{literal}
    <div id = "comment-list">
            <ul>
                <li v-for="comment in comments" class="comments">
                    User:{{comment.id}} Comment: {{comment.comentario}} Rating: {{comment.valoracion}} <button id="deleteBtn" v-on:click="deleteComment(comment.id)"> X </button>
                </li>
            <ul>
    <div>
{/literal}
