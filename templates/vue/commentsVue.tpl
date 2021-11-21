{literal}
    <div id = "comment-list">
            <ul>
                <li v-for="comment in comments" class="comments">
                    User:{{comment.id}} Comment: {{comment.comentario}} Rating: {{comment.valoracion}} <button :id="comment.id"> X </button>
                </li>
            <ul>
    <div>
{/literal}
