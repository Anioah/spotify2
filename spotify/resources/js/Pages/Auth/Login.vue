
<template >
<!--<img class="bg-black opacity-50" :style="{ backgroundImage:`url(https://indiehoy.com/wp-content/uploads/2017/11/nme-album-of-the-year.jpg)`}"/>-->
    
    <Head title="Log in" />
   
    <jet-authentication-card id="fondo">
        <template #logo>
            <jet-authentication-card-logo />
        </template>

        <jet-validation-errors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <jet-input id="email" type="email" placeholder="Correo electronico o nombre de usuario" class="mt-1 block w-full" v-model="form.email" required autofocus />
            </div>

            <div class="mt-4">
                <jet-input id="password" type="password" placeholder="Contraseña" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <jet-checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                </label>
            </div>

            <div class="flex items-start flex-row justify-end mt-4 pt-2">
                
                <Link :href="route('register')" class="underline text-sm text-white hover:text-green-600">
                   Registrarse
                </Link>

                <jet-button class="ml-4" :class="{ 'opacity-75': form.processing }" :disabled="form.processing">
                    INICIAR SESIÓN
                </jet-button>
            </div>
           
        </form>
    </jet-authentication-card>
    
</template>

<script>
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default {
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    }
</script>

<style scoped>
    #fondo{
        background-image: url('../../../img/fondo.png');
        
    }
</style>
