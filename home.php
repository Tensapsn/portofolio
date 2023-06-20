<head>
  <title>Beranda</title>
  <style>
    /* style for the container div */
    .halaman {
      background-color: #f2f2f2;
      padding: 20px;
      border: 1px solid #ccc;
      margin: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    }

    /* style for the heading */
    h2 {
      font-size: 36px;
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    /* style for the paragraph */
    p {
      font-size: 20px;
      line-height: 1.5;
      color: #666;
      margin-bottom: 20px;
      text-align: center;
    }

    /* style for the heading 3 */
    h3 {
      font-size: 24px;
      color: #333;
      margin-bottom: 10px;
      margin-top: 40px;
      text-align: center;
    }

    ul {
      font-size: 16px;
      color: #666;
      margin-left: 20px;
      margin-bottom: 20px;
    }

    li {
      margin-bottom: 10px;
    }

    header {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-bottom: 30px;
    }

    .title {
      font-size: 48px;
      font-weight: bold;
      color: #343a40;
      text-align: center;
      margin-bottom: 10px;
    }

    .subtitle {
      font-size: 24px;
      font-weight: normal;
      color: #868e96;
      text-align: center;
    }

    section {
      margin-bottom: 30px;
    }

    .picture {
      display: block;
      margin: 0 auto;
      border-radius: 50%;
      height: auto;
      border: 5px solid black;
      top: 30px;
      left: 30px;
    }

    p a {
      font-weight: bold;
    }

    h2 {
      text-align: center;
    }

    .container {
      margin-bottom: 30px;
    }

    .container h2 {
      font-size: 24px;
      margin-bottom: 10px;
      text-align: center;
    }

    .container p {
      font-size: 16px;
      margin-bottom: 20px;
      text-align: center;
    }

    .container ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .container li {
      font-size: 14px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
    }

    .container li img {
      margin-right: 5px;
      height: 16px;
      width: 16px;
    }

    .container li a {
      color: #333;
      text-decoration: none;
    }

    .container li a:hover {
      color: #0066cc;
    }

/* Style the heading */
h3 {
  color: #333;
}

/* Style the list */
ul {
  list-style-type: disc;
  margin-left: 20px;
}

/* Style the list items */
li {
  color: #666;
  margin-bottom: 5px;
}

/* Style nested lists */
ul ul {
  list-style-type: circle;
  margin-left: 20px;
}

/* Style the nested list items */
ul ul li {
  color: #999;
}

/* Add some spacing between the sections */
h3 + ul {
  margin-top: 10px;
}

ul ul + li {
  margin-top: 10px;
}

  </style>
</head>

<body>
  <div class="halaman">
    <h2>Halaman Depan</h2>
    <p>Selamat datang di halaman beranda!</p>
  </div>

  <div>
    <img class="picture" src="https://i.pinimg.com/originals/0b/ec/c9/0becc93fd154ccd01ec2e14587f78262.gif" width="150px">
  </div>

  <header>
    <h1 class="title">About the Creator</h1>
    <h2 class="subtitle">Who am I?</h2>
  </header>

  <div class="container">
    <section>
      <h2 class="header">Introduction</h2>
      <p><a>Muhammad Tensa Anargya Rooseno</a> itu adalah nama saya. Saya merupakan seorang siswa di <a>SMK WIKRAMA BOGOR</a> dan mengambil jurusan di bidang <a>PPLG</a>. Saya membuat website ini sebagai bagian dari sebuah project dan sebagai Portofolio untuk mendemonstrasikan kemampuan saya dalam pembuatan website.</p>
    </section>
  </div>


    <h3>Apa yang Baru:</h3>
    <ul>
      <li>Menambahkan sistem login yang berfungsi</li>
      <li>Menambahkan sistem registrasi yang berfungsi</li>
      <li>Menambahkan halaman profil yang berfungsi</li>
      <li>Menambahkan sistem log out yang berfungsi</li>
      <li>Menambahkan tombol kembali yang berfungsi</li>
      <li>Memisahkan pesan kesalahan untuk input username dan password pada saat login</li>
      <li>Menambahkan sistem untuk mencegah pengguna mengakses halaman login setelah sudah login</li>
      <li>Menambahkan Gallery:</li>
      <ul>
        <li>Menambahkan gambar</li>
        <li>Menghapus gambar</li>
        <li>Menyimpan gambar</li>
        <li>Menampilkan gambar</li>
        <li>Mengupdate gambar</li>
        <li>Sistem keamanan</li>
      </ul>
      <li>Mengupdate tema website</li>
      <li>Menambahkan sistem captcha pada login dan registrasi</li>
      <li>Mengupdate halaman kontak</li>
      <li>Menambahkan Minigames:</li>
      <ul>
        <li>Minigame Hangman</li>
        <li>Minigame Memory Game</li>
        <li>Minigame Tic Tac Toe</li>
      </ul>
      <li>Menambahkan Loading screen</li>
      <li>Menambahkan Scroll Bar</li>
    </ul>

<div id="kontak-section">
  <div class="container">
    <h2>Halaman Kontak</h2>
    <p>Berikut adalah beberapa cara untuk menghubungi saya:</p>
    <ul>
      <li>
        <img src="discord-logo.png" alt="Discord logo">
        <a href="https://discord.com/username">Discord: @sethires</a>
      </li>
      <li>
        <img src="twitter-logo.png" alt="Twitter logo">
        <a href="https://twitter.com/username">Twitter: @TensaRooseno</a>
      </li>
      <li>
        <img src="instagram-logo.png" alt="Instagram logo">
        <a href="https://instagram.com/username">Instagram: @10sapsn</a>
      </li>
      <li>
        <img src="email-logo.png" alt="Email logo">
        <a href="mailto:email@example.com">Email: tensapsn@gmail.com</a>
      </li>
    </ul>
  </div>
</div>
</body>
