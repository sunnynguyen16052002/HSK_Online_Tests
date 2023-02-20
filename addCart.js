const btnAddCart = document.querySelectorAll('.js-btn-add');
// console.log(btnAddCart);

btnAddCart.forEach(function(button, index) {
    // console.log(button, index);
    button.addEventListener('click', function(event) {
        var btnItem = event.target;
        var book = btnItem.parentElement;
        var bookImg = book.querySelector("img").src;
        var bookName = book.querySelector('.js-details-infor-tittle').innerText;
        var bookPrice = book.querySelector('.js-details-infor-price').innerText;
        console.log(bookPrice);
    });
});