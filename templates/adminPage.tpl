{include file='templates/header.tpl' }
 <main class="main">
        <section class="home" id="home">
            <div class="home-container re-container re-grid">
                    <div>
                        <form action="createItem" method="post">
                            <label for="name">Name</label>
                            <input type="text" name="name">
    
                            <label for="description">Description</label>
                            <input type="text" name="description">
    
                            <label for="weight">Weight</label>
                            <input type="text" name="weight">
    
                            <label for="weight">Category</label>
                            <input type="text" name="category">
    
                            <button type="submit">+</button>
                        </form>
                      
                    </div>

                    <div>
                        <form action="adminSearch" method="post">
                            <label for="search">Search</label>
                            <input type="text" name="search">
                            
                            <button type="submit" value="edit" id="searchItem">Edit</button>
                        </form>    
                    </div>

                    {* <div id="showItem" class="item">
                    {if $search == 0}
                        <p>REREWKIRJWEIOJWEN</p>
                    {else}
                        
                        {foreach from=$items item=$item}
                            {if $item->name_item == $search}
                                <table>
                                    <thead>
                                        <tr>
                                            <td>id_item</td>
                                            <td>name_item</td>
                                            <td>description_item</td>
                                            <td>weight_item</td>
                                            <td>id_category</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{$item->id_item}</td>
                                            <td>{$item->name_item}</td>
                                            <td>{$item->description_item}</td>
                                            <td>{$item->weight_item}</td>
                                            <td>{$item->id_category}</td>
                                    </tbody>
                                </table>
                           {else}
                                <h4>ERROR</h4>
                            {/if}
                        {/foreach}
                    {/if}
                                
                    </div> *}

            </div>
        </section>
    </main>
{include file='templates/footer.tpl'}