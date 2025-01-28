<?php
$projects = [
    ["title" => "Project One", "description" => "Sertifikasi Kompeten BNSP Operator Komputer Madya.", "image" => "https://via.placeholder.com/300"],
    // Tambahkan proyek lainnya jika ada
];

foreach ($projects as $project) {
    echo "<div class='col-md-4'>
            <div class='portfolio-item'>
                <img src='" . $project['image'] . "' alt='" . $project['title'] . "' class='img-fluid'>
                <h3 class='mt-2'>" . $project['title'] . "</h3>
                <p>" . $project['description'] . "</p>
            </div>
        </div>";
}
?>
