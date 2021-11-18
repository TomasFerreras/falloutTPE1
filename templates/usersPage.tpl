{include file="templates/adminHeader.tpl"}

<main class="main">
        <div class="home-container re-container admin-edit">

            <h1>Edit user roles</h1>
            <form class="admin-form" action="userEdit" method="post">

                <label for="userId">User ID</label>
                <input type="text" name="userId">
                <button type="submit" value="edit" id="searchEditUser">Search and change rol to: </button>
                <select name="role">
                    <option value=1>Admin</option>
                    <option value=0>Regular</option>
                </select>
            </form>

            <table>
                <tr>
                    <td>ID</td>
                    <td>USER</td>
                    <td>ROL</td>
                </tr>
                {foreach from=$users item=$user}
                <tr>
                    <td>{$user->id_user}</td>
                    <td>{$user->user_email}</td>
                    <td>
                    {if $user->role == 0}
                        Regular user
                    {else}
                        Admin user
                    {/if}
                        
                    </td>
                </tr>
                {/foreach}
            </table>
        </div>
</main>

{include file='templates/footer.tpl'}   