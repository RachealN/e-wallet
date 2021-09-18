
<template>
  <div>
    <form class="form-horizontal" @submit.prevent="register">
        <div class="form-group">
            <div v-if="success" class="alert-success">{{ success }}</div>
        </div>
      
        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label">Names</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="names" v-model="fields.names" placeholder="Names">
            </div>
            <div v-if="errors && errors.names" class="text-danger text-center">{{ errors.names[0] }}</div>
        </div>

        <div class="form-group">
            <label  class="col-lg-2 col-sm-2 control-label">Contact</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="contact" v-model="fields.contact"  placeholder="Contact">
            </div>
            <div v-if="errors && errors.contact" class="text-danger text-center">{{ errors.contact[0] }}</div>
        </div>
      
        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="email"  v-model="fields.email" placeholder="Email">
            </div>
            <div v-if="errors && errors.email" class="text-danger text-center">{{ errors.email[0] }}</div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="password" v-model="fields.password" placeholder="Password">
            </div>
            <div v-if="errors && errors.password" class="text-danger text-center">{{ errors.password[0] }}</div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-primary">CREATE ACCOUNT</button>
                <a href="" class="btn btn-primary" >BACK TO LOGIN</a>
            </div>
        </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
        fields: {},
        success: false,
        isLoading: true,
        errors: {},
    };
  },
methods:{
    register() {
        axios.post('/api/register',this.fields)
        .then((response) => {
            this.fields = {};
            this.isLoading = true;
            this.success = response.data.message
            })
        .catch((error) => {
            this.isLoading = true;
        if (error.response.status === 422) {
            this.errors = error.response.data.errors || {};
                    }
                })
            },
        }
};
</script>
