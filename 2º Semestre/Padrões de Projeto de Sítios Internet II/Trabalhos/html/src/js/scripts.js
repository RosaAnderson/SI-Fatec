// pega a data do sistema
const myDate = new Date()

// exibe a data do sistema no console
console.log(myDate)

// calcula a idade de acordo com o ano atual
document.getElementById("age").innerHTML = (myDate.getFullYear() - 1979)

// ano atual
document.getElementById("year").innerHTML = myDate.getFullYear()

