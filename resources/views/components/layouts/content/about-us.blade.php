@php
    use Cloudinary\Cloudinary;
    use Cloudinary\Transformation\Resize;
    $cloudinary = new Cloudinary();
@endphp

<section class="about-us-container">
    <article class="about-us-copy">
        <h3 id="about-us-title">About Us</h3>
        
        <p> Welcome to our ice cream rolls parlor in Jinja! At our parlor, we're passionate about serving up delicious
            ice cream rolls that are made fresh right in front of your eyes using only the finest ingredients.
        </p>
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__19_d246dx')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <p> Our team
            of ice cream enthusiasts is dedicated to providing a unique and unforgettable experience for our customers.
        </p>
        <picture>
            <img src="{{ $cloudinary->image('roll_n_scoop/rolls/rolled_ice_cream__4_y97tal')->resize(Resize::fill(250, 250))->toUrl() }}"
                alt="App Screenshot of browse foods screen" width="250" height="250" loading="lazy" />
        </picture>
        <br />
        <p>
            Our menu features a wide variety of flavors to suit every taste, from classic favorites like chocolate and
            strawberry to exotic blends like green tea and mango. We take great pride in our commitment to quality and
            customer service, and we believe that our attention to detail sets us apart from other ice cream parlors in
            Jinja.
        </p>
        <br />
        <p>
            Whether you're looking for a sweet treat to cool off on a hot day or a fun outing with friends and family,
            our parlor has something for everyone. So why not come visit us and indulge in one of our delicious
            hand-rolled ice cream rolls? We guarantee you won't be disappointed!</p>
    </article>
</section>
<style>
    .about-us-container {
        display: flex;
        flex-flow: column wrap;
        background-color: white;
        color: black;
        padding: 2rem 1.6rem;
        width: 100%;
        overflow: auto;
    }

    .about-us-container p {
        text-align: left;
        font-size: 2rem;
    }

    .about-us-container h3 {
        margin: 0;

    }

    .about-us-container article {
        display: flex;
        padding: 2rem 4rem;
        flex-flow: column wrap;
        align-items: flex-start;
    }

    .about-us-container picture {
        align-self: center;
        padding: 1rem;
    }
    
    #about-us-title {   
        align-self: center;
    }
</style>