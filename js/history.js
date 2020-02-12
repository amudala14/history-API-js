
    const DOMElement = {
        next: "#next",
        back: "#back",
        refresh: "#refresh"
    }

    const back = document.querySelector(DOMElement.back);
    const next = document.querySelector(DOMElement.next);
    const refresh = document.querySelector(DOMElement.refresh);

    if (next) {
        next.addEventListener('click' , function () {
            window.history.forward()
        })
    }

    if (back) {
        back.addEventListener('click' , function () {
            window.history.back()
        })
    }

    if (refresh) {
        refresh.addEventListener('click' , function () {
            window.history.go(0)
            // OR  window.history.go()
        });
    }

if (history.length > 0) {
    console.log(history.length);   
