<!DOCTYPE html>
<html>
<head>
    <title>Backup Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h2>Backup Database</h2>
    <ul>
        <li class="btn btn-success"><a href="index.php?page=add-backup">Backup Database</a></li>
    </ul>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                
                <th>Nama DataBase</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        function lihatDanHapusFileDiFolder($folderPath) {
            // Mengecek apakah folder valid
            if (!is_dir($folderPath)) {
                echo "Folder tidak valid.";
                return;
            }

            // Mendapatkan daftar file dalam folder
            $files = scandir($folderPath);

            // Menampilkan daftar file
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    $filePath = $folderPath . '/' . $file;
                    echo "<tr>";
echo "<td>" . $file . "</td>";
echo "<td>";
echo "<a href=\"$filePath\" download><i class=\"fa fa-download\"></i> Download</a>";
echo "<a href=\"index.php?page=del-backup&file=$filePath\"><i class=\"fas fa-trash\"></i> Hapus</a>";
echo "</td>";
echo "</tr>";


                    
                }
            }
        }

        // Contoh penggunaan fungsi
        $folder = "backupdatabase"; // Ganti dengan path ke folder yang diinginkan
        lihatDanHapusFileDiFolder($folder);
        ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
