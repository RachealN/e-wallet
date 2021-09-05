<template>
    <div class="row" id="home-content">
        <div class="col-lg-9">
            <section class="panel">
                <div class="">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                </div>
                <div class="">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                </div>
                <header class="panel-heading">
                    <b>Recent Transactions</b> 
                </header>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Transaction #ID</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody v-for="transaction in transactions" :key="transaction">
                        <tr>
                            <td>{{ transaction.trans_id }}</td>
                            <td>{{ transaction.date }}</td>
                             <td>{{ transaction.type }}</td>
                            <td>{{ transaction.amount }}</td>
                            <td><button class="btn btn-primary">Details</button></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <header class="panel-title">
                                <div class="text-center">
                                    <strong>Account Summary</strong>
                                </div>
                            </header>
                        </div>
                    <div class="panel-body">
                <div class="text-center" id="author">

                <h3>Balance</h3>
                <h2 v-model="acc_balance">  {{ acc_balance.balance}} USD</h2>
            </div>
            
            </div>
        </div>
    </div>
</div>
</div> 
</template>

<script>

export default {
    props: {
        transactions: {
            type: Array,
            required: true
        },

        acc_balance : {
            type: Array,
            required: true
        },
    },

}
</script>
