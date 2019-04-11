<template>
    <div class="cc-containerArticles">
        <div class="cc-section__title">
            <div class="cc-title__header">Latest News</div>
        </div>
        <div class="cc-grid cc-grid--four-col">
            <div class="cc-grid__grid">
                <div class="cc-grid__cell" v-for="(item, index) in news" :key="index">
                    <section class="cc-card-simple">
                        <a href="" class="cc-card-simple__link">
                            <div class="cc-card-simple__cover">
                                <div class="cc-card-simple__frame">
                                    <img :src="item.image"
                                         :data-src="item.image"
                                         :alt="item.name"
                                         :title="item.name"
                                    >
                                </div>
                            </div>
                            <div class="cc-card-simple__info">
                                <div class="cc-card-simple__tags">
                                    <ul class="cc-tagList" v-for="(tag, i) in item.tags">
                                        <li :key="i">
                                            <span class="cc-tag cc-tag--small">
                                                <span>{{ tag }}</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <span class="cc-card-simple__meta">{{ item.date_posted }}</span>
                            </div>
                            <div class="cc-card-simple__content">
                                <h3 class="cc-card-simple__heading">{{ item.title }}</h3>
                                <p>{{ item.intro }}</p>
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
            news: [
                {
                    title: "News 1",
                    image: "https://images.crowdcube.com/unsafe/280x228/https://cdn-content-hub.crowdcube.com/files/cover-images/_image_280_228/marketsflow-blog-header.jpg",
                    tags: [
                        "Investor"
                    ],
                    date_posted: "Thu, 11 Apr",
                    intro: "Intro content goes here ...."
                },
                {
                    title: "News 2",
                    image: "https://images.crowdcube.com/unsafe/280x228/https://cdn-content-hub.crowdcube.com/files/cover-images/_image_280_228/marketsflow-blog-header.jpg",
                    tags: [
                        "Investment"
                    ],
                    date_posted: "Thu, 11 Apr",
                    intro: "Intro content goes here .... Bla bla bla ... long intro goes here ... Bla bla bla ... long intro goes here ..."
                }
            ]
        })
    }
</script>