let time2 = 3000, //tempo de troca de imagem
    currentImageIndex2 = 0, //primeira imagem a aparecer que possui index = 0
    images2 = document.querySelectorAll("#sliderau img") // pega todas as imagens dentro da div slider
    max2 = images2.length;
//função para trocar as imagens
function nextImage_2() {

    images2[currentImageIndex2].classList.remove("selectedau")//remove a imagem que estiver com "class =  selected1"

    currentImageIndex++ 

    if(currentImageIndex2 >= max2)
       currentImageIndex2 = 0

    images2[currentImageIndex2].classList.add("selectedau")//mostra a nova imagem com "class = selected1"
}
// função que inicia a troca de imagens 
function start_2() {
    setInterval(() => {
         //faz a troca de imagens
        nextImage_2()
    }, time2)
}
// inicia o slider assim que a página carregar
window.addEventListener("load", start_2)