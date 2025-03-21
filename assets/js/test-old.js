// // let name = prompt('Enter your name')
// // console.log(name);


// // ----------logical opretors--------------

// // Logical And  && - Need all corect 
// // Logical Or || - Need any one statement corect 
// // Logical Not ! - false statement is true, true statement is fale

// // {
// // let a = 6;
// // let b = 4;

// // let cond1 = 6 < 5;
// // let cond2 = a < b;

// // console.log("cond1 ! cond2 is", !(5 > 6));
// // };

// // ----------Conditional opretors--------------

// // let a = 20;
// // let b = 200;

// // if(a < b){
// //     console.log('Than type TRUE');
// // }else if(a === b){
// //     console.log('Than type Work');
// // }else{
// //     console.log('Or type False');
// // }


// // let mode = prompt("Enter your name");
// // let color;

// // if(mode == 'Dark'){
// //     color = "White";
// // }else if(mode == "Light"){
// //     color = "Black";
// // }else{
// //     console.log(mode);
// // };
// // console.log(color);


// // Name        Percentage      Number
// // Ashish      90              9876543210
// // Akshay      80              7021894035
// // Santosh     70              9821340248
// // Arush       60              1234567890
// // Chetan      50              9874561230



// // let profile = prompt(username:,
// //     percentage:,
// //     phone:,
// //     ispass:,
// // );

// // console.log(profile);


// // let count = 1

// // for(let count = 1; count <= 5; count++){
// //     console.log("This is number", count);
// // };

// // {
// // let string = 'AshishTarale';

// // console.log(string, string.length);
// // }



// // ----template literals

// // let string = {
// //     name: 'Ashish Tarale',
// //     age: 24,
// //     height: 5.10,
// //     job: 'website developer'
// // }

// // console.log(string);


// // let profile = `profile name is ${string.name} and age is ${string.age} height ${string.height}`

// // console.log(profile);


// // let Ashish = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, libero?"
// // let Ashi = "Ashish is my name"

// // console.log(Ashish.replace(Ashish, Ashi));


// // let student = ["Ashish", "Chetan", "Arush", "Akshay", "Santosh", "Paresh"];
// // console.log(student);

// // for(i=0; i<student.length; i++){
// // console.log(student[i],student.length);
// // }

// // let marks = prompt("Enter Your Marks");
// // let sum = 0;
// // for(let val of marks){
// //     sum += val;
// // }
// // let avg = sum * marks.length;
// // console.log(avg);



// // let price = [1204, 458, 4545, 8520, 6611, 9876, 4130];
// // let sum = 0;

// // for(let num of price){
// //     sum += num
// // }

// // let avg = sum / price.length;
// // console.log(avg);



// // let newPrice = [1204, 458, 4545, 8520, 6611, 9876, 4130];
// // let indx = 0
// // for(let price of newPrice){
// //     console.log(price);
// //     indx = indx + price;
// // }

// // let avg = indx / newPrice.length;
// // console.log(`the total price of new prodect is ${indx}`);
// // console.log(`the total avg of new prodect is ${avg}`);


// // let indexNumber = [12, 4, 4, 8, 6, 9, 4];
// // let i = 0; 
// // for(let val of indexNumber){
// //     i = i + val;
// //     console.log(i);
// // }



// // ---------------function of js--------------

// // function charcount(a, b){
// //     console.log(a + b);
// // }
// // charcount(50, 60);



// // function countvowels(str){
// //     let count = 0;
// //     for(let char of str){
// //         if(char === "a","e","i","o","u"){
// //             count++;
// //         }
// //     }
// //     console.log(count);
// // }

// // let test = document.getElementById('btn');
// // let text = document.getElementById('text');

// // // let idx = 1;
// // test.onclick = () => {
// //    let massege = prompt('Enter your Number');
// //    text.innerHTML(massege);
// // }

// // let screenMode = document.querySelector('#mode');
// // let mode = 'Light';
// // let websiteBody = document.querySelector('body');


// // screenMode.addEventListener('click', ()=>{
// //    if(mode === 'Light'){
// //       mode = 'Dark';
// //       websiteBody.classList.add('dark');
// //       websiteBody.classList.remove('light');
// //    }else{
// //       mode = 'Light';
// //       websiteBody.classList.add('light');
// //       websiteBody.classList.remove('dark');
// //    }
// //    console.log(mode);
// // });


// // let btn = document.querySelector('#inputBtn');
// // let heading = document.querySelector('#heading');
// // btn === 'clicked';

// // btn.addEventListener('click', ()=>{
// //    if(btn === 'clicked'){
// //       heading.style.color = 'red';
// //    }else{
// //       heading.style.color = 'yellow';
// //    }
// // }) 

// let mode = document.querySelector('#mode');
// paraMode = 'male';

