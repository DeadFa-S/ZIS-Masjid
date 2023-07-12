@extends('layouts.app')
@section('title', 'Profile - Masjid Miftahul Jannah')

@section('content')
    <div>
        <section id="profil" class="profile">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 aos-init aos-animate mt-4" data-aos="fade-left"
                        data-aos-delay="100" style="max-width: 500px">
                        <img src="img/masjid.jpeg" class="img-fluid" alt="Masjid" />
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content aos-init aos-animate mt-4"
                        data-aos="fade-right" data-aos-delay="100">
                        <h3>Sejarah Masjid Miftahul Jannah</h3>
                        <p class="fst-italic">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit
                            nobis ea id minima, aliquam hic nemo sunt sint autem provident
                            reiciendis, repudiandae nulla aspernatur dignissimos!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aspernatur mollitia exercitationem deleniti, dolor vero
                            praesentium molestias iure, sunt consequuntur, at accusamus dicta
                            sequi. Tenetur atque doloremque debitis porro ipsum unde.
                        </p>
                    </div>
                </div> --}}
                <div class="row my-5">
                    <div class="col-12 col-md-6 pe-md-5">
                        <h3>Sejarah Masjid Miftahul Jannah</h3>
                        <p class="fst-italic">
                            Masjid Miftahul Jannah adalah Masjid Jami’ yang berlokasi di Perumahan Jatibening Dua, Jalan Jati Utama Raya, Jatibening Baru, Pondok Gede, Bekasi. Masjid Miftahul Jannah didirikan pada tahun 1985 masjid dengan kapasitas 150 jemaah, kemudian pada tahun 1995 - 2000 diperluasnya masjid menjadi 2 lantai sehingga masjid tersebut dapat memuat kapasitas jamaah yang lebih banyak, masjid miftahul jannah diresmikan oleh tokoh masyarakat yang bernama H. Sultan Dakhir.
                        </p>
                        <img src="img/2019-05-10.jpg" class="img-fluid w-100 mt-3" alt="Masjid1" style="max-height: 250px ; object-fit:cover" />
                    </div>
                    <div class="col-12 col-md-6 ps-md-5">
                        <img src="img/masjid.jpeg" class="img-fluid w-100 mb-3" alt="Masjid2" style="max-height: 250px ; object-fit:cover" />
                        <p class="fst-italic">
                            Dalam menjalankan kegiatannya, dewan kemakmuran masjid dibagi menjadi 2 kelompok yaitu kelompok program pokok/utama dan program penunjang. Program pokok diantaranya kegiatan dakwah, kegiatan penyelenggaraan Perayaan Hari Besar Islam (PHBI), kegiatan sosial & ZIS, dan kegiatan sarana/prasarana & umum. Program penunjang dibagi menjadi dua yaitu kegiatan humas/publikasi dan kegiatan dana/usaha.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
