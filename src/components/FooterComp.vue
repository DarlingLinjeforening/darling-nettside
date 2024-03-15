<template>
    <footer>
        <div class="w-screen footer-back"></div>
        <div
            class="flex bg-darling-purple p-10 justify-center gap-10 flex-wrap"
        >
            <div class="text-white">
                <h3 class="text-center mb-5 font-bold text-lg uppercase">
                    Address
                </h3>
                <p class="text-center underline">
                    <a
                        :href="
                            'http://maps.google.com/maps?q=' + contact.address
                        "
                        >{{ contact.address }}</a
                    >
                </p>
            </div>
            <div>
                <div class="flex flex-row justify-center gap-3 -mt-3 mb-10">
                    <a :href="this.socials[1]" target="_blank"
                        ><img
                            src="/images/instagram-icon.svg"
                            alt="Instagram icon"
                    /></a>
                    <a :href="this.socials[2]" target="_blank"
                        ><img
                            src="/images/facebook-icon.svg"
                            alt="Facebook icon"
                    /></a>
                    <a :href="this.socials[0]" target="_blank"
                        ><img
                            src="/images/linkedin-icon.svg"
                            alt="LinkedIn icon"
                    /></a>
                </div>
                <p class="text-white -mt-5 text-center">
                    {{ i18n.socialMedia.callout }}
                </p>
            </div>
            <div>
                <h3
                    class="text-white text-center mb-5 font-bold text-lg uppercase"
                >
                    Contact
                </h3>
                <p class="text-white text-center underline">
                    <a :href="'mailto:' + contact.email">{{ contact.email }}</a>
                </p>
            </div>
            <div class="hidden md:block"></div>
        </div>
        <div class="bg-darling-purple-light">
            <div class="flex justify-center -translate-y-4">
                <button
                    class="flex justify-center rounded-full bg-darling-purple-light w-12 h-12 cursor-pointer"
                    id="footerBtn"
                    @click="scrollToTop"
                >
                    <img
                        class="w-[18px] -translate-y-3"
                        src="/images/arrow.svg"
                        alt="Go to the top of the page"
                    />
                </button>
            </div>
            <p class="flex justify-center -mt-11 p-6 text-bg-darling-purple">
                {{ i18n.socialMedia.copyright }}
            </p>
        </div>
    </footer>
</template>

<script>
    import { i18n } from '../i18n';

    export default {
        data() {
            return {
                i18n,
                contact: [],
                socials: [],
            };
        },
        mounted() {
            this.$sanityClient
                .fetch('*[_type == "contact"]{email, address, socials}')
                .then((data) => {
                    this.contact = data[0];
                    this.socials = data[0].socials;
                });
        },
        methods: {
            scrollToTop() {
                // Scroll to the top of the page smoothly
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth',
                });
            },
        },
    };
</script>
