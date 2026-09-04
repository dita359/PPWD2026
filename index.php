<!DOCTYPE html>
<?php
$nama  = "Utin Dita Aryana";
$prodi = "Sistem Informasi";
$hobi = [
    "Mendengarkan Musik",
    "Membaca Buku",
    "Menonton Film",
    "Traveling",
];
$musik = [
    ["band" => "Arctic Monkeys",        "lagu" => "7",             "link" => "https://youtu.be/hmoKkjG7gmw?si=myrGf3KWRD7-Dj5i"],
    ["band" => "One Direction",         "lagu" => "One Thing",     "link" => "https://youtu.be/Y1xs_xPb46M?si=XjdstAboXEJWSLA6"],
    ["band" => "Oasis",                 "lagu" => "Live Forever",  "link" => "https://youtu.be/TDe1DqxwJoc?si=FgJc3iK5eR_ZJDNZ"],
    ["band" => "Blur",                  "lagu" => "Country House", "link" => "https://youtu.be/TQyWWRnmxAc?si=Jak9Ds8zyNbBqN8G"],
    ["band" => "My Chemical Romance",   "lagu" => "Cancer",        "link" => "https://youtu.be/wc2s9skF_58?si=hSBLJ99heXBSBXWq"],
    ["band" => "Radiohead",             "lagu" => "Let Down",      "link" => "https://youtu.be/ZVgHPSyEIqk?si=O4rTmU5ev1oZ19H-"],
];
?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil <?php echo $nama; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <img class="foto-profil" src="Foto/me.jpg" alt="Foto Profil">
    <h1><?php echo $nama; ?></h1>
    <p><?php echo $prodi; ?></p>
</header>
<nav class="nav">
    <a href="#tentang">Tentang</a>
    <a href="#hobi">Hobi</a>
    <a href="#grup musik">Grup Musik</a>
    <a href="#kontak">Kontak</a>
</nav>
<main class="konten">
    <section id="tentang">
        <h2>Tentang Saya</h2>
        <p>
            Halo! Saya <?php echo $nama; ?>, mahasiswa Program Studi
            <?php echo $prodi; ?> angkatan 2025.
        </p>
        <p>
            Saya sedang belajar membuat halaman web menggunakan HTML, CSS, dan PHP.
        </p>
        <h3>Daftar Hobi</h3>
        <ul class="daftar-hobi">
            <?php foreach ($hobi as $item): ?>
                <li><?php echo $item; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section id="jadwal">
        <h2>Penyanyi Favorit</h2>
        <table>
            <tr>
                <th>Nama Band</th>
                <th>Lagu Favorit</th>
                <th>Link YouTube</th>
            </tr>
            <?php foreach ($musik as $m): ?>
            <tr>
                <td><?php echo $m["band"]; ?></td>
                <td><?php echo $m["lagu"]; ?></td>
                <td>
                    <a href="<?php echo $m["link"]; ?>" target="_blank">
                        Dengarkan di YouTube
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <section id="kontak">
        <h2>Formulir Kontak</h2>
        <form>
            <label for="nama">Nama</label>
            <input type="text" id="nama" placeholder="Tulis nama Anda">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="nama@email.com">
            <label for="pesan">Pesan</label>
            <textarea id="pesan" rows="4" placeholder="Tulis pesan..."></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>
</main>
<footer class="footer">
    <p>&copy; 2026 <?php echo $nama; ?>. Dibuat dengan HTML, CSS &amp; PHP.</p>
</footer>
</body>
</html>