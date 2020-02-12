document.querySelector('#next').addEventListener('click' , function () {
    window.history.forward()
})

document.querySelector('#back').addEventListener('click' , function () {
    window.history.back()
})

document.querySelector('#refresh').addEventListener('click' , function () {
    window.history.go(0)
    // OR  window.history.go()
});