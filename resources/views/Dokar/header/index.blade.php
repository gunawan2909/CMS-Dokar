<header>
    <img id="navbar" @click="showItems=!showItems" src="/src/3Bar.png" />

    <transition name="slide">
        <div v-show="showItems" class="slidebar">
            <div id="closebtn">
                <button @click="showItems=!showItems" id="closebtn">X</button>
            </div>
            <div>
                <img src="/src/image 23.png" />
            </div>
            <a href="/home">Home</a>
            <a href="/profile">Profil</a>
            <a href="/pelayanan">Pelayanan</a>
            <a href="/produkhukum">Produk Hukum</a>
            <a href="/hubungi">Hubungi Kami</a>
        </div>
    </transition>
    <div class="login">
        <a class="boxlogin" href="http://dokar.dishub.grobogan.go.id/dokar/ekir/">
            <p>Login</p>
        </a>
    </div>
    <div>
        <div class="logo_box">
            <img id="logo" src="/src/image 23.png" />
            <div class="tekslogo_container">
                <h1 id="judul">DOKAR <span>GROBOG</span></h1>
                <h6 id="deskripsi">
                    Data Online Kendaraan Bermotor Dishub Kabupaten Grobogan
                </h6>
            </div>
        </div>

        <div class="NamaPage">
            <h1 id="NamaPageJudul">{{ $page }}</h1>
            <div id="garisbawah"></div>
        </div>
    </div>
    <div>
        <div class="search_box">
            <input id="input" type="text" placeholder="Search" />
            <img id="search" src="/src/Search Icon.png" />
        </div>
    </div>
</header>
