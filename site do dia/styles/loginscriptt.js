const main = document.getElementById('main')
const imgs = document.getElementById('corredor')
const img = document.querySelector('space')   
const label1 = document.getElementById('jaja1')
const label2 = document.getElementById('jaja2')
const label3 = document.getElementById('jaja3')
const teste1 = document.getElementById('teste1')
const teste2 = document.getElementById('teste2')
const teste3 = document.getElementById('teste3')
var labelcookie = document.getElementById('help')
let count = 1


label1.style.width = '20px'


function cookiee() {
    labelcookie.classList.toggle('active')
}



 function msn() {
     teste1.style.transform = 'translate(0 , 0)'
     teste2.style.transform = 'translate(0 , 0)'
     teste3.style.transform = 'translate(0 , 0)'
     label1.style.width = '20px'
     label2.style.width = '8px'
     label3.style.width = '8px'
    function rolagem(){}
 }

 function msm() {
     teste1.style.transform = 'translate(-100% , 0)'
     teste2.style.transform = 'translate(-100% , 0)'
     teste3.style.transform = 'translate(-100% , 0)'
    label1.style.width = '8px'
     label2.style.width = '20px'
     label3.style.width = '8px'
 }

 function msp() {
    teste1.style.transform = 'translate(-200% , 0)'
     teste2.style.transform = 'translate(-200% , 0)'
     teste3.style.transform = 'translate(-200% , 0)'
    label1.style.width = '8px'
     label2.style.width = '8px'
     label3.style.width = '20px'
 }
 
 //<input id="inputed" type="button"
