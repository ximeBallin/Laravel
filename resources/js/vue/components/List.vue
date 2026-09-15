<template>
    <div>
        <h2>Listado de Post</h2>

        <o-table
            :data="posts"
            :paginated="true"
            :per-page="5"
            pagination-position="bottom">

            <o-table-column field="id" label="ID" v-slot="props">
                {{ props.row.id }}
            </o-table-column>

            <o-table-column field="title" label="Título" v-slot="props">
                {{ props.row.title }}
            </o-table-column>

            <o-table-column field="posted" label="Posteado" v-slot="props">
                {{ props.row.posted }}
            </o-table-column>

            <o-table-column field="created_at" label="Fecha" v-slot="props">
                {{ props.row.created_at }}
            </o-table-column>

            <o-table-column field="category" label="Categoría" v-slot="props">
                {{ props.row.category?.title }}
            </o-table-column>
        </o-table>
    </div>
</template>
