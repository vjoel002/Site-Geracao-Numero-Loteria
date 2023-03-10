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
const modal_logotype = getElement('.modal_logo');
const modal_logo = getElement('.modal_logo'); 
const fechar_link_logo = getElement('.link-close-logo');

const activeModalClass_logo = 'modal-show';

const openmodal_logo = () => container_logo.classList.add(activeModalClass_logo);
const closeModal_logo = () => container_logo.classList.remove(activeModalClass_logo);

div.addEventListener('click', openmodal_logo);
container_logo.addEventListener('click', (event) => {
    if (modal_logotype.contains(event.target)) return;
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

/////////////////////////////////////////// MODAL PAGINA DE CONTATO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

const btn_div = getElement('.open-modal-contato');
const container_contato = getElement('.modal-contato');
const modal_contact = getElement('.modal_contato');
const modal_contato = getElement('.modal_contato'); 
const fechar_link_contato = getElement('.link-close-contato');

const activeModalClass_contato = 'modal-show';

const openmodal_contato = () => container_contato.classList.add(activeModalClass_contato);
const closeModal_contato = () => container_contato.classList.remove(activeModalClass_contato);

btn_div.addEventListener('click', openmodal_contato);
container_contato.addEventListener('click', (event) => {
    if (modal_contact.contains(event.target)) return;
closeModal_contato();
});

fechar_link_contato.addEventListener('click', closeModal_contato);

/////////////////////////////////////////// MODAL MENSAGEM DE ENVIO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

/*const btn_span = getElement('.open-modal-envio');
const container_envio = getElement('.modal-envio');
const modal_envio = getElement('.modal_envio');
const modal_envoi = getElement('.modal_envio'); 
const fechar_link_envio = getElement('.link-close-envio');

const activeModalClass_envio = 'modal-show';

const openmodal_envio = () => container_envio.classList.add(activeModalClass_envio);
const closeModal_envio = () => container_envio.classList.remove(activeModalClass_envio);

btn_span.addEventListener('click', openmodal_envio);
container_envio.addEventListener('click', (event) => {
    if (modal_envio.contains(event.target)) return;
closeModal_envio();
});

fechar_link_envio.addEventListener('click', closeModal_envio);*/

/////////////////////////////////////////////// FORMUL??RIO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

const formNewUser = document.getElementById("form-contact");
if (formNewUser) {
    formNewUser.addEventListener("submit", async(e) => {
        //Receber o valor do campo
        var name = document.querySelector("#nome").value;
        // Verificar se o campo esta vazio
        if (name === "") {
            e.preventDefault();
            document.getElementById("msg_Contact").innerHTML = "<p style='color: #f00;'>Erro: Necess??rio preencher o campo nome!</p>";
            return;
        }

        //Receber o valor do campo
        var email = document.querySelector("#email").value;
        // Verificar se o campo esta vazio
        if (email === "") {
            e.preventDefault();
            document.getElementById("msg_Contact").innerHTML = "<p style='color: #f00;'>Erro: Necess??rio preencher o campo e-mail!</p>";
            return;
        }

        //Receber o valor do campo
        var assunto = document.querySelector("#assunto").value;
        // Verificar se o campo esta vazio
        if (assunto === "") {
            e.preventDefault();
            document.getElementById("msg_Contact").innerHTML = "<p style='color: #f00;'>Erro: Necess??rio preencher o campo assunto!</p>";
            return;
        }

        //Receber o valor do campo
        var conteudo = document.querySelector("#conteudo").value;
        // Verificar se o campo esta vazio
        if (conteudo === "") {
            e.preventDefault();
            document.getElementById("msg_Contact").innerHTML = "<p style='color: #f00;'>Erro: Necess??rio preencher o campo conte??do!</p>";
            return;
        }
    });
}




///////////////////////////////////////////// COPIAR DADOS BANCARIOS \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
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

