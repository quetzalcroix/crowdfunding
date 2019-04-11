<template>
    <div class="cc-mainFooter">
        <div class="cc-pageContainerLarge ">
            <div class="cc-mainFooter__promotion">
                <div class="cc-mainFooter__appstore cc-mainFooter__storeBadge">
                    <a href="https://itunes.apple.com/app/apple-store/id1130987804?pt=2225342&amp;ct=crowdcube_footer&amp;mt=8">
                        <img src="https://static-crowdcube-com.s3.amazonaws.com/footer/app-store-badge_en-97afa199bcc7ca71bbd549d70fca69e5.svg" alt="Download on the App Store" title="Download on the App Store">
                    </a>
                </div>
                <div class="cc-mainFooter__googlePlay cc-mainFooter__storeBadge">
                    <a href="https://play.google.com/store/apps/details?id=com.crowdcube.android">
                        <img src="https://static-crowdcube-com.s3.amazonaws.com/footer/google-play-badge.png" alt="Get it on Google Play" title="Get it on Google Play">
                    </a>
                </div>
                <div>
                    <ul v-for="(item, index) in social_links">
                        <li :key="index">
                            <a :href="item.url">
                                <span :class="item.class">
                                    <svg role="img" class>
                                        <use class="cc-icon__symbol" :xlink:href="item.icon"></use>
                                    </svg>
                                </span>
                                <span class="cc-mainFooter__socialLabel">{{ item.name }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cc-mainFooter__navigation">
                <div class="cc-mainFooter__navigationBlock">
                    <h5 class="cc-mainFooter__navigationBlockTitle">Support</h5>
                    <ul class="cc-mainFooter__navigationBlockList">
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="https://www.crowdcube.com/help" class="cc-mainFooter__navigationBlockLink">Help Centre</a>
                        </li>
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/pg/eis-seis-tax-relief-overview-43" class="cc-mainFooter__navigationBlockLink">Tax relief</a>
                        </li>
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="https://www.crowdcube.com/contact" class="cc-mainFooter__navigationBlockLink">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="cc-mainFooter__navigationBlock">
                    <h5 class="cc-mainFooter__navigationBlockTitle">Learn more</h5>
                    <ul class="cc-mainFooter__navigationBlockList">
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/explore/raising-finance" class="cc-mainFooter__navigationBlockLink">Raising finance</a>
                        </li>
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/companies" class="cc-mainFooter__navigationBlockLink">Funded companies</a>
                        </li>
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/partnerships" class="cc-mainFooter__navigationBlockLink">Partnerships</a>
                        </li>
                    </ul>
                </div>
                <div class="cc-mainFooter__navigationBlock">
                    <h5 class="cc-mainFooter__navigationBlockTitle">Legal</h5>
                    <ul class="cc-mainFooter__navigationBlockList">
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/pg/terms-16" class="cc-mainFooter__navigationBlockLink">Terms of use</a>
                        </li>
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/pg/privacy-and-cookie-policy-17" class="cc-mainFooter__navigationBlockLink">Privacy policy</a>
                        </li>
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/pg/risk-36" class="cc-mainFooter__navigationBlockLink">Risk warning</a>
                        </li>
                    </ul>
                </div>
                <div class="cc-mainFooter__navigationBlock">
                    <h5 class="cc-mainFooter__navigationBlockTitle">Team</h5>
                    <ul class="cc-mainFooter__navigationBlockList">
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/pg/crowdcube-inc-about-us-1" class="cc-mainFooter__navigationBlockLink">About us</a>
                        </li>
                        <li class="cc-mainFooter__navigationBlockListItem">
                            <a href="/pg/jobs-37" class="cc-mainFooter__navigationBlockLink">Careers</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cc-mainFooter__legal">
                <p>Crowdcube Capital Ltd is authorised and regulated by the Financial Conduct Authority (No. 650205).</p>
            </div>
            <div class="cc-mainFooter__branding">
                <a href="">crowdcube</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            social_links: [
                {
                    name: "Facebook",
                    url: "https://facebook.com",
                    icon: "/dist/icons/icons-88df7931.svg#facebook",
                    class: "cc-icon cc-icon__facebook cc-icon--noSpace cc-icon--fill"
                },
                {
                    name: "Twitter",
                    url: "https://twitter.com",
                    icon: "/dist/icons/icons-88df7931.svg#twitter",
                    class: "cc-icon cc-icon__twitter cc-icon--noSpace cc-icon--fill"
                },
                {
                    name: "LinkedIn",
                    url: "https://linkedin.com",
                    icon: "/dist/icons/icons-88df7931.svg#linkedin",
                    class: "cc-icon cc-icon__linkedin cc-icon--noSpace cc-icon--fill"
                },
                {
                    name: "Google Plus",
                    url: "https://plus.google.com",
                    icon: "/dist/icons/icons-88df7931.svg#google-g",
                    class: "cc-icon cc-icon__google-g cc-icon--noSpace cc-icon--fill"
                },
                {
                    name: "Instagram",
                    url: "https://instagram.com",
                    icon: "/dist/icons/icons-88df7931.svg#instagram",
                    class: "cc-icon cc-icon__instagram cc-icon--noSpace cc-icon--fill"
                }
            ]
        })
    }
</script>