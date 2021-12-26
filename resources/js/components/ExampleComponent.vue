<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                             </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        
           Echo.join('log-message')
    .here((users) => {
       console.log(users);
    })
    .joining((users) => {
        console.log(users);
    })
    .leaving((users) => {
        console.log(users);
    })
    .error((error) => {
        console.log(error);
    });
        }

        
    }
</script>
