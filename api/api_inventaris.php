<?php
header('content-type: application/json');

$request = $_SERVER['REQUEST_METHOD'];

switch ($request) {
    case 'GET':
        getmethod();
        break;

    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        putmethod($data);
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        postmethod($data);
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        deletemethod($data);
        break;

    default:
        echo '{"name": "data not found"}';
        break;
}
// data read part are here
function getmethod()
{
    // Koneksi database
    include_once('../koneksi.php');

    $sql = "SELECT * FROM inventaris_barang";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Jika data tidak kosong
        $rows = array();
        while ($r = mysqli_fetch_assoc($result)) {
            $rows["result"][] = $r;
        }
        echo json_encode($rows);
    } else {
        echo '{"result": "no data found"}';
    }
}

function postmethod()
{
    include_once('../koneksi.php');

    $nama_barang = $_GET['nama_barang'];
    $jumlah      = $_GET['jumlah'];
    $kondisi     = $_GET['kondisi'];
    $lokasi      = $_GET['lokasi'];

    $sql = "INSERT INTO inventaris_barang(nama_barang,jumlah,kondisi,lokasi)
            VALUES ('$nama_barang', '$jumlah', '$kondisi', '$lokasi')";

    if (mysqli_query($mysqli, $sql)) {
        echo '{"result":"data inserted"}';
    } else {
        echo '{"result":"data not inserted"}';
    }
}

function putmethod()
{
    include_once('../koneksi.php');

    $nama_barang  = $_GET['nama_barang'];
    $jumlah       = $_GET['jumlah'];
    $kondisi      = $_GET['kondisi'];
    $lokasi       = $_GET['lokasi'];

    $sql = "UPDATE inventaris_barang 
            SET nama_barang='$nama_barang',
                jumlah='$jumlah',
                kondisi='$kondisi',
                lokasi='$lokasi'
            WHERE nama_barang='$nama_barang'";

    if (mysqli_query($mysqli, $sql)) {
        echo '{"result":"data updated"}';
    } else {
        echo '{"result":"data not updated"}';
    }
}

function deletemethod()
{
    include_once('../koneksi.php');

    $nama_barang = $_GET['nama_barang'];

    $sql = "DELETE FROM inventaris_barang 
            WHERE nama_barang='$nama_barang'";

    if (mysqli_query($mysqli, $sql)) {
        echo '{"result":"data deleted"}';
    } else {
        echo '{"result":"data not deleted"}';
    }
}
