<?php include "../horizon/includes/header.php" ?>

<section class="hero bgColor">
    <div class="width-limiter">
        <div class="overlay">
            <video autoplay muted loop id="bgVideo">
                <source src="../horizon/assets/horizon_trailer_bg.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <audio id="audio" autoplay>
                <source src="../horizon/assets/never.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>
</section>

<section class="overview bg-img-utils section-padding overview-overlay">
    <div class="width-limiter overview-flex">
        <div class="overview-flex-left overview-content">
            <h1 class="light-hfont">Game Overview</h1>
            <p class="light-pfont">Join Aloy as she braves the Forbidden West – a majestic but dangerous frontier that conceals mysterious new threats.</p>
        </div>
        <div class="overview-flex-right overview-content">
            <p class="light-pfont">Explore distant lands, fight bigger and more awe-inspiring machines, and encounter astonishing new tribes as you return to the far-future, post-apocalyptic world of Horizon.</p><br>
            <p class="light-pfont">The land is dying. Vicious storms and an unstoppable blight ravage the scattered remnants of humanity, while fearsome new machines prowl their borders. Life on Earth is hurtling towards another extinction, and no one knows why.</p><br>
            <p class="light-pfont">It's up to Aloy to uncover the secrets behind these threats and restore order and balance to the world. Along the way, she must reunite with old friends, forge alliances with warring new factions and unravel the legacy of the ancient past – all the while trying to stay one step ahead of a seemingly undefeatable new enemy.</p>
        </div>
    </div>
</section>

<section class="cards section-padding">
    <h1 class="width-limiter center pbot">Choose Your Bundle of Adventure</h1>
    <div class="width-limiter card-flex">
        <div class="card one">
            <div class="card-content">
                <h1 class="light-hfont">$49</h1>
                <h2 class="light-hfont">Basic Bundle</h2>
                <p class="light-pfont ptop">Includes</p>
                <ul>
                    <li class="light-pfont mleft">Game</li>
                    <li class="light-pfont mleft">Basic Hunter Gear</li>
                    <li class="light-pfont mleft">Poster</li>
                </ul>
            </div>
            <div class="btn-container">
                <a href="./">
                    <span class="card-btn">Pre-Order Basic</span>
                </a>
            </div>
        </div>
        <div class="card two">
            <div class="card-content">
                <h1 class="light-hfont">$69</h1>
                <h2 class="light-hfont">Hunter Bundle</h2>
                <p class="light-pfont ptop">Includes</p>
                <ul>
                    <li class="light-pfont mleft">Game</li>
                    <li class="light-pfont mleft">Modified Hunter Gear</li>
                    <li class="light-pfont mleft">Poster</li>
                    <li class="light-pfont mleft">+2 Skill Points</li>
                </ul>

            </div>
            <div class="btn-container">
                    <a href="./">
                        <span class="card-btn">Pre-Order Hunter</span>
                    </a>
                </div>
        </div>
        <div class="card three">
            <div class="card-content">
                <h1 class="light-hfont">$99</h1>
                <h2 class="light-hfont">Ultimate Bundle</h2>
                <p class="light-pfont ptop">Includes</p>
                <ul>
                    <li class="light-pfont mleft">Game</li>
                    <li class="light-pfont mleft">Modified Hunter Gear</li>
                    <li class="light-pfont mleft">Poster</li>
                    <li class="light-pfont mleft">+4 Skill Points</li>
                    <li class="light-pfont mleft">Mammoth Override</li>
                </ul>
            </div>
            <div class="btn-container">
                <a href="./">
                    <span class="card-btn">Pre-Order Ultimate</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="gallery bg-img-utils section-padding overview-overlay">
    <div class="width-limiter overview-flex">
        <div class="overview-flex-left overview-content">
            <h1 class="light-hfont">Sign-Up for the Newsletter</h1>
            <form action="/action_page.php" method="POST">
                <div class="form-label">
                    <label class="form-label light-pfont" for="fname">Email</label><br>
                </div>
                
                <input class="form-input" type="email" id="email" placeholder="Type your email"><br><br>
                <div class="">
                    <input class="card-btn" type="submit" value="Submit">
                </div>
            </form>
        </div>
        <div class="overview-flex-right overview-content">
            <p class="light-pfont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolore eum incidunt reprehenderit quasi obcaecati ullam nam saepe, ipsum nostrum inventore officiis deleniti, assumenda optio rem fugit ducimus. Harum, consequuntur?</p><br>
            <p class="light-pfont">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolore eum incidunt reprehenderit quasi obcaecati ullam nam saepe, ipsum nostrum inventore officiis deleniti, assumenda optio rem fugit ducimus. Harum, consequuntur?</p><br>
        </div>
    </div>
</section>

<?php include "../horizon/includes/footer.php" ?>