
document.addEventListener('click', function(e){
    if(e.target.classList.contains('leftup')){
        slide(".wrapper-bkbaru", ".wrapper-bkbaru .carousel", ".wrapper-bkbaru svg", "left");
    }else if(e.target.classList.contains('rightup')){
        slide(".wrapper-bkbaru", ".carousel", ".wrapper-bkbaru svg", "right");
    }else if(e.target.classList.contains('leftdown')){
        slide(".wrapper-populer", ".wrapper-populer .carousel", ".wrapper-populer svg", "left");
    }else if(e.target.classList.contains('rightdown')){
        slide(".wrapper-populer", ".wrapper-populer .carousel", ".wrapper-populer svg", "right");
    }
})

function slide(wrapper1,carousel1,arrowBtns1, button){
    let wrapper = document.querySelector(wrapper1)
    let carousel = document.querySelector(carousel1)
    let firstCardWidth = carousel.querySelector(".card").offsetWidth
    let arrowBtns = document.querySelectorAll(arrowBtns1)
    let carouselChildrens = [...carousel.children]

    // console.log(firstCardWidth);

    let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

    // Get the number of cards that can fit in the carousel at once
    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

    // Insert copies of the first few cards to end of carousel for infinite scrolling
    carouselChildrens.slice(0, cardPerView).forEach(card => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.offsetWidth;
    carousel.classList.remove("no-transition");

    // Add event listeners for the arrow buttons to scroll the carousel left and right
    arrowBtns.forEach(btn => {
        // btn.addEventListener("click", () => {
        if(button == "right"){
            carousel.scrollLeft += firstCardWidth;
        }else if(button == "left"){
            carousel.scrollLeft -= firstCardWidth;
        }
    });

    const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        // Records the initial cursor and scroll position of the carousel
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    }

    const dragging = (e) => {
        if(!isDragging) return; // if isDragging is false return from here
        // Updates the scroll position of the carousel based on the cursor movement
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    }

    const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    }

    const infiniteScroll = () => {
        // If the carousel is at the beginning, scroll to the end
        if(carousel.scrollLeft === 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
            carousel.classList.remove("no-transition");
        }
        // If the carousel is at the end, scroll to the beginning
        else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }

        // Clear existing timeout & start autoplay if mouse is not hovering over carousel
        clearTimeout(timeoutId);
        if(!wrapper.matches(":hover")) autoPlay();
    }

    const autoPlay = () => {
        if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
        timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
    }
    autoPlay();

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);
    // wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
    // wrapper.addEventListener("mouseleave", autoPlay);
    
}