<div class="container show-product">
    <h1>Product <?= $product->id ?></h1>
    <div>
        <div>
            <p>Name: </p>
            <p><?= $product->name ?></p>
        </div>
        <div>
            <p>Description: </p>
            <p><?= $product->description ?></p>
        </div>
        <div>
            <p>Price: </p>
            <p>$<?= $product->price ?></p>
        </div>
    </div>
    <a href="#">Edit</a> |
    <a href="/products">Back</a>
</div>