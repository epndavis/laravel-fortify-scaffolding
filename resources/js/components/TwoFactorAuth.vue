<template>
    <div>
        <h2 class="text-lg">
            Two Factor Authentication
        </h2>

        <p class="mt-4">
            Add additional security to your account using two factor authentication.
        </p>

        <p class="text-sm mt-4 text-gray-600">
            When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.
        </p>

        <div v-if="qrCode" class="mt-4">
            <p class="font-semibold">
                Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.
            </p>

            <div v-html="qrCode" class="mt-3" />
        </div>

        <div class="mt-4">
            <confirm-password v-if="!twoFactorEnabled" @confirmed="enableTwoFactorAuthentication()">
                <button class="inline-block py-2 px-4 bg-blue-400 text-white rounded">
                    Enable
                </button>
            </confirm-password>

            <confirm-password v-else @confirmed="disableTwoFactorAuthentication()">
                <button class="inline-block py-2 px-4 bg-red-600 text-white rounded">
                    Disable
                </button>
            </confirm-password>
        </div>
    </div>
</template>

<script>
import ConfirmPassword from './ConfirmPassword'

export default {
    components: {
        ConfirmPassword
    },

    props: {
        enabled: {
            type: Boolean,
            default: false
        }
    },

    data () {
        return {
            twoFactorEnabled: this.enabled,
            qrCode: ''
        }
    },

    methods: {
        enableTwoFactorAuthentication () {
            axios.post('/user/two-factor-authentication')
                .then(() => {
                    return Promise.all([
                        this.showQrCode()
                    ])
                }).then(() => {
                    this.twoFactorEnabled = true
                })
        },

        showQrCode () {
            return axios.get('/user/two-factor-qr-code')
                .then(response => {
                    this.qrCode = response.data.svg
                })
        },

        disableTwoFactorAuthentication () {
            axios.delete('/user/two-factor-authentication')
                .then(() => {
                    this.twoFactorEnabled = false
                    this.qrCode = ''
                })
        }
    }
}
</script>
