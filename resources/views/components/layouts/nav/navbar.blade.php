<nav class="nav-container">

    <div>
        <p>Roll & Scoop Joint</p>
    </div>


    <div id="menu-container">

        <ul class="menu">
            <li>
                <a href="#best-sellers-title">
                    <p>Best Sellers</p>
                </a>
            </li>
            <li>
                <a href="#about-us-title">
                    <p>About Us</p>
                </a>
            </li>
        </ul>
    </div>

</nav>
<style>

    .nav-container {
        position: fixed;
        top: 0;
        width: 100%;
        padding: 2rem;
        margin: 0;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        align-items: center;
        background-color: hsla(350, 93%, 77%, 5);
        z-index: 10;
    }

    #menu-container {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        z-index: -100;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .menu-container a {
        padding: 1rem;
    }

    .menu p {
        color: aliceblue;
    }
</style>
