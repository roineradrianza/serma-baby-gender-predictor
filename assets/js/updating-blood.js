/*VUE INSTANCE*/

const vm = Vue.createApp({
        data() {
            return {
                loading: false,
                show_result: false,
                gender_selected: 0,
            }
        },

        methods: {
            getResults() {
                let app = this
                app.loading = true

                app.calc().then(res => {
                    app.gender_selected = res
                    app.loading = false
                    app.show_result = true
                    app.$refs.serma_gutb_results.scrollIntoView({
                        behavior: "smooth"
                    })
                })

            },

            resetForm() {
                let app = this
                app.show_result = false
                app.gender_selected = 0
                app.$refs.father_birthdate_input.value = ''
                app.$refs.mother_birthdate_input.value = ''
                app.$refs.conception_date_input.value = ''
                app.$refs.serma_gutb_container.scrollIntoView({
                    behavior: "smooth"
                })
            },

            async calc() {
                let app = this

                let father = app.$refs.father_birthdate_input.value
                let mother = app.$refs.mother_birthdate_input.value
                let conception_date = app.$refs.conception_date_input.value

                let father_arr = father.split('/');
                let mother_arr = mother.split('/');
                let conception_arr = conception_date.split('/');

                let year_o = parseInt(father_arr[0]);
                let year_m = parseInt(mother_arr[0]);
                let year_z = parseInt(conception_arr[0]);

                let month_o = parseInt(father_arr[1]);
                let month_m = parseInt(mother_arr[1]);
                let month_z = parseInt(conception_arr[1]);

                let day_o = parseInt(father_arr[2]);
                let day_m = parseInt(mother_arr[2]);
                let day_z = parseInt(conception_arr[2]);

                while (year_o <= year_z) {
                    if (year_o === year_z) {
                        if (month_o < month_z) {
                            year_o = year_o;
                            break;
                        } else {
                            if (month_o === month_z) {
                                if (day_o < day_z) {
                                    year_o = year_o;
                                    break;
                                } else {
                                    year_o = year_o - 4;
                                    break;
                                }
                            } else {
                                year_o = year_o - 4;
                                break;
                            }
                        }
                    } else {
                        if (year_o > year_z - 4) {
                            year_o = year_o;
                            break;
                        } else {
                            year_o = year_o + 4;
                        }
                    }
                }

                while (year_m <= year_z) {
                    if (year_m === year_z) {
                        if (month_m < month_z) {
                            year_m = year_m;
                            break;
                        } else {
                            if (month_m === month_z) {
                                if (day_m < day_z) {
                                    year_m = year_m;
                                    break;
                                } else {
                                    year_m = year_m - 3;
                                    break;
                                }
                            } else {
                                year_m = year_m - 3;
                                break;
                            }
                        }
                    } else {
                        if (year_m > year_z - 3) {
                            year_m = year_m;
                            break;
                        } else {
                            year_m = year_m + 3;
                        }
                    }
                }

                let reb;

                if (year_o === year_m) {
                    reb = month_o > month_m
                    if (reb) {
                        return reb
                    } else {
                        reb = month_o === month_m
                        if (reb) {
                            return day_o > day_m
                        } else {
                            return reb
                        }
                    }
                } else {
                    return year_o > year_m
                }

            }

        }
    })
    .mount('#serma-gutb-container')