@php
    use Cloudinary\Cloudinary;
    use Cloudinary\Transformation\Resize;
    $cloudinary = new Cloudinary();
@endphp

<style>
    .main-container h3 {
        border-top: #B55DFF .1rem solid;
        margin-top: 3%;
        padding: 1rem 5% 0;
        text-align: center;
    }

    .best-seller-container {
        max-height: calc(100vh + 4rem) ;
        max-width: 80%;
        overflow-y: scroll;
        scrollbar-color: white #ff5dff;
        scrollbar-width: thin;
        -ms-overflow-style: none;
        scroll-behavior: smooth;
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
        margin: 2rem auto;
        padding: 0 2%;
        align-items: center;
        gap: 2rem 1rem;
    }

    .product-container {
        display: flex;
        flex-flow: column wrap;
        align-items: center;
        border: white.4rem solid;
        border-radius: 10px;
        margin: .5rem auto;
    }

    .product-container a {
        color: black;
    }

    

    img {
        aspect-ratio: 1 / 1;
        height: 250px;
        width: 250px;
    }

    /*for mobile devices with max decive width of 500*/
    @media screen and (max-device-width: 500px) {
        .main-container h3 {
            margin-top: 3%;
        }
    }


    /*for mobile devices with max decive width of 1200*/
    @media screen and (min-width: 870px) {
        .main-container h3 {
            margin-top: -8rem;
        }
        .best-seller-container {
            scroll-behavior: auto;
        }
    }
</style>

<h3>Don't let our best deals <span>MELT AWAY!</span></h3>
<section class="best-seller-container">
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__2_r99upm')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>Bogoya Splash Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__21_i6rarj')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>Cream Liqueur Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__3_zy8rcb')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>THC/CBD Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__4_y97tal')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>BYOT Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__5_ayzjkl')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>Strawberry Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__6_cngwos')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>Caramel & Coffee Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__20_yn8f11')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>Blueberry Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__18_o3bdjb')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>BYOT Special</p>
        </a>
    </div>
</section>
