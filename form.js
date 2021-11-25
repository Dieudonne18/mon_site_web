
// alert('bonjour Christelle');
let listInputs = document.querySelectorAll('input');
let btn = document.getElementById('btn');
// let year = document.getElementById('form_year');

btn.addEventListener('click', Valid);



function Valid() {
    // e.preventDefault();
    // alert('bonjour Christelle');

    for (input of listInputs) {
        let p = document.createElement('p');
        p.style.color = 'red'
        p.style.fontWeight = 'bold'
        input.parentElement.append(p)

        // input = false;
        // inputElement.parentNode.lastElementChild.innerText = "";

        if ((input.value) == "") {
            p.innerHTML = 'Veuillez remplire le champs vide';

        }
        // console.log(year.value.length);

        // if (year.value.length != 4) {
        //     year.parentNode.lastChild.innerHTML = 'Veuillez mettre au minimum et au maximum 4 chiffres';
        // }
    }

}




