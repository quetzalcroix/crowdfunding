@extends('templates.front.default')

@section('title', 'Home')

@section('navigation')
    <div class="cc-mainNavigation__container">
        <div class="cc-pageContainerLarge ">
            <nav aria-label="Main menu" id="mainNavigation" class="cc-mainNavigation" role="navigation">
                <div class="cc-mainNavigation__smallViewport">
                    <div class="cc-popout" data-align="right" data-active="FALSE"  data-size="medium">
                        <a id="popout__trigger817676328" class="cc-popout__trigger" tabindex="0" aria-expanded="false" aria-controls="popout__panel304359046" aria-haspopup="true">    <div class="smallViewport__menuIcon">
                                <span>Menu</span>
                            </div>
                        </a>
                        <div id="popout__panel304359046" class="cc-popout__panel" aria-labelledby="popout__trigger817676328" aria-hidden="true">
                            <div class="cc-popout__inner">
                                <div class="cc-popout__content">
                                    <div class="cc-mainNavigation__smallViewportContent">
                                        <ul class="cc-mainNavigation__navigationList cc-mainNavigation__navigationList--primary">
                                            <li><a href="/investments">Investment Opportunities</a></li>
                                            <li><a href="/how-to-invest">How to invest</a></li>
                                            <li><a href="/explore/raising-finance">Raising finance</a></li>
                                            <li><a href="http://www.crowdcube.com/explore">Explore</a></li>
                                        </ul>
                                        <ul class="cc-mainNavigation__navigationList">
                                            <li><a href="/help">Help Centre</a></li>
                                            <li><a href="/pg/eis-seis-tax-relief-overview-43">Tax relief</a></li>
                                            <li><a href="/contact">Contact us</a></li>
                                            <li><a href="/companies">Funded companies</a></li>
                                            <li><a href="/partnerships">Partnerships</a></li>
                                            <li><a href="/pg/terms-16">Terms of use</a></li>
                                            <li><a href="/pg/privacy-and-cookie-policy-17">Privacy policy</a></li>
                                            <li><a href="/pg/risk-36">Risk warning</a></li>
                                            <li><a href="/pg/crowdcube-inc-about-us-1">About us</a></li>
                                            <li><a href="/pg/jobs-37">Careers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="cc-popout__close-button" tabindex="-1" aria-label="Close"><span class="cc-icon cc-icon__close cc-icon--noSpace  close-reveal-modal">
                                        <svg  role="img" class="close-reveal-modal">
                                            <use class="cc-icon__symbol close-reveal-modal" xlink:href="/dist/icons/icons-88df7931.svg#close"></use>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="cc-popout__bg--overlay cc-js-popout-overlay"></div>
                    </div>
                </div>
                <div class="cc-mainNavigation__logoContainer">
                    <div class="cc-mainNavigation__logo">
                        <a href="/">CrowdFunding</a>
                    </div>
                </div>
                <div class="cc-mainNavigation__group">
                    <div class="cc-mainNavigation__navigationPrimary">
                        <ul>
                            <li class="cc-mainNavigation__navigationItem"><a href="/investments">Investment Opportunities</a></li>
                            <li class="cc-mainNavigation__navigationItem"><a href="/how-to-invest">How to invest</a></li>
                            <li class="cc-mainNavigation__navigationItem"><a href="/explore/raising-finance">Raising finance</a></li>
                            <li class="cc-mainNavigation__navigationItem"><a href="http://www.crowdcube.com/explore">Explore</a></li>
                        </ul>
                    </div>
                    <div class="cc-mainNavigation__navigationUser">
                        <div class="cc-mainNavigation__loggedOut">
                            <a href="https://www.crowdcube.com/login?redirect_to=Lw%3D%3D">Log in</a>
                            <a href="/register">Join</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
@endsection

