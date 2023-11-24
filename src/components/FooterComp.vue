<template>
    <footer>
        <div class="w-screen footer-back"></div>
        <div class="flex bg-darling-purple lg:p-16 flex-col md:flex-row sm:p-5 justify-center gap-8">
            <div class="text-white">
                <h3 class="text-center mb-5 font-bold text-lg uppercase">Address</h3>
                <p class="text-center">Teknologiveien 22, 2815 Gjøvik, Innlandet</p>
            </div>
            <div>
                <div class="flex flex-row justify-center gap-3 -mt-3 mb-10">
                    <a href="https://www.instagram.com/darling.linjeforening/"><img
                            src="/images/instagram-icon.svg" alt="Instagram icon"></a>
                    <a href="https://www.facebook.com/darling.linjeforening"><img
                            src="/images/facebook-icon.svg" alt="Facebook icon"></a>
                    <a href="https://www.linkedin.com/company/darling-linjeforening/"><img
                            src="/images/linkedin-icon.svg" alt="LinkedIn icon"></a>
                </div>
                <p class="text-white -mt-5 text-center">Follow us on Instagram, Facebook og LinkedIn!</p>
            </div>
            <div>
                <h3 class="text-white text-center mb-5 font-bold text-lg uppercase">Contact</h3>
                <p class="text-white text-center">kontakt@darlinglinjeforening.org</p>
            </div>
            <div class="hidden md:block"></div>
        </div>
        <div class="bg-darling-purple-light">
            <div class="flex justify-center -translate-y-4">
                <div class="flex justify-center rounded-full bg-darling-purple-light w-12 h-12 cursor-pointer"
                    id="footerBtn" @click="scrollToTop">
                    <img class="w-[18px] -translate-y-3" src="/images/arrow.svg" alt="arrow">
                </div>
            </div>
            <p class="flex justify-center -mt-11 p-6 text-bg-darling-purple">© 2023 DARLING Linjeforening</p>
        </div>
    </footer>
</template>

<script>
export default {
    methods: {
        scrollToTop() {
            // Scroll to the top of the page smoothly
            window.scrollTo({
                top: 0,
                behavior: 'smooth',
            });
        }
    }
}
</script>