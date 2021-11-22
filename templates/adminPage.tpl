{include file="templates/adminHeader.tpl"}   
 <main class="main">
        <section class="home" id="home">
            <div class="home-container re-container re-grid">
                    <div>
                        <form class="admin-form" action="createItem" method="post" enctype="multipart/form-data">
                            <label for="name">Name</label>
                            <input type="text" name="name">
    
                            <label for="description">Description</label>
                            <input type="text" name="description">
    
                            <label for="weight">Weight</label>
                            <input type="number" step="any" name="weight">
    
                            <input type="file" name="input_img" id="imageToUpload">
                            
                            <label for="category">Category</label>
                                <select name="category" required>
                                    <option></option>
                            {foreach from=$categories item=category }    
                                    <option value="{$category->id_category}">{$category->name_category}</option>
                            {/foreach}
                                </select> 
                            <button type="submit">+</button>
                        </form>
                      
                    </div>

                    <div>
                        <form class="admin-form" action="adminSearch" method="post">
                            <label for="search">Search</label>
                            <input type="text" name="search">
                            
                            <button type="submit" value="edit" id="searchItem">Edit</button>
                        </form>    
                    </div>

            </div>
        </section>
    </main>
{include file='templates/footer.tpl'}