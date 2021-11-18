{include file="templates/adminHeader.tpl"}

<main class="main">
        <div class="home-container re-container admin-edit">
            
                <article >
                    <table class="item-to-add-table">
                        <thead>
                            <tr>
                                <td>id_user</td>
                                <td>user_email</td>
                                <td>role</td>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$users item=user}
                                <tr>
                                    <td>{$user->id_user}</td>
                                    <td>{$user->user_email}</td>
                                    <td>{$user->role}</td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </article>

                <article id= "tableUserEdit" class="item" >
                    <table class="item-to-add-table tableUser">
                        <thead>
                            <tr>
                                <td>id_user</td>
                                <td>user_email</td>
                                <td>role</td>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$users item=user}
                                <tr>
                                    <td>{$user->id_user}</td>
                                    <td>{$user->user_email}</td>
                                    <td>{$user->role}</td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </article>

        <div>
            <button id = "userEditbtn">Edit</button>
        </div>
            
        </div>
</main>







{include file='templates/footer.tpl'}   