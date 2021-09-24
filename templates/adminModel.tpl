{include file="templates/header.tpl" }
<div class="pija">
    <table >
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
</div>
<div>
    
</div>


{include file="templates/footer.tpl" }