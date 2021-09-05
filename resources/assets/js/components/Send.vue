<template>
    <section class="panel panel-default">
        <header class="panel-heading text-center">
            <h3><b>SEND MONEY</b></h3>
        </header>

        <div class="panel-body ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form @submit.prevent="sendMoney">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Receiver Contacts</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="contact" 
                                        placeholder="e.g 0782578907"
                                        v-model="clientDetails.contact" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Amount</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="amount" 
                                        placeholder="amount to send"
                                        v-model="clientDetails.amount"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Description</label>
                            <textarea 
                                class="form-control" 
                                name="description" 
                                id="description" 
                                placeholder="short description"
                                v-model="clientDetails.description">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">SEND MONEY</button>
                        </div>
                                            
                    </form>
                </div>
            </div>
        </div>              
    </section>
</template>

<script>
import axios from 'axios';
    export default {
        name: 'send',

        data() {
            return {
                success: false,
                error: false,
                loading: false,
                clientDetails: {
                    contact: '',
                    amount: '',
                    description: '',
            },

            }
        },

        methods: {
            sendMoney() {
                // console.log( this.clientDetails)
                this.loading = true,
                axios.post('/send', this.clientDetails)

                 .then((res) => {
                    this.success = true;
                    console.log(res.data, 'response')
                     
                 })
                 .catch((error) => {
                    this.error = true;
                    console.log(error)

                 }).finally(() => {
                    this.loading =  false
                 });
                
            }
        },
        
    }
</script>