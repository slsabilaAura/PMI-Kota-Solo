<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        font-size: 1rem;
      }
      .wrapper {
        margin: auto;
        width: 70%;
      }
      .row {
        padding: 1rem;
      }
      .table {
        border: 1px solid black;
        width: 100%;
        text-align: left;
      }

      .field {
        background-color: rgba(255, 0, 0, 0.2);
        width: 100%;
        padding: 0 1rem;
      }
      .row {
        display: flex;
      }
      #title {
        background-color: red;
        width: 20%;
        font-size: 2rem !important;
        text-align: center;
        padding: 1rem;
        border: 1px solid black;
      }
      .column {
        width: 70%;
        border: 1px solid black;
      }
      .card-grid {
        display: grid;
        grid-template-columns: auto auto;

        width: 100%;
        font-size: 1rem;
      }

      .card-grid-many {
        display: grid;
        grid-template-columns: auto auto auto;

        width: 100%;
        font-size: 1rem;
      }

      .item-titles {
        grid-column-start: 1;
        grid-column-end: 10;
        text-align: center !important;
      }

      .card-grid > div,
      .card-grid-many > div {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: start;
        padding: 0.5rem;
        border: 1px solid black;
      }

      .item-title {
        grid-column-start: 1;
        grid-column-end: 3;
        text-align: center !important;
        background-color: yellow !important;
      }

      #giat-pmi {
        display: grid;
        grid-template-columns: auto auto auto;

        width: 100%;
        font-size: 1rem;
      }
      #giat-pmi > .item-title {
        grid-column-start: 1;
        grid-column-end: 5;
        text-align: center !important;
      }

      #personil {
        display: grid;
        grid-template-columns: auto auto auto;

        width: 100%;
        font-size: 1rem;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <!-- Dampak Section -->
      <div class="row">
        <div id="title" class="title">1. Umum</div>
        <div class="column">
          <div class="card-grid">
            <div class="item-title">Jenis Kejadian</div>
            <div class="subtitle">Bencana Alam</div>
            <div class="content">Banjir</div>
            <div class="subtitle">Konflik</div>
            <div class="content"></div>
            <div class="subtitle">Kecelakaan</div>
            <div class="content"></div>
            <div class="subtitle">Dan Lain Lain</div>
            <div class="content"></div>
          </div>
          <div class="card-grid">
            <div class="item-title">Tempat Kejadian</div>
            <div class="subtitle">Tanggal</div>
            <div class="content">20</div>
            <div class="subtitle">Waktu</div>
            <div class="content">405</div>
            <div class="subtitle">Provinsi</div>
            <div class="content">405</div>
            <div class="subtitle">Kabupaten</div>
            <div class="content">405</div>
            <div class="subtitle">Kecamatan</div>
            <div class="content">405</div>
            <div class="subtitle">Desa/ Kelurahan</div>
            <div class="content">405</div>
          </div>
        </div>
      </div>
      <!-- Mobilisasi Section -->
      <div class="row">
        <div id="title" class="title">2. Informasi Umum</div>
        <div class="column">
          <div class="card-grid">
            <div class="item-title">Jumlah Korban</div>
            <div class="subtitle">Meninggal</div>
            <div class="content">20</div>
            <div class="subtitle">Luka Berat</div>
            <div class="content">405</div>
            <div class="subtitle">Luka Ringan</div>
            <div class="content">405</div>
            <div class="subtitle">Luka Hilang</div>
            <div class="content">405</div>
          </div>
          <div class="card-grid">
            <div class="item-title">Pengungsi IDP</div>
            <div class="subtitle">Ada</div>
            <div class="content">Tidak Ada</div>
          </div>
          <div class="card-grid">
            <div class="item-title"></div>
            <div class="subtitle">Lokasi Pengungsian</div>
            <div class="content">20</div>
            <div class="subtitle">Jumlah</div>
            <div class="content">20</div>
          </div>
        </div>
      </div>
      <!-- Giat PMI Section -->
      <div class="row">
        <div id="title" class="title">3. Dampak Sarana Prasarana</div>
        <div class="column">
          <div class="card-grid">
            <div class="item-title"></div>
            <div class="subtitle">Rumah Tinggal</div>
            <div class="content">20</div>
            <div class="subtitle">Rusak Berat</div>
            <div class="content">405</div>
            <div class="subtitle">Rusak Ringan</div>
            <div class="content">405</div>
          </div>
          <div class="card-grid" id="giat-pmi">
            <div class="item-title">Akses Transportasi</div>
            <div class="subtitle">Jalan</div>
            <div class="content">20</div>
            <div class="subtitle">Berfungsi</div>
            <div class="subtitle">Tidak Berfungsi</div>
            <div class="subtitle">Jembatan</div>
            <div class="content">405</div>
            <div class="subtitle">Berfungsi</div>
            <div class="subtitle">Tidak Berfungsi</div>
            <div class="subtitle">Kendaraan Umum</div>
            <div class="content">405</div>
            <div class="subtitle">Berfungsi</div>
            <div class="subtitle">Tidak Berfungsi</div>
          </div>

          <div class="card-grid">
            <div class="item-title">Akses Komunikasi</div>
            <div class="subtitle">Telepon/Fax</div>
            <div class="content">20</div>
            <div class="subtitle">Telepon Seluler</div>
            <div class="content">405</div>
            <div class="subtitle">Kantor Pos</div>
            <div class="content">405</div>
            <div class="subtitle">Internet</div>
            <div class="content">405</div>
          </div>
          <div class="card-grid" id="giat-pmi">
            <div class="item-title">Sarana Umum</div>
            <div class="subtitle">RS</div>
            <div class="content">20</div>
            <div class="subtitle">Berfungsi</div>
            <div class="subtitle">Tidak Berfungsi</div>
            <div class="subtitle">Listrik</div>
            <div class="content">405</div>
            <div class="subtitle">Berfungsi</div>
            <div class="subtitle">Tidak Berfungsi</div>
            <div class="subtitle">Air</div>
            <div class="content">405</div>
            <div class="subtitle">Berfungsi</div>
            <div class="subtitle">Tidak Berfungsi</div>
            <div class="subtitle">Sekolah</div>
            <div class="content">405</div>
            <div class="subtitle">Berfungsi</div>
            <div class="subtitle">Tidak Berfungsi</div>
            <div class="subtitle">Tempat Ibadah</div>
            <div class="content">405</div>
            <div class="subtitle">Berfungsi</div>
            <div class="subtitle">Tidak Berfungsi</div>
          </div>
        </div>
      </div>
      <!-- Giat Pemerintah Section -->
      <div class="row">
        <div id="title" class="title">4.Situasi Keamanan</div>
        <div class="column">
          <div class="field">
            <p>Lokasi Aman</p>
          </div>
        </div>
      </div>
      <!-- Kebutuhan Section -->
      <div class="row">
        <div id="title" class="title">5. Tindakan yang sudah dilakukan</div>
        <div class="column">
          <div class="field">
            <p>-</p>
          </div>
        </div>
      </div>
      <!-- Personil CP Section -->
      <div class="row">
        <div id="title" class="title">Kebutuhan Mendesak</div>
        <div class="column">
          <div class="card-grid">
            <div class="item-title"></div>
            <div class="subtitle">Korban</div>
            <div class="Subtitle">PMI</div>
            <div class="content">-</div>
            <div class="content">--</div>
            <div class="content">-</div>
            <div class="content">--</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
