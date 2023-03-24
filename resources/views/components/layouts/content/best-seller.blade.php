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
        max-height: calc(80vh + 4rem);
        max-width: 80%;
        overflow-y: auto;
        scrollbar-color: white #ff5dff;
        scrollbar-width: thin;
        -ms-overflow-style: none;
        scroll-behavior: smooth;
        display: flex;
        flex-flow: row wrap;
        justify-content: flex-start;
        margin: 2rem auto;
        padding: 2rem 2%;
        align-items: center;
        gap: 2rem 1rem;
        background-color: rgba(255, 20, 200, 0.28);
        z-index: 200;
    }

    .product-container {
        display: flex;
        flex-flow: column wrap;
        align-items: center;
        border: white.4rem solid;
        border-radius: 10px;
        margin: .5rem auto;
        padding: .3rem;
        z-index: 220;
    }

    .product-container a {
        color: black;
    }

    



    img {
        aspect-ratio: 1 / 1;
        height: 250px;
        width: 250px;
    }

</style>

<h3 id="best-sellers-title">Don't let our best deals <span>MELT AWAY!</span></h3>
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
