<div ref="serma_gutb_container" class="container md:border border-gray-300 rounded-2xl px-4 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-3">
        <div class="hidden md:inline cols-span-1 px-3 md:px-3 pt-6 pb-4 bg-cover"
            style="background-image: url('<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/img/section-1-bg.svg'); background-repeat: no-repeat">
            <div class="baby-comment-box pt-1 px-2">
                <h2 class="text-18px md:text-[24px] text-center md:text-left text-black font-semibold mb-2">
                    Género infantil actualizando la <span
                        class="font-['Cookie'] text-purple-lighten font-normal text-40px">Sangre</span></h2>
            </div>
            <img class="pb-3 max-w-[208px] mx-auto"
                src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/img/updating-blood-bg.png">
        </div>

        <div class="bg-yellow-lighten md:col-span-2 p-3 md:p-6 rounded-2xl">
            <form method="post">
                <h2
                    class="md:hidden mx-8 px-4 pt-2 pb-1 bg-white rounded-tr-3xl rounded-bl-3xl text-18px text-black text-center font-semibold mb-4">
                    Género infantil actualizando la <span
                        class="font-['Cookie'] text-purple-lighten font-normal text-[28px]">Sangre</span></h2>

                <div class="grid grid-cols-5 mb-4">
                    <div class="col-span-3 flex items-center">
                        <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/parent-blood-type/father-bt.svg">
                        <label class="text-secondary text-13px md:text-14px" for="">
                            Fecha de nacimiento del padre
                        </label>
                    </div>
                    <div class="col-span-2 relative">
                        <input datepicker 
                            ref="father_birthdate_input"
                            datepicker-format="dd/mm/yyyy"
                            datepicker-language="es"
                            type="text"
                            class="bg-gray-50 border border-gray-300 text-icon text-12px md:text-14px rounded-lg block w-full pr-10 p-2.5"
                            placeholder="DD/MM/YYYY">
                        <div class="flex absolute inset-y-0 right-0 items-center pl-3 pointer-events-none">
                            <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/calendar.svg">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-5 mb-4">
                    <div class="col-span-3 flex items-center">
                        <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/chinese-predictor/mother-age.svg">
                        <label class="text-secondary text-13px md:text-14px" for="">
                            Fecha de nacimiento de la madre
                        </label>
                    </div>
                    <div class="col-span-2 relative">
                        <input datepicker
                            ref="mother_birthdate_input"
                            datepicker-format="dd/mm/yyyy"
                            datepicker-language="es"
                            type="text"
                            class="bg-gray-50 border border-gray-300 text-icon text-12px md:text-14px rounded-lg block w-full pr-10 p-2.5"
                            placeholder="DD/MM/YYYY">
                        <div class="flex absolute inset-y-0 right-0 items-center pl-3 pointer-events-none">
                            <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/calendar.svg">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-5 mb-4">
                    <div class="col-span-3 flex items-center">
                        <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/updating-blood/conception-date.svg">
                        <label class="text-secondary text-13px md:text-14px" for="">
                            Fecha de concepción
                        </label>
                    </div>
                    <div class="col-span-2 relative">
                        <input datepicker 
                            ref="conception_date_input"
                            datepicker-format="dd/mm/yyyy"
                            datepicker-language="es"
                            type="text"
                            class="bg-gray-50 border border-gray-300 text-icon text-12px md:text-14px rounded-lg block w-full pr-10 p-2.5"
                            placeholder="DD/MM/YYYY">
                        <div class="flex absolute inset-y-0 right-0 items-center pl-3 pointer-events-none">
                            <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/icons/calendar.svg">
                        </div>
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

<?= SERMA_BABY_GENDER_PREDICTOR_TEMPLATE::show_template('updating-blood/form/results') ?>