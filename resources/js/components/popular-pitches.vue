<template>
    <div class="cc-containerPitches" id="popular_pitches">
        <div class="cc-section__title">
            <div class="cc-title__header">
                Popular Pitches
            </div>
            <div class="cc-title__links">
                <a href="/investments">View all investment opportunities</a>
            </div>
        </div>
        <div class="cc-grid cc-grid--three-col">
            <div class="cc-grid__grid" v-for="(item, index) in pitches">
                <div class="cc-grid__cell" :key="index">
                    <section class="cc-card">
                        <a class="cc-card__link" href="/investment/bee-good-26308">
                            <div class="cc-card__header">
                                <div class="cc-card__cover-container">
                                    <div class="cc-card__cover"
                                         data-lazy-load-image=""
                                         data-type="background"
                                         data-processed="true" data-image-load-triggered="true"
                                         :style="item.css_background"
                                    >
                                        <div class="cc-card__sash">
                                            <span>{{ item.status }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cc-card__meta">
                                    <img class="cc-card__emblemImage"
                                         data-lazy-load-image=""
                                         data-type="image"
                                         :data-src="item.logo" :alt="`Logo image for ${item.name}`"
                                         data-processed="true" data-image-load-triggered="true"
                                         :src="item.logo">
                                    <div class="cc-card__tags">
                                        <ul class="cc-tagList">
                                            <li>
                                                <span class="cc-tag cc-tag--small">
                                                    <abbr :title="item.type.title">{{ item.type.content }}</abbr>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cc-card__daysLeft">{{ item.time_left }} days left</div>
                                </div>
                            </div>
                            <div class="cc-card__body">
                                <h1>{{ item.name }}</h1>
                                <p>{{ item.intro }}</p>
                            </div>
                            <div class="cc-card__stats">
                                <div class="cc-card__raisedTotal">£{{ item.stats.raised_target | formatNumber}} Target</div>
                                <div class="cc-card__progress">
                                    <div class="cc-progressBar ">
                                            <span>
                                                {{ item.stats.progress }}%
                                            </span>
                                        <div class="cc-progressBar__indicator cc-progressBar__indicator--full " style="width: 100%;"></div>
                                    </div>
                                </div>
                                <dl class="cc-inlineStats">
                                    <div class="cc-inlineStats__group" v-for="(stat, stat_index) in item.stats.properties" :key="stat_index">
                                        <dt class="cc-inlineStats__label">{{ stat.label }}</dt>
                                        <dd class="cc-inlineStats__value">£{{ stat.value | formatNumber }}</dd>
                                    </div>
                                </dl>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            pitches: [
                {
                    "name": "Company 1",
                    "image_cover": "https://images.crowdcube.com/unsafe/350x168/https://files-crowdcube-com.s3.amazonaws.com/opportunity_images/26308/201901/1500x500_86a8571277416c2a3a37e73cc593e947.png",
                    "css_background": "background-image: url('https://images.crowdcube.com/unsafe/350x168/https://files-crowdcube-com.s3.amazonaws.com/opportunity_images/26308/201901/1500x500_86a8571277416c2a3a37e73cc593e947.png')",
                    "status": "overfunding",
                    "logo": "https://images.crowdcube.com/unsafe/fit-in/100x100/filters:fill(ffffff,1)/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201901/14313c1f2ead68eda7b85d0e94160906",
                    "type": {
                        "title": "Enterprise Investment Scheme",
                        "content": "EIS"
                    },
                    "time_left": 6,
                    "intro": "Company 1 Intro goes here...",
                    "stats": {
                        "raised_target": 100000,
                        "progress": 207,
                        "properties": [
                            {
                                "label": "Raised",
                                "value": 207660
                            },
                            {
                                "label": "Equity",
                                "value": 10.42
                            },
                            {
                                "label": "Investors",
                                "value": 331
                            }
                        ]
                    }
                }
            ]
        })
    }
</script>