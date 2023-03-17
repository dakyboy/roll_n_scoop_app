@php
    use Cloudinary\Cloudinary;
    use Cloudinary\Transformation\Resize;
    $cloudinary = new Cloudinary();
@endphp

<h3>Don't let our best deals <span>MELT AWAY!</span></h3>
<section class="best-seller-container">
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('hunger_warrior_android/hw_browse_foods')->resize(Resize::fill(480, 800))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="480" height="800" loading="lazy" />
        </picture>
        <a>
            <p>Bogoya Splash Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('hunger_warrior_android/hw_order_item_details')->resize(Resize::fill(480, 800))->toUrl() }}"
                alt="App screenshot of order item details" width="480" height="800" loading="lazy" />
        </picture>
        <a>
            <p>Cream Liqueur Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('hunger_warrior_android/hw_cart')->resize(Resize::fill(480, 800))->toUrl() }}"
                alt="App screenshot of cart" width="480" height="800" loading="lazy" />
        </picture>
        <a>
            <p>Weed Cookie Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('hunger_warrior_android/hw_completed_orders')->resize(Resize::fill(480, 800))->toUrl() }}"
                alt="App screenshot of completed orders screen" width="480" height="800" loading="lazy" />
        </picture>
        <a>
            <p>BYOT Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('hunger_warrior_android/hw_browse_foods')->resize(Resize::fill(480, 800))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="480" height="800" loading="lazy" />
        </picture>
        <a>
            <p>Bogoya Splash Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('hunger_warrior_android/hw_order_item_details')->resize(Resize::fill(480, 800))->toUrl() }}"
                alt="App screenshot of order item details" width="480" height="800" loading="lazy" />
        </picture>
        <a>
            <p>Cream Liqueur Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('hunger_warrior_android/hw_cart')->resize(Resize::fill(480, 800))->toUrl() }}"
                alt="App screenshot of cart" width="480" height="800" loading="lazy" />
        </picture>
        <a>
            <p>Weed Cookie Special</p>
        </a>
    </div>
    <div class="product-container">
        <picture>
            <img src="{{ $cloudinary->image('hunger_warrior_android/hw_completed_orders')->resize(Resize::fill(480, 800))->toUrl() }}"
                alt="App screenshot of completed orders screen" width="480" height="800" loading="lazy" />
        </picture>
        <a>
            <p>BYOT Special</p>
        </a>
    </div>
</section>
