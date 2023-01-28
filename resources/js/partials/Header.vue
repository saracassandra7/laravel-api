<script>
export default {
    name: 'Header'
}
</script>

<template>
    <header>
        <ul>
            <li><router-link :to="{ name: 'home'}">home</router-link></li>
            <li><router-link :to="{ name: 'about'}">chi siamo</router-link></li>
            <li><router-link :to="{ name: 'contacts'}">contatti</router-link></li>
            <li><router-link :to="{ name: 'blog'}">blog</router-link></li>
        </ul>
    </header>

</template>

<style lang="scss" scoped>
header{
    text-align: center;
    padding: 20px 0;
    ul{
        list-style: none;
        li{
            display: inline-block;
            padding: 10px 20px;
            a{
                color: darkblue;
                text-decoration: none;
                text-transform: uppercase;
                &:hover,
                &.active{
                    color: aqua;
                }
            }
        }
    }
}

</style>
