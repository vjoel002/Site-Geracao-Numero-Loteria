///////////////////////////////////////////// MODEL \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

const getElement = (...queries) => document.querySelector(...queries);

const button = getElement('.open-modal-button');
const container = getElement('.modal-container');
const modal = getElement('.modal');
const fechar_icon = getElement('.icon-close'); 
const fechar_link = getElement('.link-close');



const activeModalClass = 'modal-show';

const openmodal = () => container.classList.add(activeModalClass);
const closeModal = () => container.classList.remove(activeModalClass);


button.addEventListener('click', openmodal);
container.addEventListener('click', (event) => {
    if (modal.contains(event.target)) return;
closeModal();
});


fechar_icon.addEventListener('click', closeModal); 
fechar_link.addEventListener('click', closeModal);


/////////////////////////////////////////// MODAL PARA LOGO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

const div = getElement('.open-modal-logo');
const container_logo = getElement('.modal-logo');
const modal_logo = getElement('.modal_logo'); 
const fechar_link_logo = getElement('.link-close-logo');



const activeModalClass_logo = 'modal-show';

const openmodal_logo = () => container_logo.classList.add(activeModalClass_logo);
const closeModal_logo = () => container_logo.classList.remove(activeModalClass_logo);


div.addEventListener('click', openmodal_logo);
container_logo.addEventListener('click', (event) => {
    if (modal.contains(event.target)) return;
closeModal_logo();
});

fechar_link_logo.addEventListener('click', closeModal_logo);


/////////////////////////////////////////// MODAL PARA TUTORIAL \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\



const span = getElement('.open-modal-artigo');
const container_artigo = getElement('.modal-artigo');
const modal_artigo = getElement('.modal_artigo'); 
const fechar_link_artigo = getElement('.link-close-artigo');



const activeModalClass_artigo = 'modal-show';

const openmodal_artigo = () => container_artigo.classList.add(activeModalClass_artigo);
const closeModal_artigo = () => container_artigo.classList.remove(activeModalClass_artigo);


span.addEventListener('click', openmodal_artigo);
container_artigo.addEventListener('click', (event) => {
    if (modal.contains(event.target)) return;
closeModal_artigo();
});

fechar_link_artigo.addEventListener('click', closeModal_artigo);






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