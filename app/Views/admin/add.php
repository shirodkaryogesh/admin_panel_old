<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Add Products</title>
    <style>
        :root {
            --primary-font: 'Poppins', sans-serif;
            --secodary-font: 'Roboto', sans-serif;
            --primary-color: #143464;
            --bg-color: #E6EFFF;
        }
        nav {

            position: fixed;
            top : 0px;
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

        .com-btn {
            background-color: var(--primary-color) !important;
            color: white !important;
            border: none !important;
            outline: 2px solid var(--primary-color);
            transition: all 0.2s linear;
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

        .form-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            border: 2px solid #143464;
            border-radius:6px;
            color: #143464;
        }

        .form-control {
            margin-bottom: 15px;
        }
        
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <header style="position: fixed; top: 0; width: 100%; z-index: 100;">
        <nav class="navbar navbar-expand-md bg ">
            <a href="<?php echo base_url('/')?>" class="navbar-expand fs-3 ms-3 roboto-bold-italic panel_design">ADMIN PANEL</a>
            <div class="collapse navbar-collapse" id="btn">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url('/')?>" class="com-btn mx-3 mb-3 py-2 px-3 rounded-2 pro-btn">Back</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="form-container">
            <h2>Add Products</h2>
            <form action="<?php echo base_url('create')?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputFirstname1" class="form-label">Name</label>
                    <input type="text" class="form-control p-2" id="exampleInputFirstname1" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputLastname1" class="form-label">Origin</label>
                    <input type="text" class="form-control p-2" id="exampleInputLastname1" name="origin">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone1" class="form-label">Brand</label>
                    <input type="text" class="form-control p-2" id="exampleInputPhone1" name="brand">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone1" class="form-label">Variety</label>
                    <input type="text" class="form-control" id="exampleInputPhone1" name="variety">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone1" class="form-label">Packing Type</label>
                    <input type="text" class="form-control p-2" id="exampleInputPhone1" name="packing_type">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone1" class="form-label">Packaging Size</label>
                    <input type="text" class="form-control p-2" id="exampleInputPhone1" name="packaging_size">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" class="form-control p-2" id="exampleInputEmail1" 
                        name="description">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDesignation1" class="form-label">Price</label>
                    <input type="text" class="form-control p-2" id="exampleInputDesignation1" name="price">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <input type="text" class="form-control p-2" name="category">
                </div>
                <div class="mt-2">
                    <label for="formFile" class="form-label pb-2">Upload Image</label>
                    <input class="form-control p-2" name="image" type="file" id="formFile">
                </div>
                <div class="form-group mt-3">
                    <button type="submit"  class="com-btn  mb-3 py-2 px-3 rounded-2 pro-btn">Add</button>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
