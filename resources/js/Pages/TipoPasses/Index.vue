
<script setup>
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    items: {
        type: Array,
        required: true
    }
})

</script>

<template>
  <div>
    <h1 class="text-xl font-bold mb-4">Tipo de Passes</h1>
    <Link href="/tipo_passes/create" class="bg-blue-600 text-white px-4 py-2 rounded inline-block">
      Novo
    </Link>

    <table class="mt-4 w-full border border-gray-300 text-left" v-if="props.items.length">
      <thead>
        <tr class="bg-gray-100">
          <th class="p-2 border">ID</th>
          <th class="p-2 border">Descrição</th>
          <th class="p-2 border">Código</th>
          <th class="p-2 border">Estado</th>
          <th class="p-2 border w-32">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="i in props.items" :key="i.id" class="border-t hover:bg-gray-50">
          <td class="p-2 border">{{ i.id }}</td>
          <td class="p-2 border">{{ i.descricao }}</td>
          <td class="p-2 border">{{ i.codigo }}</td>
          <td class="p-2 border">{{ i.estado }}</td>
          <td class="p-2 border flex gap-2">
            <Link :href="`/tipo_passes/${i.id}/edit`" class="text-blue-600 hover:underline">Editar</Link>
            <Link method="delete" as="button" :href="`/tipo_passes/${i.id}`" class="text-red-600 hover:underline">Eliminar</Link>
          </td>
        </tr>
      </tbody>
    </table>

    <p v-else>Nenhum registro encontrado.</p>
  </div>
</template>
