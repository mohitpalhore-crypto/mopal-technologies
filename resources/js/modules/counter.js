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

// Why Choose
const counters = document.querySelectorAll(".counter");

const observer = new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

const counter = entry.target;

const target = +counter.dataset.target;

let value = 0;

const speed = target / 60;

const update = ()=>{

value += speed;

if(value < target){

counter.innerText = Math.ceil(value);

requestAnimationFrame(update);

}else{

counter.innerText = target + "+";

}

};

update();

observer.unobserve(counter);

}

});

});

counters.forEach(counter=>observer.observe(counter));