<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <nav class="isi">
            <div class="merek">
                <div class="nama">Toko Baju Hasbi</div>
            </div>
            <ul class="navigasi">
                <li><a href="#">Home</a></li>
                <li><a href="#aboutme">About Me</a></li>
                <li><a href="#katalog">Katalog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="loginform.php">Login</a></li>
                <li><a id="dark-mode-button" onclick = "ppbox()">Mode Gelap</a></li>
            </ul>
        </nav>
    </div>

    <div class="hero">
        <div class="box-hero">
            <div class="profile">
                <h1>Selama Datang di <br>Toko Baju Hasbi</h1>
                <p></p>
            </div>
            <div class="gambar">
                <img src="tokobaju.jpg" alt="">
            </div>
        </div>
    </div>

    <div id="aboutme" class="aboutme">
        <div class="boxaboutme">
            <div class="gambar">
                <img src="poto.png" alt="">
            </div>
            <div class="about">
                <div class="profile">
                    <h1>About Me</h1>
                    <p>Halo Teman Teman, Perkenalkan nama saya Hasbi Rizky Rahmadani, Tahun ini saya berusia 19 tahun, Saya memiliki minat dalam olahraga lebih tepatnya olahraga basket dan saya juga memiliki minat terhadap codingan, saya merasa cukup antusias terhadap minat yang saya miliki.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="katalog" class="katalog">
        <div class="hero-katalog">
            <div class="judul">
                <h1>Katalog</h1>
            </div>
            <div class="card">
                <!-- <img src="tokobaju.jpg" alt=""> -->
            </div>
        </div>
    </div>

    <footer>
        <div id="contact" class="contact">
            <h1>Contact</h1>
        </div>
        <div class="links">
            <a href="">Instagram</a>
            <a href="">Facebook</a>
            <a href="">Whatsapp</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            const darkmodeToggle = document.getElementById('dark-mode-button')
            darkmodeToggle.addEventListener('click', function() {
                const theme = $('html').attr('data-theme');
                if(theme == 'light') {
                // * CHANGE TO DARK
                    $('html').css({'filter': 'invert(1)'})
                    $('html').attr('data-theme', 'dark');
                    $('ul').addClass('dark-mode');
                }
                else {
              // * CHANGE TO LIGHT
                    $('html').removeAttr('style');
                    $('html').attr('data-theme', 'light')
                    $('ul').removeClass('dark-mode');
                }
            });
        });
    </script>
    <script>
        function ppbox(){
            alert("Klik OK jika ingin merubah tampilan")
        }
    </script>
</body>
</html>