@section('body')
    <div class="cc-homepageContainer">
        <div class="cc-carousel cc-carousel--home owl-carousel owl-theme" data-owl-carousel="{&quot;singleItem&quot;:true,&quot;autoPlay&quot;:true}" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer autoHeight" style="height: 550px;"><div class="owl-wrapper" style="width: 6776px; left: 0px; display: block; transition: all 400ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 847px;"><div class="cc-carousel__slide">
                            <div id="masthead-128658577" class="cc-masthead cc-masthead--centered  ">
                                <div class="cc-masthead__background" style="background-image:url('https://static-crowdcube-com.s3.amazonaws.com/home-page/cover-image-coinmode-banner.jpg');"></div>
                                <div class="cc-masthead__content cc-mastheadContent">
                                    <div class="cc-mastheadContent__above">
                                    </div>
                                    <div class="cc-mastheadContent__header">
                                        Invest in a thriving industry
                                    </div>
                                    <div class="cc-mastheadContent__summary">
                                        Coinmode seek to leverage the power of blockchain to allow games producers to take payments from players without disrupting gameplay in a seamless experience.
                                    </div>
                                    <div class="cc-mastheadContent__below">
                                        <a class="cc-button button primary   skinny     " href="https://www.crowdcube.com/companies/coinmode/pitches/bj1DWZ?utm_source=website&amp;utm_medium=website&amp;utm_campaign=Coinmode%3Ahomepage-promo-banner&amp;utm_content=campaign_referral_link">        <span>View pitch</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 847px;"><div class="cc-carousel__slide">
                            <div id="masthead-975176461" class="cc-masthead cc-masthead--centered  ">
                                <div class="cc-masthead__background" style="background-image:url('https://static-crowdcube-com.s3.amazonaws.com/home-page/cover-image-festicket-banner.jpg');"></div>
                                <div class="cc-masthead__content cc-mastheadContent">
                                    <div class="cc-mastheadContent__above">
                                    </div>
                                    <div class="cc-mastheadContent__header">
                                        Festicket: raising £4m
                                    </div>
                                    <div class="cc-mastheadContent__summary">
                                        Backed by Edge Investments, Beringea and Channel 4 and with over 1mn customers to date, Festicket allows customers to discover, plan and book their festival experiences in one place.
                                    </div>
                                    <div class="cc-mastheadContent__below">
                                        <a class="cc-button button primary   skinny     " href="https://crowdcube.com/festicket-1/pitches/bdRd0l?utm_source=website&amp;utm_medium=website&amp;utm_campaign=Festicket:homepage_promo_banner&amp;utm_term=campaign_referral_link">        <span>View pitch</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 847px;"><div class="cc-carousel__slide">
                            <div id="masthead-1255823321" class="cc-masthead cc-masthead--centered  ">
                                <div class="cc-masthead__background" style="background-image:url('https://static-crowdcube-com.s3.amazonaws.com/home-page/cover-image-invester-banner.jpg');"></div>
                                <div class="cc-masthead__content cc-mastheadContent">
                                    <div class="cc-mastheadContent__above">
                                    </div>
                                    <div class="cc-mastheadContent__header">
                                        Invest anytime, anywhere with Crowdcube
                                    </div>
                                    <div class="cc-mastheadContent__summary">
                                        With new investment opportunities every week, handpick the businesses you want to back. Capital at Risk. Please read our <a href="/pg/risk-36" target="_blank">risk warning</a> and <a href="/pg/pitch-disclaimer-logged-out-1515" target="_blank">disclaimer</a>.
                                    </div>
                                    <div class="cc-mastheadContent__below">
                                        <a class="cc-button button primary   skinny     " href="/register#details">        <span>Join Crowdcube</span>
                                        </a>
                                        <a class="cc-button button tertiary   skinny     " href="/investments">        <span>Investment Opportunities</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 847px;"><div class="cc-carousel__slide">
                            <div id="masthead-1062470883" class="cc-masthead cc-masthead--centered  ">
                                <div class="cc-masthead__background" style="background-image:url('https://static-crowdcube-com.s3.amazonaws.com/home-page/cover-image-entrepreneur-banner.jpg');"></div>
                                <div class="cc-masthead__content cc-mastheadContent">
                                    <div class="cc-mastheadContent__above"></div>
                                    <div class="cc-mastheadContent__header">
                                        Fund your growth on Crowdcube
                                    </div>
                                    <div class="cc-mastheadContent__summary">
                                        Join the hundreds of ambitious entrepreneurs<br>that have funded on Crowdcube.
                                    </div>
                                    <div class="cc-mastheadContent__below">
                                        <a class="cc-button button primary   skinny     " href="/raising-finance">        <span>Raising Finance</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-controls clickable">
                <div class="owl-pagination">
                    <div class="owl-page active">
                        <span class=""></span>
                    </div>
                    <div class="owl-page">
                        <span class=""></span>
                    </div>
                    <div class="owl-page">
                        <span class=""></span>
                    </div>
                    <div class="owl-page">
                        <span class=""></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="cc-containerStats">
            <div class="cc-compartments">
                <div class="cc-compartments__container">
                    <div class="cc-compartments__content">
                        <div class="cc-statBlock">
                            <div class="cc-statBlock__number">
                                £626,618,118
                            </div>
                            <div class="cc-statBlock__title">
                                Invested in Pitches
                            </div>
                        </div>
                    </div>
                    <div class="cc-compartments__content">
                        <div class="cc-statBlock">
                            <div class="cc-statBlock__number">
                                718,010
                            </div>
                            <div class="cc-statBlock__title">
                                Registered Members
                            </div>
                        </div>
                    </div>
                    <div class="cc-compartments__content cc-compartments__content--supplementary">
                        <div class="cc-statBlock">
                            <div class="cc-statBlock__number">
                                821
                            </div>
                            <div class="cc-statBlock__title">
                                Successful Raises
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <popular-pitches></popular-pitches>

        <latest-news></latest-news>

        <div class="cc-containerPartners">
            <div class="cc-pageContainerLarge ">
                <div class="cc-containerPartners--summary">
                    <div class="cc-summary">
                        <h1 class="cc-summary__title">
                            Not just the crowd
                        </h1>
                        <div class="cc-summary__text">
                            <p>
                                We have created an ecosystem of strong co-funding organisations from venture capital firms, institutions and the UK government.
                                <span class="cc-summary__link">
                    <a href="/pg/not-just-the-crowd-1712">Find out more</a>
                </span>
                            </p>
                        </div>
                    </div>                    </div>
                <div class="cc-containerPartners--logos">
                    <div class="cc-logos__row">
                        <div class="cc-logos__container">
                            <a href="/pg/not-just-the-crowd-1712" title="Octopus Investments">
                                <img src="https://images.crowdcube.com/unsafe/fit-in/90x60/https://static-crowdcube-com.s3.amazonaws.com/home-page/partners/01_Octopus.png" alt="Octopus Investments">
                            </a>
                        </div>
                        <div class="cc-logos__container">
                            <a href="/pg/not-just-the-crowd-1712" title="Balderton Capital">
                                <img src="https://images.crowdcube.com/unsafe/fit-in/90x60/https://static-crowdcube-com.s3.amazonaws.com/home-page/partners/02_Balderton.png" alt="Balderton Capital">
                            </a>
                        </div>
                        <div class="cc-logos__container">
                            <a href="/pg/not-just-the-crowd-1712" title="Passion Capital">
                                <img src="https://images.crowdcube.com/unsafe/fit-in/90x60/https://static-crowdcube-com.s3.amazonaws.com/home-page/partners/03_Passion-Capital.png" alt="Passion Capital" width="100">
                            </a>
                        </div>
                    </div>
                    <div class="cc-logos_row">
                        <div class="cc-logos__container">
                            <a href="/pg/not-just-the-crowd-1712" title="Seedcamp">
                                <img src="https://images.crowdcube.com/unsafe/fit-in/90x60/https://static-crowdcube-com.s3.amazonaws.com/home-page/partners/04_Seedcamp.png" alt="Seedcamp">
                            </a>
                        </div>
                        <div class="cc-logos__container">
                            <a href="/pg/not-just-the-crowd-1712" title="Index Ventures">
                                <img src="https://images.crowdcube.com/unsafe/fit-in/90x60/https://static-crowdcube-com.s3.amazonaws.com/home-page/partners/05_IndexVentures.png" alt="Index Ventures">
                            </a>
                        </div>
                        <div class="cc-logos__container">
                            <a href="/pg/not-just-the-crowd-1712" title="DNCapital">
                                <img src="https://images.crowdcube.com/unsafe/fit-in/90x60/https://static-crowdcube-com.s3.amazonaws.com/home-page/partners/06_DraperEsprit.jpg" alt="Draper Esprit">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cc-containerActions">
            <div class="cc-compartmentsTwo">
                <div class="cc-compartmentsTwo__container">
                    <div class="cc-compartmentsTwo__containerInner">
                        <div class="cc-compartmentsTwo__content cc-compartmentsTwo__content--first">
                            <div>
                                <h3>Fund your growth on Crowdcube</h3>
                                <p>Join the hundreds of ambitious entrepreneurs raising on Crowdcube.</p>
                                <a class="cc-button button secondary   skinny     " href="/explore/raising-finance">        <span>Raising finance</span>
                                </a>
                            </div>
                        </div>
                        <div class="cc-compartmentsTwo__content cc-compartmentsTwo__content--last">
                            <div>
                                <h3>Join over 710,000 registered members</h3>
                                <p>It's free, quick and easy.</p>
                                <a class="cc-button button primary skinny"href="/register#details"><span>Join Crowdcube</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cc-container-risk">
            <div class="cc-footnote">
                <div class="cc-footnote__content">
                    <h4 class="cc-footnote__header">Risk warning</h4>
                    <p>Investing in start-ups and early stage businesses involves risks,
                        including illiquidity, lack of dividends, loss of investment and dilution,
                        and it should be done only as part of a diversified portfolio. Crowdcube is
                        targeted exclusively at investors who are sufficiently sophisticated to understand
                        these risks and make their own investment decisions. You will only be able to invest
                        via Crowdcube once you are registered as sufficiently sophisticated.
                        <a href="/pg/risk-36">Please click here to read the full Risk Warning.</a></p>
                    <p>This page is approved as a financial promotion by Crowdcube Capital Limited,
                        which is authorised and regulated by the Financial Conduct Authority.
                        Pitches for investment are not offers to the public and investments can only
                        be made by members of crowdcube.com on the basis of information provided in the
                        pitches by the companies concerned. Crowdcube takes no responsibility for this
                        information or for any recommendations or opinions made by the companies.</p>
                </div>
            </div>        </div>
    </div>
@endsection