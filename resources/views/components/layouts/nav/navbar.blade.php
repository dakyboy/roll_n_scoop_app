<nav class="nav-container">
    <a>
        <div>
            <p>Roll & Scoop Joint</p>
        </div>
    </a>
    <a>
        <div class="nav-links">
            <a href="#best-sellers-title">
                <p>Best Sellers</p>
            </a>
            <a href="#about-us-title">
                <p>About Us</p>
            </a>
        </div>
    </a>
</nav>
<style>
    header {
        width: 100vw;
        padding: .1rem;
        display: flex;
        flex-flow: column;
        z-index: 500;
    }

    .nav-container {
        position: fixed;
        top: 0;
        width: 100vw;
        padding: 2rem;
        margin: 0;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        align-items: center;
        background-color: hsla(350, 93%, 77%, 5);
    }

    .nav-links {
        display: flex;
    }

    .nav-links a {
        padding: 1rem;
    }
</style>