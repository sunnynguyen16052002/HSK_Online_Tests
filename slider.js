var imgFeature = document.querySelector('.js-img-feature');
var listImg = document.querySelectorAll('.js-list-img img');
var preBtn = document.querySelector('.js-control-btn-pre');
var nextBtn = document.querySelector('.js-control-btn-next');

var currentIndex = 0;

function updateImgByIndex(index) {
    document.querySelectorAll('.js-list-img div').forEach(item => {
        item.classList.remove('active')
    })


    currentIndex = index;
    imgFeature.src = listImg[index].getAttribute('src');

    listImg[index].parentElement.classList.add('active');
}

listImg.forEach((imgElement, index) => {

    imgElement.addEventListener('click', e => {
        imgFeature.style.opacity = '0.3';
        updateImgByIndex(index);

        setTimeout(() =>{
            updateImgByIndex(index);
            imgFeature.style.opacity = '1';
        }, 300)
        
    })
});

preBtn.addEventListener('click', e => {

    if(currentIndex == 0){
        currentIndex = listImg.length - 1
    } else {
        currentIndex--;
    }
    
    imgFeature.style.animation = '';
    updateImgByIndex(currentIndex);
    setTimeout(() => {
        imgFeature.style.animation = 'slideLeft 1s ease-in-out forwards';
    }, 200);


});

nextBtn.addEventListener('click', e => {
    if(currentIndex == listImg.length - 1){
        currentIndex = l0
    } else {
        currentIndex++;
    }

    

    imgFeature.style.animation = '';
    setTimeout(() => {
        updateImgByIndex(currentIndex);
        imgFeature.style.animation = 'slideRight 1s ease-in-out forwards';
    }, 200);
});


updateImgByIndex(0);