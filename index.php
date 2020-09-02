<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style/bulma.css">
    <title>Validasi Formulir</title>
</head>
<body>
    <!-- MEMBUAT BACKGROUND FULLSCREEN -->
    <section class="hero is-primary is-bold is-fullheight">
        <div class="hero-body">
            <div class="container">
                <!-- MEMBUAT BARIS -->
                <div class="columns is-centered">
                    <!-- MEMBUAT KOLOM -->
                    <div class="column is-three-fifths">
                        <!-- MEMBUAT BOX -->
                        <div class="box">
                            <h2 class="subtitle has-text-centered has-text-black">Tugas Pemrograman Web</h2>
                            <h1 class="title has-text-centered has-text-black">VALIDASI FORMULIR</h1>
                            <div class="columns level">

                                <!-- FORM UPLOAD FILE -->
                                <form class="column is-half" action="upload.php" method="post" enctype="multipart/form-data">
                                    <!-- BUTTON UPLOAD -->
                                    <div class="field">
                                        <div id="upload-form" class="file is-centered is-primary is-boxed has-name">
                                            <label class="file-label">
                                                <!-- UPLOAD FORM (hanya menerima .pdf dan .jpeg) -->
                                                <input class="file-input" type="file" name="berkas" accept=".pdf, .jpeg">
                                                <span class="file-cta">
                                                    <span class="file-icon">
                                                        <i class="fas fa-upload"></i>
                                                    </span>
                                                    <span class="file-label">
                                                        Choose a file
                                                    </span>
                                                </span>
                                                <span class="file-name has-text-centered">
                                                    No file choosen
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- TOMBOL SUBMIT -->
                                    <div class="field is-grouped is-grouped-centered">
                                        <div class="control">
                                            <button type="submit" class="button is-primary">Upload</button>
                                        </div>
                                    </div>
                                </form>

                                <!-- FORM LOGIN -->
                                <form class="column is-half" method="POST" action="welcome.php">
                                    <!-- FIELD UNTUK USERNAME -->
                                    <div class="field">
                                        <label for="" class="label">Username</label>
                                        <div class="control has-icons-left">
                                            <input name="uname" type="text" class="input" placeholder="Username">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- FIELD UNTUK PASSWORD -->
                                    <div class="field">
                                        <label for="" class="label">Password</label>
                                        <div class="control has-icons-left">
                                            <input name="pass" type="password" class="input" placeholder="Password">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- TOMBOL SUBMIT & RESET -->
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <input type="submit" class="button is-primary">
                                        </div>
                                        <div class="control">
                                            <input type="reset" class="button is-primary is-light">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="has-text-centered">© 2020 Bintang Pradana E. P. <strong>M0518010</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- FONT AWESOME UNTUK ICON -->
    <script src="https://kit.fontawesome.com/b5b638f7ba.js" crossorigin="anonymous"></script>
    <!-- JAVASCRIPT UNTUK MENAMPILKAN NAMA FILE (didapatkan dari dokumentasi Bulma) -->
    <script>
        const fileInput = document.querySelector('#upload-form input[type=file]');
        fileInput.onchange = () => {
            if (fileInput.files.length > 0) {
                const fileName = document.querySelector('#upload-form .file-name');
                fileName.textContent = fileInput.files[0].name;
            }
        }
    </script>
</body>
</html>