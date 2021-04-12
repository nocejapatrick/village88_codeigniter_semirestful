<div class="container">
    <h1>Add new product</h1>
    <form action="/products/create" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name">
            <span class="error"><?= $this->session->flashdata('name_error') ?></span>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" step="any">
            <span class="error"><?= $this->session->flashdata('price_error') ?></span>
        </div>
        <input type="submit" class="btn primary mt-10" value="Create">
    </form>
    <a href="/products" class="mt-10">Go Back</a>
</div>