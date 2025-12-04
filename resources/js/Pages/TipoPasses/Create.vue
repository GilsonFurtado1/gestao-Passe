<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    descricao: '',
    estado: '',
    codigo: ''
})

const submit = () => form.post('/tipo_passes')
</script>

<template>
    <div>
        <h1 class="text-xl font-bold mb-4">Novo Tipo de Passe</h1>

        <form @submit.prevent="submit" class="space-y-4">

            <input v-model="form.descricao" placeholder="Descrição" class="input"/>

            <input v-model="form.codigo" placeholder="Código" class="input"/>

            <input v-model="form.estado" placeholder="Estado" class="input"/>

            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Guardar
            </button>
        </form>
    </div>
</template>
