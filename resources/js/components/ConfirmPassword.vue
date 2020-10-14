<template>
    <div>
        <div v-if="confirmingPassword">
            <form @submit.prevent="confirmPassword">
                <div class="mt-4">
                    <input v-model="password" type="password" class="bg-gray-200 py-1 px-2 rounded-md shadow-sm block mt-1 w-full" required />
                </div>

                <div class="mt-4 flex justify-end">
                    <a class="inline-block py-2 px-4 bg-gray-700 text-white rounded" @click="confirmingPassword = false">
                        Cancel
                    </a>

                    <button class="inline-block py-2 px-4 bg-blue-400 text-white rounded ml-2">
                        Confirm
                    </button>
                </div>
            </form>
        </div>

        <span v-else @click="startConfirmingPassword">
            <slot />
        </span>
    </div>
</template>

<script>
export default {
    data () {
        return {
            confirmingPassword: false,
            password: ''
        }
    },

    methods: {
        startConfirmingPassword () {
            axios.get('/user/confirmed-password-status')
                .then((response) => {
                    if (response.data.confirmed) {
                        this.$emit('confirmed')
                    } else {
                        this.confirmingPassword = true
                    }
                })
        },

        confirmPassword () {
            axios.post('/user/confirm-password', {
                password: this.password,
            }).then(response => {
                this.confirmingPassword = false
                this.$emit('confirmed')
            })
        },
    }
}
</script>
