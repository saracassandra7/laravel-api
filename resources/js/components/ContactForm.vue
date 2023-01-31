<script>
export default {
    name: 'ContactForm'

}
</script>

<template>

<div class="container">
    <form>

        <div class="form-group">
            <label for="name">Nome</label>
            <input v-model.trim="name" type="text" class="form-control" placeholder="Inserisci il tuo nome">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input v-model.trim="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci l'email">
        </div>

        <div class="form-group">
            <label for="messaggio">Messaggio</label>
            <textarea v-model.trim="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary my-3">Invia</button>
    </form>
</div>

</template>


<style>

</style>
