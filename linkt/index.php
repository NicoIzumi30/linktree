<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uriSegments[2] == null) {
    header("Location: https://instagram.com/niczumi");
    exit();
}
require "koneksi.php";
$query1 = mysqli_query($conn, "SELECT * FROM user WHERE username = '$uriSegments[2]'");
$user = mysqli_fetch_assoc($query1);
if ($user == null) {
    header("Location: https://instagram.com/niczumi");
    exit();
}
$id = $user['id'];
$query2 = mysqli_query($conn, "SELECT * FROM link WHERE user_id = '$id' ");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Tree</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .icon {
            filter: invert(100%);
        }

        .scalee {
            transition: all .2s ease-in-out;
        }

        .scalee:hover {
            scale: 1.05;
        }
    </style>
</head>

<body class="bg-zinc-900 text-white flex flex-col text-xl font-figtree">
    <main class="max-w-4xl m-auto p-3">
        <section class="grid place-items-center text-center py-14">
            <img class="rounded-full w-32 h-32 my-5" src="http://localhost:8080/linktree/assets/image/profile/<?= $user['image']; ?>" />
            <h1 class="text-3xl mb-3"><?= $user['name']; ?></h1>
            <h2 class="text-xl text-zinc-300"><?= $user['deskripsi']; ?></h2>
        </section>
        <section class="max-w-xl m-auto">
            <?php
            $data = mysqli_fetch_assoc($query2);
            if (mysqli_num_rows($query2) > 0) {
                $no = 1;

                do {
                    $id_kategori = $data['id_kategori'];
                    $query3 = mysqli_query($conn, "SELECT * FROM kategori WHERE id_kategori = '$id_kategori' ");
                    $data2 = mysqli_fetch_assoc($query3);
            ?>
                    <a href="<?= $data['url'] ?>" target="_blank">
                        <div class="bg-zinc-800 hover:bg-zinc-700 transition-colors shadow-lg border-t-2 border-zinc-700 border-zinc-700 p-3 m-4 rounded-xl flex justify-evenly items-center scalee">
                            <img src="http://localhost:8080/linktree/assets/image/kategori/<?= $data2['image']; ?>" alt="" class="iconn" width="28px">
                            <p class="text-zinc-300"><?= $data2['kategori']; ?></p>
                            <div class="spacer"></div>
                        </div>
                    </a>
            <?php } while ($data = mysqli_fetch_assoc($query2));
            } else {
                echo 'gagal';
            }
            ?>

        </section>
    </main>
    <footer class="text-center text-zinc-400 my-10 px-5">
        Made with <span class="text-red-500">❤</span> by <a href="https://niczumi.my.id" target="_blank" class="text-sky-500 hover:underline">Nico Izumi</a>
    </footer>
</body>

</html>