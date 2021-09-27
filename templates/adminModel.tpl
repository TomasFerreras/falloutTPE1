{include file="templates/header.tpl" }
<main class="main">
    <section class="home" id="home">
        <article>
       
            <table>
                <thead>
                    <tr>
                        <td>id_item</td>
                        <td>name_item</td>
                        <td>description_item</td>
                        <td>weight_item</td>
                        <td>category</td>
                    </tr>
                </thead>
                {foreach from=$items item=$item }
                    {if $item->name_item == $search}
                        <tr>
                            <td>{$item->id_item}  </td>  
                            <td>{$item->name_item}  </td>
                            <td>{$item->description_item} </td>
                            <td>{$item->weight_item} </td>
                            <td>{$item->category} </td>
                        </tr>
                    {/if}
                {/foreach}
            </table>
        </article>


        <article>
            <button id="edit">Edit</button>
            <a href="deleteItem/{$search}">Delete</a>
        </article> 


        <article id="editItem" class="item">
            <form action="editItem/{$search}" method="post">
            <table>
                <thead>
                    <tr>
                        <td>id_item</td>
                        <td>name_item</td>
                        <td>description_item</td>
                        <td>weight_item</td>
                        <td>category</td>
                    </tr>
                </thead>
                {foreach from=$items item=$item }
                    {if $item->name_item == $search}
                        <tr>
                            <td>{$item->id_item}</td>  
                            <td><input name="nameItem" placeholder ="{$item->name_item}">  </td>
                            <td><input name="desciptionItem" placeholder ="{$item->description_item}"> </td>
                            <td><input name="weightItem" placeholder ="{$item->weight_item}"> </td>
                            <td><input name="itemCategory" placeholder ="{$item->category}"> </td>
                        </tr>
                    {/if}
                {/foreach}
            </table>
            <button type="submmit">Send</button>
            </form>
        </article>
    </section>
</main>

{include file="templates/footer.tpl" }