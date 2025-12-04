<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    item: Object
})

const form = useForm({
    descricao: props.item.descricao,
    codigo: props.item.codigo,
    estado: props.item.estado
})

const submit = () => form.put(`/tipo_passes/${props.item.id}`)
</script>

<template>
    <div>
        <h1 class="text-xl font-bold mb-4">Editar Tipo de Passe</h1>

        <form @submit.prevent="submit" class="space-y-4">
            <input v-model="form.descricao" class="input"/>

            <input v-model="form.codigo" class="input"/>

            <input v-model="form.estado" class="input"/>

            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Atualizar
            </button>
        </form>
    </div>
</template>
    