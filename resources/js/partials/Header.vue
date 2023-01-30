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
            <li><router-link :to="{ name: 'projects'}">progetti</router-link></li>
        </ul>
    </header>

</template>

<style lang="scss" scoped>
header{
    text-align: center;
    padding: 10px 0;
    background-color: white;
    box-shadow: 1px 1px 10px #00ac8767;
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
