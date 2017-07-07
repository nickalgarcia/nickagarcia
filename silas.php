<section class="hero">
    <div class="hero-content">
        <h1 class="heading-banded" itemprop="name">Hope For Silas</h1>
        <div class="fundraising-progress">
            <div class="fundraising-progress__meter">
                <ul class="list-unstyled">
                    <li class="thermometer_truck">
                        <img src="../images/counter/amount--0.png" alt="">
                    </li>
                    <li class="thermometer__percentage">0%</li>
                </ul>
            </div>
            <div class="fundraising-progress_raised">
                <h5 class="fundraising-progress_label">RAISED:</h5>
                <p class="fundraising-progress_numbers">$0</p>
            </div>
            <div class="fundraising-progress_goal">
                <h5 class="fundraising-progress_label">GOAL:</h5>
                <p class="fundraising-progress_numbers">$3,000</p>
            </div>
        </div>
        <div class="hero-button">
            <a class="btn" href="https://www.gofundme.com/hope-for-silas">Give</a>
        </div>
    </div>
    <div class="hero-image">
        <img src="../images/silas-hero.jpg">
    </div>
</section>
<div class="main-content">
    <section class="share">
        <div class="share-content">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="share-title">Share:</div>
            <div class="addthis_inline_share_toolbox"></div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section class="story">
        <div class="story-content">
            <p>Together, our team is walking to help JDRF continue to fund life-changing type 1 diabetes (T1D) research and create a world without T1D. T1D is an autoimmune disease in which a person’s pancreas stops producing insulin—a hormone essential to turning food into energy. It strikes both children and adults and is unrelated to diet and lifestyle. With T1D there are no days off, and there is no cure—yet. Your support can help change that.</p>
        </div>
    </section>
</div>
<style>
.hero {
    position: relative;
    margin: 0 -15px 30px -15px;
    background-color: #f6f6f6;
}

.hero:after,
.hero:before,
.fundraising-progress:before,
.fundraising-progress:after {
    display: table;
    content: " ";
}

.hero:after,
.fundraising-progress:after {
    clear: both;
}

.hero-content {
    position: relative;
    padding-bottom: 20px;
}

.hero-image {
    position: relative;
    overflow: hidden;
    text-align: center;
    background-color: #e1e2e1;
}

.heading-banded {
    padding: 20px 15px;
    margin: 0 0 20px;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    background-color: #02b298;
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 100;
}

.fundraising-progress {
    position: relative;
    display: block;
    max-width: 590px;
    padding-top: 20px;
    margin-right: auto;
    margin-bottom: 30px;
    margin-left: auto;
    text-align: center;
}

.fundraising-progress__meter {
    margin: 0 15px;
    text-align: center;
    border-bottom: 1px solid #a9a9a9;
}

.fundraising-progress__meter ul {
    position: relative;
    width: 131px;
    height: 100px;
    margin: 0 auto;
}

.fundraising-progress__meter ul li {
    position: absolute;
}

.fundraising-progress__meter ul li.thermometer__percentage {
    top: 35%;
    left: 30%;
    margin: 0;
    font-size: 22px;
    font-weight: 700;
    color: #58595b;
}

.fundraising-progress_raised {
    float: left;
    padding-left: 15px;
}

.fundraising-progress_goal {
    float: right;
    padding-right: 15px;
}

.fundraising-progress_label {
    margin: 5px 0 2px;
    font-size: .85em;
    line-height: 1em;
    color: #58595b;
    font-weight: bold;
}

.fundraising-progress_numbers {
    margin: 0;
    font-size: 22px;
    font-weight: 700;
    color: #02b298;
}

.hero-button {
    text-align: center;
}

.share {
    margin-bottom: 20px;
}

.story-content {
    padding: 40px 15px;
    font-size: 16px;
    line-height: 1.5;
    background: #f6f6f6;
}

.share-title {
    color: #a9a9a9;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    display: inline-block;
    vertical-align: middle;
}

.addthis_inline_share_toolbox {
    display: inline-block;
    vertical-align: middle;
}

.share-content {
    float: right;
}

.clearfix {
    display: block;
    clear: both;
}

@media screen and (min-width: 992px) {
    .hero-content {
        float: right;
        width: 50%;
    }
    .hero-image {
        float: right;
        width: 50%;
    }
    .story {
        margin-right: 0;
        margin-left: 0;
    }
}

@media screen and (min-width: 768px) {
    .hero {
        margin-bottom: 80px;
    }
}

@media screen and (max-width: 767px) {
    .share-content {
        float: none;
        text-align: center;
    }
}

@media (min-width: 38em) {
    .fundraising-progress_label {
        font-size: 1em;
    }
    .fundraising-progress_numbers {
        font-size: 32px;
    }
}
</style>
