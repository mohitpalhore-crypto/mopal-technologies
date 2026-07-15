function animateCounter(el) {

    const target = Number(el.dataset.target);

    let count = 0;

    const speed = target / 80;

    const update = () => {

        count += speed;

        if (count >= target) {

            el.innerText = target + "+";

            return;

        }

        el.innerText = Math.floor(count);

        requestAnimationFrame(update);

    };

    update();

}

document.querySelectorAll(".counter").forEach((el)=>{

    animateCounter(el);

});