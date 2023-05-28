<header class="mobile-header-1">
    <div class="container">
        <!-- menu icon -->
        <div class="menu-icon d-inline-flex mr-4">
            <button>
                <span></span>
            </button>
        </div>
        <!-- logo image -->
        <div class="site-logo">
            <a href="index-dark.html">
                <img src="images/logo.svg" alt="Bolby" />
            </a>
        </div>
    </div>
</header>


<!-- desktop header -->
<header class="desktop-header-1 d-flex align-items-start flex-column">

    <!-- logo image -->
    <div class="site-logo">
        <a href="index-dark.html">
            <img src="images/logo.svg" alt="Bolby" />
        </a>
    </div>

    <!-- main menu -->
    <nav>
        <ul class="vertical-menu scrollspy">
            <li class="active"><a href="#home"><i class="icon-home"></i>Home</a></li>
            <li><a href="#about"><i class="icon-user-following"></i>About</a></li>
            <li><a href="#services"><i class="icon-briefcase"></i>Services</a></li>
            <li><a href="#experience"><i class="icon-graduation"></i>Experience</a></li>
            <li><a href="#works"><i class="icon-layers"></i>Works</a></li>
            <li><a href="#contact"><i class="icon-bubbles"></i>Contact</a></li>

            <label class="switch mt-3">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>

        </ul>
    </nav>

    <!-- site footer -->
    <div class="footer">
        <!-- copyright text -->
        <span class="copyright">© 2023 Built with love by Kamil.</span>
    </div>


    <script>
        $(document).ready(function () {
            // Mendeteksi perubahan pada toggle switch
            $('#language-switch').change(function () {
                if ($(this).is(':checked')) {
                    changeLanguage('en');
                } else {
                    changeLanguage('id');
                }
            });

            // Fungsi untuk mengubah bahasa
            function changeLanguage(language) {
                // Lakukan pengiriman request ke backend Laravel untuk mengubah bahasa sesuai dengan nilai variabel 'language'
                // Contoh:
                $.ajax({
                    url: '/change-language', // Ganti dengan URL endpoint untuk mengubah bahasa di Laravel
                    type: 'POST',
                    data: {
                        language: language
                    },
                    success: function (response) {
                        // Proses berhasil, lakukan tindakan tambahan jika diperlukan
                    },
                    error: function () {
                        // Terjadi kesalahan, lakukan penanganan kesalahan jika diperlukan
                    }
                });
            }
        });

    </script>

</header>
