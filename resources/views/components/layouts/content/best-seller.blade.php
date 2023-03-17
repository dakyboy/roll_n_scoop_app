@php
    use Cloudinary\Cloudinary;
    use Cloudinary\Transformation\Resize;
    $cloudinary = new Cloudinary();
@endphp

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
            <p>Weed Cookie Special</p>
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
            <p>Bogoya Splash Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__6_cngwos')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>Cream Liqueur Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__20_yn8f11')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <a>
            <p>Weed Cookie Special</p>
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
