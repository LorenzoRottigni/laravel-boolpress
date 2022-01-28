<template>
    <div class="col-8 offset-2 pt-5">
        <h3 class="mb-5 text-center">
            Il 43% dei siti web usa la tecnologia WordPress.
            Blogger, piccole attività e grandi aziende nella lista Fortune 500 usano WordPress più di tutte le alternative messe insieme.
            Unisciti ai milioni di utenti che hanno scelto WordPress.com.
        </h3>
        <img src="/img/guest-hero-image.jpg" alt="guest hero image" class="w-100 rounded shadow-lg mb-5">
        <router-link
            class="text-center"
            :to="{ name: 'posts.index' }"
        >
            Show posts
        </router-link>
    </div>
</template>

<script>
export default {
    name:'Home'
}
</script>
