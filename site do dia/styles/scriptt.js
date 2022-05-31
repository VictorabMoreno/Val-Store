
var msg = document.getElementById('paragrafo')
var titulo = document.getElementById('titulo')
var opc1 = document.getElementById('teste1')
var opc2 = document.getElementById('teste2')
var opc3 = document.getElementById('teste3')
var text3 = "Atendimento nota mil, qualidade de acordo com valores, qdo precisei fui atendida prontamente, as meninas são que esperamos de empreendedores no Brasil, fazem o trabalho sério , certo , mas não perdem a leveza e alegria 🤩 tô apaixonada pela loja e por elas 😘😘😘😘😘😘😘😘😘😘😘😘"
var titulo3="adorei os funcionarios"
var stts1 = true
var stts2 = false
var stts3 = false




if(stts1 == true) {
      msg.innerHTML = word1
      titulo.innerHTML = title1
   
    
    }

function resolver() {
    if(stts1==true || stts2 == true || stts3 == true) {
        stts1 = false
        stts2 = false
        stts3 = false
    }
}

function ajuda() {
    stts1 = true
    stts2 = true
    stts3 = true
}


function msn() {
  opc1.style.opacity = '1'
    opc2.style.opacity = '0.5'
    opc3.style.opacity = '0.5'
   function resolver(){}
      msg.innerHTML = word1
      titulo.innerHTML = title1
    function ajuda(){}
   }



function msm() {
  opc1.style.opacity = '0.5'
    opc2.style.opacity = '1'
    opc3.style.opacity = '0.5'
  function resolver() {}
  msg.innerHTML = word2
  titulo.innerHTML = title2
  function ajuda(){}
}

function msp () {
  opc1.style.opacity = '0.5'
    opc2.style.opacity = '0.5'
    opc3.style.opacity = '1'
  function resolver() {}
  msg.innerHTML = word3
  titulo.innerHTML = title3
  function ajuda(){}
}
    

    
