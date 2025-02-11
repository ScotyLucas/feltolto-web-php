<?php
ini_set('upload_max_filesize', '10G');
ini_set('post_max_size', '10G');
ini_set('max_execution_time', 600);
ini_set('max_input_time', 600);

$uploadDir = [
    "film" => "/elérési/út/hova/rakja/",
    "sorozat" => "/elérési/út/hova/rakja/"
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_FILES["file"])) {
        die("Hiba: Nincs fájl kiválasztva.");
    }
    if (!isset($_POST["category"])) {
        die("Hiba: Nincs kategória kiválasztva.");
    }

    $category = $_POST["category"];
    
    if (!array_key_exists($category, $uploadDir)) {
        die("Hiba: Érvénytelen kategória.");
    }

    $targetDir = $uploadDir[$category];
    if (!is_dir($targetDir)) {
        die("Hiba: A célkönyvtár nem létezik.");
    }

    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "Sikeresen feltöltve: " . $fileName;
    } else {
        echo "Hiba történt a feltöltés közben.";
    }
} else {
    die("Hibás kérés.");
}
?>
