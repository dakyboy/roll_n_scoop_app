<nav class="nav-container">
    <a>
        <div>
            <p>King Von</p>
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
        width: 100%;
        padding: .1rem;
        display: flex;
        flex-flow: column;
        z-index: 500;
    }

    .nav-container {
        position: sticky;
        top: 0;
        width: 100%;
        flex: 1;
        padding: 2rem;
        margin: 0 auto;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        background-color: hsla(350, 93%, 77%, 5);
    }

    .nav-links {
        display: flex;
    }

    .nav-links a {
        padding: 1rem;
    }
</style>