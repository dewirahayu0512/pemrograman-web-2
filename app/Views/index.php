<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dewi Collections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
  </head>

  <body>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-end">
                <a href="<?= base_url() ?>chart" class="btn btn-info">Keranjang Belanja <span class="badge bg-warning">2</span></a>
            </div>
        </div>
        
        <!-- Welcome Section -->
        <div class="row welcome-section mb-5 align-items-center">
            <div class="col-md-6">
                <h1>Selamat Datang di Dewi Collections</h1>
                <p>Kami menyediakan Hijab-Hijab dari berbagai brand terkenal.</p>
                <a href="#" class="btn btn-success">Lihat Koleksi Kami</a>
            </div>
            <div class="col-md-6">
                <h2>Cari Hijab Favoritmu di Dewi Collections</h2>
                <form action="" method="get">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Cari Koleksi" aria-label="Cari Koleksi">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Best Seller Products Section -->
        <h2 class="text-center mb-5">Produk Best Seller di Dewi Collections</h2>
        <div class="row justify-content-center g-3 mb-5">
            <!-- Example of repeated product cards -->
            <?php 
                // Loop through products (dummy example here)
                for ($i = 0; $i < 8; $i++) { 
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="<?= base_url() ?>images/hijab1.jpg" class="card-img-top" alt="Saudia Arabia">
                    <div class="card-body">
                        <h5 class="card-title">Saudia Arabia</h5>
                        <p class="card-text">Rp.30.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <footer class="bg-warning text-center py-3 mt-4">
        <div class="container">
            &copy; 2024, Dewi Collections. All Rights Reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>