<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UTS Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS Laravel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-5 pt-5">
    <h1 class="mb-4">Form Tambah Produk</h1>

    <form>
      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label">Kode Produk</label>
          <input type="text" class="form-control" placeholder="Input Kode Produk">
        </div>

        <div class="col-md-4">
          <label class="form-label">Nama Produk</label>
          <input type="text" class="form-control" placeholder="Input Nama Produk">
        </div>

        <div class="col-md-4">
          <label class="form-label">Jenis Produk</label>
          <select class="form-select">
            <option selected disabled>Pilih Produk</option>

            @for ($i = 0; $i < $jumlah; $i++)
              <option value="{{ $jenis[$i] }}">{{ $jenis[$i] }}</option>
            @endfor

          </select>
        </div>
      </div>

      <div class="row align-items-end mb-3">
        <div class="col-md-6">
          <label class="form-label">Harga</label>
          <input type="number" class="form-control" placeholder="Input Harga">
        </div>

        <div class="col-md-6 d-flex">
          <button type="submit" class="btn btn-success w-100 mt-2">Simpan</button>
        </div>
      </div>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>