<?php

function salam(){
    return "Selamat Datang di Sistem Pendataan Mahasiswa";
}

function jumlahData($conn){
    $query = mysqli_query($conn,"SELECT * FROM mahasiswa");
    return mysqli_num_rows($query);
}

?>
