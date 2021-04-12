<div class="container">
    <h1>Edit Product <?= $product->id ?></h1>
    <form action="/products/update" method="post">
        <input type="hidden" name="id" value="<?= $product->id ?>">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="<?= $product->name ?>">
            <span class="error"><?= $this->session->flashdata('name_error') ?></span>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10" value="<?= $product->description ?>"></textarea>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" step="any" value="<?= $product->price ?>">
            <span class="error"><?= $this->session->flashdata('price_error') ?></span>
        </div>
        <input type="submit" class="btn primary mt-10" value="Edit">
    </form>
    <a href="/products" class="mt-10">Go Back</a>
</div>