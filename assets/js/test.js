
        // let maleBtn = document.getElementById('maleBtn');
        // let femaleBtn = document.getElementById('femaleBtn');
        // let maleCont = document.querySelector('.maleCont');
        // let femaleCont = document.querySelector('.femaleCont');


        // maleBtn.addEventListener('click', () => {
        //     maleCont.style.display = "block";
        //     femaleCont.style.display = "none";
        //     console.log('Ashish Code Is Running');
        // });

        // femaleBtn.addEventListener('click', () => {
        //     femaleCont.style.display = "block";
        //     maleCont.style.display = "none";
        //     console.log('Yuvansh Code Is Running');
        // });

        
        // let maleHairfall = document.getElementById('maleHairfall');
        let maleHairfall_cont = document.getElementById('maleHairfall_cont');
        let femaleHairfall_cont = document.getElementById('femaleHairfall_cont');


        // maleHairfall.addEventListener('click', ()=>{
        //     console.log('Button Was Clicked');
        //     maleHairfall_cont.style.display = 'block';
        //     document.querySelectorAll('.custom-radio').style.display = 'none';
        // });

        // let male_slighthairline = document.getElementById('male_slighthairline');
        let male_slighthairline_cont = document.getElementById('male_slighthairline_cont');
        let female_slighthairline_cont = document.getElementById('female_slighthairline_cont');


        // male_slighthairline.addEventListener('click', ()=>{
        //     console.log('Button Was Clicked');
        //     male_slighthairline_cont.style.display = 'block';
        // });

        // let male_deephairline = document.getElementById('male_deephairline');
        let male_deephairline_cont = document.getElementById('male_deephairline_cont');
        let female_deephairline_cont = document.getElementById('female_deephairline_cont');


        // male_deephairline.addEventListener('click', ()=>{
        //     console.log('Button Was Clicked');
        //     male_deephairline_cont.style.display = 'block';
        // });

        // let male_thinning = document.getElementById('male_thinning');
        let male_thinning_cont = document.getElementById('male_thinning_cont');
        let female_thinning_cont = document.getElementById('female_thinning_cont');


        // male_thinning.addEventListener('click', ()=>{
        //     console.log('Button Was Clicked');
        //     male_thinning_cont.style.display = 'block';
        // });

        // let male_scalp = document.getElementById('male_scalp');
        let male_scalp_cont = document.getElementById('male_scalp_cont');
        let female_scalp_cont = document.getElementById('female_scalp_cont');


        // male_scalp.addEventListener('click', ()=>{
        //     console.log('Button Was Clicked');
        //     male_scalp_cont.style.display = 'block';
        // });

        // let male_bald = document.getElementById('male_bald');
        let male_bald_cont = document.getElementById('male_bald_cont');
        let female_bald_cont = document.getElementById('female_bald_cont');


        // male_bald.addEventListener('click', ()=>{
        //     console.log('Button Was Clicked');
        //     male_bald_cont.style.display = 'block';
        // });


        let genderRadio = document.querySelectorAll('.genderRadio');
        let maleCont = document.querySelector('.maleCont');
        let femaleCont = document.querySelector('.femaleCont');


        genderRadio.forEach((radioBtn) =>{
            radioBtn.addEventListener('click', (e)=>{
               console.log(e.target.id); 
               if (e.target.id === "maleBtn") {
                maleCont.style.display = "block";
                femaleCont.style.display = "none";
               }
               if (e.target.id === "femaleBtn") {
                femaleCont.style.display = "block";
                maleCont.style.display = "none";
               }
            })
        });


        let selectTreat = document.querySelectorAll('.selectTreat');

        selectTreat.forEach((selectedTreat) =>{
            selectedTreat.addEventListener('click', (e)=>{
               console.log(e.target.id);
               
               if (e.target.id === "maleHairfall") {
                maleHairfall_cont.style.display = "block";
                male_slighthairline_cont.style.display = "none",
                male_deephairline_cont.style.display = "none",
                male_thinning_cont.style.display = "none",
                male_scalp_cont.style.display = "none",
                male_bald_cont.style.display = "none"
               }
               if (e.target.id === "male_slighthairline") {
                maleHairfall_cont.style.display = "none";
                male_slighthairline_cont.style.display = "block",
                male_deephairline_cont.style.display = "none",
                male_thinning_cont.style.display = "none",
                male_scalp_cont.style.display = "none",
                male_bald_cont.style.display = "none"
               }
               if (e.target.id === "male_deephairline") {
                maleHairfall_cont.style.display = "none",
                male_slighthairline_cont.style.display = "none",
                male_deephairline_cont.style.display = "block",
                male_thinning_cont.style.display = "none",
                male_scalp_cont.style.display = "none",
                male_bald_cont.style.display = "none"
               }
               if (e.target.id === "male_thinning") {
                maleHairfall_cont.style.display = "none";
                male_slighthairline_cont.style.display = "none",
                male_deephairline_cont.style.display = "none",
                male_thinning_cont.style.display = "block",
                male_scalp_cont.style.display = "none",
                male_bald_cont.style.display = "none"
               }
               if (e.target.id === "male_scalp") {
                maleHairfall_cont.style.display = "none";
                male_slighthairline_cont.style.display = "none",
                male_deephairline_cont.style.display = "none",
                male_thinning_cont.style.display = "none",
                male_scalp_cont.style.display = "block",
                male_bald_cont.style.display = "none"
               }
               if (e.target.id === "male_bald") {
                maleHairfall_cont.style.display = "none";
                male_slighthairline_cont.style.display = "none",
                male_deephairline_cont.style.display = "none",
                male_thinning_cont.style.display = "none",
                male_scalp_cont.style.display = "none",
                male_bald_cont.style.display = "block"
               }
               if (e.target.id === "femaleHairfall") {
                femaleHairfall_cont.style.display = "block";
                female_slighthairline_cont.style.display = "none",
                female_deephairline_cont.style.display = "none",
                female_thinning_cont.style.display = "none",
                female_scalp_cont.style.display = "none",
                female_bald_cont.style.display = "none"
               }
               if (e.target.id === "female_slighthairline") {
                femaleHairfall_cont.style.display = "none";
                female_slighthairline_cont.style.display = "block",
                female_deephairline_cont.style.display = "none",
                female_thinning_cont.style.display = "none",
                female_scalp_cont.style.display = "none",
                female_bald_cont.style.display = "none"
               }
               if (e.target.id === "female_deephairline") {
                femaleHairfall_cont.style.display = "none",
                female_slighthairline_cont.style.display = "none",
                female_deephairline_cont.style.display = "block",
                female_thinning_cont.style.display = "none",
                female_scalp_cont.style.display = "none",
                female_bald_cont.style.display = "none"
               }
               if (e.target.id === "female_thinning") {
                femaleHairfall_cont.style.display = "none";
                female_slighthairline_cont.style.display = "none",
                female_deephairline_cont.style.display = "none",
                female_thinning_cont.style.display = "block",
                female_scalp_cont.style.display = "none",
                female_bald_cont.style.display = "none"
               }
               if (e.target.id === "female_scalp") {
                femaleHairfall_cont.style.display = "none";
                female_slighthairline_cont.style.display = "none",
                female_deephairline_cont.style.display = "none",
                female_thinning_cont.style.display = "none",
                female_scalp_cont.style.display = "block",
                female_bald_cont.style.display = "none"
               }
               if (e.target.id === "female_bald") {
                femaleHairfall_cont.style.display = "none";
                female_slighthairline_cont.style.display = "none",
                female_deephairline_cont.style.display = "none",
                female_thinning_cont.style.display = "none",
                female_scalp_cont.style.display = "none",
                female_bald_cont.style.display = "block"
               }
            })
        });