
<section class="hero">
<div class="hero-image">
<img src="../images/silas-hero.jpg">
</div>
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
</section>

<style>
.hero {
    position: relative;
    margin: 0 -15px 30px -15px;
    background-color: #f6f6f6;
}

.hero:after, .hero:before, .fundraising-progress:before, .fundraising-progress:after {
    display: table;
    content: " ";
}

.hero:after, .fundraising-progress:after {
    clear: both;
}

.hero-content {
    position: relative;
    padding-bottom: 20px;
}

.hero-image {
    position: relative;
    height: 440px;
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
@media screen and (min-width: 992px) {
.hero-content {
    float: left;
    width: 50%;
}
.hero-image {
    float: left;
    width: 50%;
}
}


@media screen and (min-width: 768px) {
.hero {
    margin-bottom: 80px;
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