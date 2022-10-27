let time = 5000, //tempo de troca de imagem
    currentImageIndex = 0, //primeira imagem a aparecer que possui index = 0
    images = document.querySelectorAll("#slider img") // pega todas as imagens dentro da div slider
    max = images.length;
//função para trocar as imagens
function nextImage() {

    images[currentImageIndex].classList.remove("selected")//remove a imagem que estiver com "class =  selected"

    currentImageIndex++ 

    if(currentImageIndex >= max)
        currentImageIndex = 0

    images[currentImageIndex].classList.add("selected")//mostra a nova imagem com "class = selected"
}
// função que inicia a troca de imagens 
function start() {
    setInterval(() => {
        // faz a troca de imagens
        nextImage()
    }, time)
}
// inicia o slider assim que a página carregar
window.addEventListener("load", start)