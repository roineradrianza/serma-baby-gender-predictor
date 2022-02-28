/*VUE INSTANCE*/

const vm = Vue.createApp({
    data () {
        return {
            loading: false,
            show_result: false,
            gender_selected: 0,
            form: {
                mother_age: 25,
                conception_month: 1
            },
            default: {
                mother_age: 25,
                conception_month: 1
            },
        }
    },
  
    methods: {
        getResults() {
            let app = this
            app.loading = true

            app.calc().then( res => {
                app.gender_selected = res
                app.loading = false
                app.show_result = true
                app.$refs.serma_gcp_results.scrollIntoView({behavior: "smooth"})  
            })

        },

        resetForm() {
            let app = this
            app.show_result = false
            app.gender_selected = 0
            app.form = Object.assign({}, app.default)
            app.$refs.serma_baby_gender_predictor_form.scrollIntoView({behavior: "smooth"})
        },

        async calc() {
            let app = this
            let mother_age = app.form.mother_age
            let conception_month = parseInt(app.form.conception_month)

            let values = Array()
            values[0] = Array('N/A', 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1)
            values[1] = Array('N/A', 1, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0)
            values[2] = Array('N/A', 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1)
            values[3] = Array('N/A', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
            values[4] = Array('N/A', 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0)
            values[5] = Array('N/A', 1, 1, 1, 0, 1, 1, 0, 0, 0, 1, 1, 0)
            values[6] = Array('N/A', 1, 0, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1)
            values[7] = Array('N/A', 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1)
            values[8] = Array('N/A', 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 0, 0)
            values[9] = Array('N/A', 0, 0, 1, 1, 0, 1, 0, 0, 1, 0, 1, 1)
            values[10] = Array('N/A', 1, 1, 1, 0, 0, 1, 0, 1, 0, 0, 1, 0)
            values[11] = Array('N/A', 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0)
            values[12] = Array('N/A', 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1)
            values[13] = Array('N/A', 1, 1, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0)
            values[14] = Array('N/A', 1, 0, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1)
            values[15] = Array('N/A', 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0)
            values[16] = Array('N/A', 1, 1, 0, 0, 1, 0, 1, 1, 0, 1, 0, 0)
            values[17] = Array('N/A', 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1)
            values[18] = Array('N/A', 1, 0, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0)
            values[19] = Array('N/A', 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1)
            values[20] = Array('N/A', 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0)
            values[21] = Array('N/A', 0, 0, 1, 0, 0, 0, 1, 0, 1, 1, 0, 1)
            values[22] = Array('N/A', 1, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1)
            values[23] = Array('N/A', 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0)
            values[24] = Array('N/A', 1, 0, 0, 1, 1, 1, 1, 1, 0, 1, 0, 1)
            values[25] = Array('N/A', 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1)
            values[26] = Array('N/A', 1, 0, 0, 0, 1, 0, 1, 1, 0, 1, 0, 1)
            values[27] = Array('N/A', 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0)
    
            let mage = mother_age-18;
            let result = values[mage][conception_month];
    
            return result;

        }

    }
  })
  .mount('#serma-gcp-container')
