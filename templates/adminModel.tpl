{include file="templates/adminHeader.tpl" }
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
                            <td>{$item->id_category} </td>
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
                            <td><input type="text" name="nameItem" placeholder ="{$item->name_item}" required>  </td>
                            <td><input type="text"name="desciptionItem" placeholder ="{$item->description_item}" required> </td>
                            <td><input type="number" step="any" name="weightItem" placeholder ="{$item->weight_item}" required> </td>
                            <td>
                            <select name="itemCategory" required>
                                <option></option>
                            {foreach from=$categories item=category }    
                                <option value="{$category->id_category}">{$category->name_category}</option>
                            {/foreach}
                            </select> 
                            </td>
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