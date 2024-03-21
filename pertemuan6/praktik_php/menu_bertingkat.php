<?php

//membuat sebuah variabel menu yang menyatakan pilihan dari banyaknya variabel yang dibuat
//menggabungkan antara indeks array dan multidimensi array
$menu = [
    [
        "Nama" => "Beranda"
    ],
    [
        "Nama" => "Berita",
        "subMenu" => [
            [
                "Nama" => "Wisata",
                "subMenu" => [
                    [
                        "Nama" => "Pantai"
                    ],
                    [
                        "Nama" => "Gunung"
                    ]
                ]
            ],
            [
                "Nama" => "Kuliner"
            ],
            [
                "Nama" => "Hiburan"
            ]
        ]
    ],
    [
        "Nama" => "Tentang"
    ],
    [
        "Nama" => "Kontak"
    ]
];

//membuat fungsi utama 
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['Nama']}</li>"; 
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']); 
        }
    }
    echo "</ul>";
}

//menampilkan hasil dengan memanggil dari fungsi yang sudah dibuat dengan metode rekursif
tampilkanMenuBertingkat($menu);
?>


