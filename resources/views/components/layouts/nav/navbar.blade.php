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
                <a href="#best-sellers-title" onclick="closeMenu()">
                    <p>Best Sellers</p>
                </a>
            </li>
            <li>
                <a href="#about-us-title" onclick="closeMenu()">
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
        justify-content: space-around;
        align-items: center;
        visibility: hidden;
        background-color: rgba(0, 0, 0, 0.85);
    }

    .menu a {
        padding: 1rem;
    }

    .menu p {
        color: white;
        font-size: 2rem;
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
        background-color: white;
        opacity: .7;
        z-index: -4;
        width: 0;
        height: 0;
    }
</style>
