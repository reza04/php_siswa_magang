<?php
$data_siswa=[];

while(true)
{
    //  Data siswa
    
    $siswa=&$data_siswa;
    
    // Banner Aplikasi
    
    tampil("Data siswa Magang TOP");
    tampil("=====================");
    
    // User input data siswa magang
    
    $input_siswa=readline("Masukkan data siswa ? ");
    
    // validasi huruf 
    
    if(!preg_match("/^[a-zA-Z]*$/",$input_siswa) || empty($input_siswa)){
        echo "\n";
        echo "tolong masukkan huruf !"."\n";
        continue;
        
    }
    
    // Simpan data siswa
    
    $siswa[]=$input_siswa;
    
    // Munculkan data siswa
    
    $nomor=1;
    
    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }
    
    // Tanya User untuk memasukkan
    tanyaUser();
    
}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya = readline("Tambah data ? (yes/no)");
    
    if($tanya == "no" || $tanya!=="yes")
    {
        tampil("Terima Kasih");
        exit;
    }
}

function tampilData($date)
{
    $nomor = 1;
    
    foreach ($data as $key){
        tampil("$nomor.$key");
        $nomor++;
    }
}

function menuAplikasi()
{
    $data=["input data","update data","delete data","lihat data"];
}










