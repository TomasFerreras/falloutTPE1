{include file='templates/header.tpl' }
<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container  ">
            
        <table style="border:1px solid black">
                            <thead>
                                <tr>
                                    <td>name_item</td>
                                    <td>description_item</td>
                                    <td>weight_item</td>
                                    <td>category</td>
                                </tr>
                            </thead>
                            <tbody>
                            {foreach from=$items item=$item }
                                <tr>
                                            <td>{$item->name_item}  </td>
                                            <td>{$item->description_item} </td>
                                            <td>{$item->weight_item} </td>
                                            <td>{$item->category} </td>
                                        </tr>
                                
                            {/foreach}
                            
                            </tbody>
                        </table>
                        


                        <form action="search" method="POST">
                            id_item to edit
                            <input type="text" name="adminSearch">
                            <button type="submit" value="delete">Edit</button>
                        </form>

                      </div>
    </section>
</main>
{include file='templates/footer.tpl'}