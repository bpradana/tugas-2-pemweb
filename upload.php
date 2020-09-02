<?php
//ambil data file dari upload form 'berkas'
$allowed = array('pdf', 'jpeg');                //array berisi ekstensi yang di
$fileName = $_FILES['berkas']['name'];          //mengambil nama file
$ext = pathinfo($fileName, PATHINFO_EXTENSION);  //mengambil ekstensi
$tempFileName = $_FILES['berkas']['tmp_name'];  //mengambil temporary file name

$directory = "file_upload/";                    //menentukan direktori, pada kasus ini direktori bernama 'file_upload'


if (in_array($ext, $allowed)) {                 //mengecek jika extension ada di daftar

    //memindahkan file dari temporary location ke direktori yang sudah ditentukan
    $uploaded = move_uploaded_file($tempFileName, $directory.$fileName);

    //kondisi jika sukses upload dan gagal upload
    if($uploaded){
        $result = "✅ UPLOAD SUCCESS";
    } else $result = "❎ UPLOAD FAILED";
} else $result = "❎ UPLOAD FAILED";
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style/bulma.css">
    <title>Upload</title>
</head>
<body>
    <section class="hero is-primary is-bold is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-three-fifths">
                        <div class="box has-text-centered">
                            <div class="column">
                                <h1 class="is-size-2"><?php echo $result;?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://kit.fontawesome.com/b5b638f7ba.js" crossorigin="anonymous"></script>
</body>
</html>