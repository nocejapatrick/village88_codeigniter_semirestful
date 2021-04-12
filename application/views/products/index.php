<div class="container dashboard">
    <h1>Products</h1>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($products as $product){
            ?>
            <tr>
               <td><?= $product->name ?></td>
               <td><?= $product->description ?></td>
               <td><?= '$'.$product->price?></td>
               <td>
                    <a href="/products/show/<?= $product->id ?>">Show</a> |
                    <a href="/products/edit/<?= $product->id ?>">Edit</a> |
                    <form action="/products/destroy" method="POST">
                        <input type="hidden" name="id" value="<?= $product->id?>">
                        <input type="submit" value="Remove" class="btn">
                    </form>
               </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="/products/new" class="mt-10">Add a new product</a>
</div>