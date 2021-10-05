{include file="templates/adminHeader.tpl"}   
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

            </div>
        </section>
    </main>
{include file='templates/footer.tpl'}