<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Admin Panel</title>
    <style>
        :root {
            --primary-font: 'Poppins', sans-serif;
            --secodary-font: 'Roboto', sans-serif;
            --primary-color: #143464;
            --bg-color: #E6EFFF;
        }
        .navbar{
            background: #E6EFFF;
            padding: 30px;
        }
        nav, a{
            text-decoration: none;
        }

        main {
            margin-top: 100px; /* Adjust this value based on your navbar height */
            overflow-y: auto; /* Allow vertical scrolling */
            max-height: calc(100vh - 100px); /* Set maximum height for scrolling */
        }

        table, th{
            padding: 20px;
        }
        .img_design{
            height: 136px;
            width: 154px;
        }

        .com-btn {
            background-color: var(--primary-color) !important;
            color: white !important;
            border: none !important;
            outline: 2px solid var(--primary-color);
            transition: all 0.2s linear;
            padding: 6px 13px 6px 13px;
        }
        .com-btn:hover{
            color: var(--primary-color) !important;
            background-color: white !important;
            outline: 2px solid var(--primary-color);
        }
    
        .tilt-neon-designText {
            font-family: "Tilt Neon", sans-serif;
            font-optical-sizing: auto;
            font-weight: 900;
            font-style: normal;
            font-variation-settings:
                "XROT" 0,
                "YROT" 0;
        }

        .roboto-bold-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: italic;
        }
        .panel_design{
            color: #143461 ;
        }
        .btn-group {
            display: flex;
            gap: 10px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <header style="position: fixed; top: 0; width: 100%; z-index: 100;">
        <nav class="navbar navbar-expand-md bg ">
            <a href="<?php echo base_url('/')?>" class="navbar-expand fs-3 ms-3 roboto-bold-italic panel_design">Admin Panel</a>
            <div class="collapse navbar-collapse" id="btn">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url('add')?>" class="com-btn mx-1 mb-3 py-2 px-3 rounded-2 pro-btn">Add Product</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <div class="mt-2" style="overflow-x: auto;">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Origin</th>
                        <th>Brand</th>
                        <th>Variety</th>
                        <th>Packing Type</th>
                        <th>Packaging Size</th>
                        <th style="width: 25%;">Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($adminData):?>
                        <?php foreach($adminData as $val):?>
                            <tr>
                                <td><?php echo $val['id']; ?></td>
                                <td><?php echo $val['name']; ?></td>
                                <td><?php echo $val['origin']; ?></td>
                                <td><?php echo $val['brand']; ?></td>
                                <td><?php echo $val['variety']; ?></td>
                                <td><?php echo $val['packing_type']; ?></td>
                                <td><?php echo $val['packaging_size']; ?></td>
                                <td><?php echo $val['description']; ?></td>
                               <td class='text-center'><?php echo $val['price']; ?></td>
                               <td ><?php echo $val['category']; ?></td>
                                <td class='text-center'><img src="<?php echo $val['image']; ?>" alt="product-image" class="img_design"></td>
                                <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="<?php echo base_url('edit/'.$val['id'])?>" class="com-btn rounded-2">Edit</a>
                                    <a href="<?php echo base_url('delete/'.$val['id'])?>" class="com-btn rounded-2">Delete</a>
                                </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

