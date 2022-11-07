let time1 = 3000, //tempo de troca de imagem
    currentImageIndex1 = 0, //primeira imagem a aparecer que possui index = 0
    images1 = document.querySelectorAll("#sliderev img") // pega todas as imagens dentro da div slider
    max1 = images1.length;
//função para trocar as imagens
function nextImage() {

    images1[currentImageIndex1].classList.remove("selectedev")//remove a imagem que estiver com "class =  selectedev"
 
   currentImageIndex1++ 

    if(currentImageIndex1 >= max1)
       currentImageIndex1 = 0

    images1[currentImageIndex1].classList.add("selectedev")//mostra a nova imagem com "class = selectedev"
}
// função que inicia a troca de imagens 
function start() {
    setInterval(() => {
         //faz a troca de imagens
        nextImage()
    }, time1)
}
//inicia o slider assim que a página carregar
window.addEventListener("load", start)