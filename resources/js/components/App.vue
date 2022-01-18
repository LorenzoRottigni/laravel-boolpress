<template>
    <div class="row">
        <div class="col-4">
            <div class="svg-background-container">

            </div>
        </div>
        <div class="col-8 text-right">
            <h1 class="section-title rounded p-3">This is an awesome blog !</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam labore veniam cupiditate, voluptatibus soluta corrupti vero eius iusto facilis vitae! Voluptatibus vel laboriosam quod, qui odio iste cumque corrupti consequatur!
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "App",
    components:{

    },
    data(){
        return {
            helloMsg : 'Hello vue'
        }
    },
    mounted(){
        console.log('component mounted');
    }
}
</script>

<style lang="sass" scoped>
.svg-background-container
    width: 100%
    height: 100vh
    background-color: #FFFFFF
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='100' y1='33' x2='100' y2='-3'%3E%3Cstop offset='0' stop-color='%23000' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23000' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='100' y1='135' x2='100' y2='97'%3E%3Cstop offset='0' stop-color='%23000' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23000' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23d4d4d4' fill-opacity='0.6'%3E%3Crect x='100' width='100' height='100'/%3E%3Crect y='100' width='100' height='100'/%3E%3C/g%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23a)' points='100 30 0 0 200 0'/%3E%3Cpolygon fill='url(%23b)' points='100 100 0 130 0 100 200 100 200 130'/%3E%3C/g%3E%3C/svg%3E")
</style>
