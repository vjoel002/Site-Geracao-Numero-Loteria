///////////////////////////////////////////// MODEL \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

const getElement = (...queries) => document.querySelector(...queries);

const button = getElement('.open-modal-button');
const container = getElement('.modal-container');
const modal = getElement('.modal');
const fechar_icon = getElement('.icon-close'); // ajouté
const fechar_link = getElement('.link-close');

const activeModalClass = 'modal-show';

const openmodal = () => container.classList.add(activeModalClass);
const closeModal = () => container.classList.remove(activeModalClass);

button.addEventListener('click', openmodal);
container.addEventListener('click', (event) => {
    if (modal.contains(event.target)) return;
closeModal();
});

fechar_icon.addEventListener('click', closeModal); // ajouté
fechar_link.addEventListener('click', closeModal);

///////////////////////////////////////////// COPIAR DADOS BANCARIOS \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

/*const btnCopiar01 = document.querySelector('.copy');
const inputAgence = document.querySelector('.agence');
btnCopiar01.addEventListener('click', (e) => {
navigator.clipboard.writeText(inputAgence.value);
alert('2447-3 copiado com sucesso! Faça CTRL+V em algum lugar para colar.');
});*/

function copiaragence() {
    let textoCopiado = document.getElementById("agence");
    textoCopiado.select();
    textoCopiado.setSelectionRange(0, 99999)
    document.execCommand("copy");
    alert("2447-3 copiada com sucesso!");
    }

function copiarTexto01() {
let textoCopiado = document.getElementById("texto01");
textoCopiado.select();
textoCopiado.setSelectionRange(0, 99999)
document.execCommand("copy");
alert("45.130-4 copiada com sucesso!");
}

function copiarTexto() {
let textoCopiado = document.getElementById("texto");
textoCopiado.select();
textoCopiado.setSelectionRange(0, 99999)
document.execCommand("copy");
alert("administration@oganhador.com.br  copiado com sucesso!");
}