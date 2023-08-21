<nav class="nav-container">

    <div>
        <p>Roll & Scoop Joint</p>
    </div>

    <div>
        <img src="/images/menu-icon.svg" id="open-menu-button" onclick="openMenu()" class="hamburger">
        <img src="/images/close-icon.svg" id="close-menu-button" onclick="closeMenu()" class="hamburger">
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
        z-index: 2;
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
        background-color: rgba(0, 0, 0, 0.6);
    }

    .menu a {
        padding: 1rem;
    }

    .menu p {
        color: aliceblue;
    }

    .hamburger {
        position: absolute;
        top: 2rem;
        right: 2rem;
        width: 32px;
        height: 32px;
        cursor: pointer;
    }

    #close-menu-button {
        z-index: -4;
        width: 0;
        height: 0;
    }
</style>
