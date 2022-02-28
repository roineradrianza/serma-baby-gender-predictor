<div ref="serma_gpbt_container" class="container md:border border-gray-300 rounded-2xl px-4 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-6">
        <div class="hidden md:inline col-span-2 px-3 md:px-3 pt-4 pb-6 bg-cover"
            style="background-image: url('<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/img/section-1-bg.svg'); background-repeat: no-repeat">
            <div class="baby-comment-box pt-1 px-1">
                <h2 class="text-18px md:text-[24px] text-center md:text-left text-black font-semibold mb-2">
                    Sexo del niño por tipo de <span
                        class="font-['Cookie'] text-purple-lighten font-normal text-40px">Sangre</span></h2>
            </div>
            <img class="pb-3 max-w-[208px] mx-auto"
                src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/img/parent-blood-type-bg.png">
        </div>

        <div class="bg-yellow-lighten md:col-span-4 p-3 md:p-6 rounded-2xl">
            <form method="post">
                <h2
                    class="md:hidden mx-8 px-4 pt-2 pb-1 bg-white rounded-tr-3xl rounded-bl-3xl text-18px text-black text-center font-semibold mb-4">
                    Sexo del niño por tipo de <span
                        class="font-['Cookie'] text-purple-lighten font-normal text-[28px]">Sangre</span></h2>

                <div class="col-span-2 flex items-center">
                    <img class="w-[20px] mr-2" src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/parent-blood-type/father-bt.svg">
                    <p class="text-secondary text-13px md:text-14px">
                        Tipo de sangre del padre
                    </p>
                </div>

                <div class="mb-3">

                    <div class="mt-3 justify-between grid grid-cols-4 gap-y-2">
                        <label class="w-full md:w-auto">
                            <input checked type="radio" v-model="form.father_bt" name="father_bt" class="hidden peer"
                                value="1" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                AB</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.father_bt" name="father_bt" class="hidden peer" value="2" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                A</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.father_bt" name="father_bt" class="hidden peer" value="3" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                B</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.father_bt" name="father_bt" class="hidden peer" value="4" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                O</div>
                        </label>

                    </div>

                </div>
              
                <div class="col-span-2 flex items-center mt-8">
                    <img class="w-[20px] mr-2" src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/parent-blood-type/mother-bt.svg">
                    <p class="text-secondary text-13px md:text-14px">
                        Tipo de sangre de la madre
                    </p>
                </div>

                <div class="mb-3">

                    <div class="mt-3 justify-between grid grid-cols-4 gap-y-2">
                        <label class="w-full md:w-auto">
                            <input checked type="radio" v-model="form.mother_bt" name="mother_bt" class="hidden peer"
                                value="1" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                AB</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.mother_bt" name="mother_bt" class="hidden peer" value="2" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                A</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.mother_bt" name="mother_bt" class="hidden peer" value="3" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                B</div>
                        </label>

                        <label class="w-full md:w-auto">
                            <input type="radio" v-model="form.mother_bt" name="mother_bt" class="hidden peer" value="4" />
                            <div
                                class="peer-checked:border-green-lighten peer-checked:text-green-lighten peer-checked:font-semibold 
                                peer-checked:border-2 bg-white peer-checked:px-5 peer-checked:py-1.5 py-2 md:peer-checked:py-1 md:py-1.5 px-6 mr-2 text-center text-13px md:text-16px rounded-full">
                                O</div>
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

<?= SERMA_BABY_GENDER_PREDICTOR_TEMPLATE::show_template('parent-blood-type/form/results') ?>