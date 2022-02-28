<div ref="serma_baby_gender_predictor_form" class="container md:border border-gray-300 rounded-2xl px-4 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-3">
        <div class="hidden md:inline cols-span-1 px-3 md:px-3 pt-6 pb-4 bg-cover"
            style="background-image: url('<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/img/section-1-bg.svg'); background-repeat: no-repeat">
            <div class="baby-comment-box pt-1 px-2">
                <h2 class="text-18px md:text-[24px] text-center md:text-left text-black font-semibold mb-2">
                    Predictor Chino de <span
                        class="font-['Cookie'] text-purple-lighten font-normal text-40px">Género</span></h2>
            </div>
            <img class="pb-3 max-w-[208px] mx-auto"
                src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/img/chinese-predictor-bg.png">
        </div>

        <div class="bg-yellow-lighten md:col-span-2 p-3 md:p-6 rounded-2xl">
            <form method="post">
                <h2
                    class="md:hidden mx-8 px-4 pt-2 pb-1 bg-white rounded-tr-3xl rounded-bl-3xl text-18px text-black text-center font-semibold mb-4">
                    Predictor Chino de <span
                        class="font-['Cookie'] text-purple-lighten font-normal text-[28px]">Género</span></h2>

                <div class="grid grid-cols-5 mb-4">
                    <div class="col-span-3 flex items-center">
                        <img class="w-[20px] mr-2" src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/chinese-predictor/mother-age.svg">
                        <label class="text-secondary text-13px md:text-14px" for="">
                            Edad de la madre
                        </label>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <input v-model="form.mother_age" name="mother_age" type="number" placeholder="0"
                            class="w-full h-8 px-4 py-5 mt-2 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300"
                            required>
                    </div>
                </div>

                <div class="col-span-2 flex items-center">
                    <img class="w-[20px] mr-2" src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/chinese-predictor/conception-date.svg">
                    <p class="text-secondary text-13px md:text-14px">
                        Fecha de concepción
                    </p>
                </div>

                <div class="mb-3">

                    <div class="mt-3 justify-between grid grid-cols-3 md:grid-cols-4 gap-y-2">
                        <label class="w-full md:w-auto">
                            <input checked type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer"
                                value="1" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Ene</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="2" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Feb</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="3" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Mar</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="4" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Abr</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="5" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                May</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="6" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Jun</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="7" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Jul</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="8" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Ago</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="9" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Sep</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="10" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Oct</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="11" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Nov</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.conception_month" name="conception_month" class="hidden peer" value="12" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                Dic</div>
                        </label>

                    </div>

                </div>
                <button type="button"
                    class="my-3 w-full md:w-auto rounded text-[15px] md:text-14px bg-green-lighten px-4 py-4 md:py-3 text-white font-regular"
                    @click="getResults" :disabled="loading">
                    <span v-if="loading">Generando...</span>
                    <span v-else>
                        Predice el sexo de tu bebé
                    </span>
                </button>
            </form>
        </div>

    </div>
</div>

<?= SERMA_BABY_GENDER_PREDICTOR_TEMPLATE::show_template('chinese-predictor/form/results') ?>