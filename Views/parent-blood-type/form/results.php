<div ref="serma_gpbt_results" class="px-4 md:px-0">
    <div class="container border rounded-lg mt-6"
        :class="{ 'border-[#62CEF9]': gender_selected, 'border-[#FB80BA]': !gender_selected }" v-if="show_result">
        <div class="grid grid-cols-12 gap-2 p-6"
            :class="{ 'bg-[#62cef91a]': gender_selected, 'bg-[#fb80ba1a]': !gender_selected }">
            <div class="col-span-12">
                <h3 class="text-16px md:text-[30px] font-semibold text-center"
                    :class="{ 'text-[#62CEF9]': gender_selected, 'text-[#FB80BA]': !gender_selected }">
                    ¡Es
                    <template v-if="!gender_selected">
                        una niña!
                    </template>
                    <template v-else>
                        un niño!
                    </template>
                </h3>
                <p class="text-13px md:text-16px text-center">
                    <b>¡Felicidades!</b>
                    Según el sexo del niño por tipo de sangre, vas a tener 
                    <template v-if="!gender_selected">
                        una niña.
                    </template>
                    <template v-else>
                        un niño.
                    </template>
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 pt-6 pl-4 pr-6 my-4">
            <div class="flex justify-center">
                <img class="w-[217px]" :src="gender_selected ? '<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/img/boy.svg' 
            : '<?= SERMA_BABY_GENDER_PREDICTOR_URL ?>/assets/img/girl.svg'">
            </div>
        </div>
        <div class="px-9 mb-4 flex justify-center">
            <button type="button" class="w-full md:w-auto my-3 rounded px-6 py-3 text-purple-darken text-center font-normal bg-transparent"
                @click="resetForm">
                <span class="fas fa-chevron-left mr-2 "></span>
                <span class="text-[15px] md:text-16px">Comenzar de nuevo</span>
            </button>
        </div>
    </div>
</div>