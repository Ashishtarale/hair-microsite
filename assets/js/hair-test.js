
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                let prevBtn = document.getElementById("prevBtn");
                prevBtn.style.display = "none";
            } else {
                let prevBtn = document.getElementById("prevBtn");
                prevBtn.style.display = "inline"
            };
            if (n == (x.length - 2)) {
                let nextBtn = document.getElementById("nextBtn").innerHTML = "Submit";
                console.log('submit')
                let regForm = document.getElementById("regForm");
                regForm.submit();
                return false;
            }
            if (n == (x.length - 1)) {
                let prevBtn = document.getElementById("prevBtn");
                prevBtn.innerHTML = 'Re-Test';
                prevBtn.addEventListener('click', () => {
                    location.reload();
                    console.log('Test Ashish');
                })
                let nextBtn = document.getElementById("nextBtn").style.display = 'none';
            } else {
                let nextBtn = document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            // if (currentTab >= x.length) {
            //     ... the form gets submitted:
            //      document.getElementById("regForm").submit();
            //     return false;
            // }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value === "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

        let maleHairfall_cont = document.getElementById('maleHairfall_cont');
        let femaleHairfall_cont = document.getElementById('femaleHairfall_cont');

        let male_slighthairline_cont = document.getElementById('male_slighthairline_cont');
        let female_slighthairline_cont = document.getElementById('female_slighthairline_cont');

        let male_deephairline_cont = document.getElementById('male_deephairline_cont');
        let female_deephairline_cont = document.getElementById('female_deephairline_cont');

        let male_thinning_cont = document.getElementById('male_thinning_cont');
        let female_thinning_cont = document.getElementById('female_thinning_cont');

        let male_scalp_cont = document.getElementById('male_scalp_cont');
        let female_scalp_cont = document.getElementById('female_scalp_cont');

        let male_bald_cont = document.getElementById('male_bald_cont');
        let female_bald_cont = document.getElementById('female_bald_cont');


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