// mode.addEventListener('click', () => {
//    for (i = 0; i <= 4; i++) {
//       if (paraMode === 'male') {
//          document.getElementById('para1').innerText = (para1.innerText + ' Hello Ashish,');
//          paraMode = 'female';
//       } else if (paraMode === 'female') {
//          document.getElementById('para1').innerText = (para1.innerText + ' Hello Ashi,');
//          paraMode = 'male';
//       }
//    }
// });



// let input = document.getElementById('input_text');
// let print = document.getElementById('print');

// print.addEventListener('click', () => {
//    if (input.value === '') {
//       alert('Enter Your Name');
//    }
//    else {
//       let li = document.createElement('li');
//       li.innerText = 'Hello ' + input.value + '   ';
//       para.appendChild(li);

//       let del = document.createElement('del');
//       del.innerHTML = '<button id="delete"> Delete</button> <br>';
//       para.appendChild(del);

//       let newDelete = document.getElementById('delete');
//       newDelete.addEventListener('click', () => {
//          li.innerText = ('');
//          del.innerText = ('');
//       })

//       li.style.listStyleType = 'none';
//       li.style.cursor = 'pointer';
//       li.style.display = 'inline-block';
//       i = 0;
//       li.addEventListener('click', () => {
//          if (i === 0) {
//             li.style.textDecoration = 'line-through';
//             i = 1;
//          } else if (i === 1) {
//             li.style.textDecoration = 'none';
//             i = 0;
//          }
//       });
//    }
//    input.value = '';
// });






// let clear = document.querySelector('#clear');

// clear.addEventListener('click', () => {
//    // para.innerText = ('');
//    para1.innerText = ('');
// });

// // let test = Math.floor(Math.random() * 10);
// // console.log(test);




// // let choices = document.querySelectorAll('.choice');
// // let yourItem = document.querySelector('#yourItem');



// // choices.forEach((choice) => {
// //    choice.addEventListener('click', ()=>{
// //       let selectedIDX = choice.getAttribute('id');
// //       yourItem.innerText = 'You Selected ' + selectedIDX + ' Comp Selected ' + compOption();
// //       yourItem.style.fontSize = '20px';
// //    } );
// // });

// // let compOption = ()=>{
// //    let option = ['Ashish', 'Ashi', 'Yuvansh'];
// //    let optionIDX = Math.floor(Math.random() * 3);
// //    return option[optionIDX];
// // }

// // let choices = document.querySelectorAll('.choice');
// let yourItem = document.querySelector('#yourItem');
// let allChoice = document.querySelectorAll('.choice');


// allChoice.forEach((choice) => {
//    choice.addEventListener('click', () => {
//       let userIDX = choice.getAttribute('id');
//       yourItem.textContent = ('You selected ' + userIDX + ' and Computer selected ' + compChoice());
//    })
//    yourItem.style.color = 'green';
// });



// let compChoice = () => {
//    let choiceOption = ['Ashish', 'Ashi', 'Yuvansh'];
//    let randomOption = Math.floor(Math.random() * 3);
//    return choiceOption[randomOption];
// }

// let contactBtn = document.querySelector('#inputBtn');
//          let paraText = document.querySelector('.heading');
//          let i = 0;
//          contactBtn.addEventListener('click', () => {
//             if (i === 0) {
//                paraText.innerText = 'Hello Ashi';
//                i = 1;
//             } else if (i === 1) {
//                paraText.innerText = 'Hello Ashish';
//                i = 0;
//             }
//          });



// let hairbtn = document.getElementById('hairBtn');
// let bodybtn = document.getElementById('bodyBtn');

// let hairBox = document.getElementById('hairBox');
// let bodyBox = document.getElementById('bodyBox');
// hairBox.style.display = 'none';
// bodyBox.style.display = 'none';

// hairbtn.addEventListener('click', ()=> {
//       hairBox.style.display = 'block';
//       bodyBox.style.display = 'none';
// });

// bodybtn.addEventListener('click', ()=> {
//    bodyBox.style.display = 'block';
//    hairBox.style.display = 'none';
// })






   // let selectBtn = document.querySelectorAll('.selectBtn');
   // let hairBox = document.getElementById('hairBox');
   // let bodyBox = document.getElementById('bodyBox');
   // hairBox.style.display = 'none';
   // bodyBox.style.display = 'none';


   // selectBtn.forEach((textBox) => {
   //    textBox.addEventListener('click', () => {
   //       hairBox.style.display = 'block';
   //    })
   // })



        let mainBox = document.getElementById('mainBox');
        let smallBox = document.querySelectorAll('.smallBox');
        let turnX = true;

        smallBox.forEach((boxes) => {
            boxes.addEventListener("click", () => {
                console.log('Box was clicked');
                if (turnX) {
                    boxes.innerText = "X";
                    turnX = false;
                } else {
                    boxes.innerText = "O";
                    turnX = true;
                }
                boxes.disabled = true;
            });
        });



        let restart = document.getElementById('restart');
        restart.addEventListener('click', () => {
            turnX = true;
            location.reload();
        })





        