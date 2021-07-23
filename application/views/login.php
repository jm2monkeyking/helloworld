<div class="container p-5">
    <form class="form-signin mt-5">
       <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal"><?= $title?></h1>
            <?php if(!empty($users)){ ?>
            <table class="table">
                <tr>
                    <th>user_id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>contact</th>
                </tr>
                <?php 
                if(!empty($users)){
                    foreach ($users as $user){ ?>
                        <tr>
                        <td><?= $user['user_id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['age'] ?></td>
                        <td><?= $user['contact'] ?></td>
                        </tr>
                    <?php } 
                }?>
            </table>
            <?php } ?>

            <?php if(!empty($products)){ ?>
            <table class="table">
                <tr>
                    <th>product_id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>stock</th>
                </tr>
                
                <?php foreach ($products as $product){ ?>
                   
                        <tr>
                        <td><?= $product['product_id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['stock'] ?></td>
                        </tr>
                    <?php } ?>
               
            </table>
            <?php } ?>
        </div>
    </form>
</div>