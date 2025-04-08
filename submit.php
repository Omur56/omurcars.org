<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST["ad"];
    $email = $_POST["email"];
    $odeme = $_POST["odeme"];
    $ip = $_SERVER['REMOTE_ADDR'];

    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir);
    }

    $filePath = $uploadDir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $filePath)) {
        $mesaj = "Yeni elan göndərildi:\n";
        $mesaj .= "Ad: $ad\n";
        $mesaj .= "Email: $email\n";
        $mesaj .= "Ödəniş: $odeme AZN\n";
        $mesaj .= "IP ünvanı: $ip\n";
        $mesaj .= "Şəkil: " . $_FILES["image"]["name"];

        $to = "omurabdullayev7@gmail.com";
        $subject = "Yeni Elan";
        $headers = "From: noreply@localhost";

        mail($to, $subject, $mesaj, $headers);

        header("Location: thank_you.html");
        exit();
    } else {
        echo "Şəkil yüklənərkən xəta baş verdi.";
    }
} else {
    echo "POST sorğusu deyil.";
}
?>