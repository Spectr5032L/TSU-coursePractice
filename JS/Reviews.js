const testimonials = document.querySelectorAll('.t-bq-wrapper');
let currentTestimonialIndex = 0;

function showTestimonial(index) {
    testimonials.forEach((testimonial, idx) => {
        if (idx === index) {
            testimonial.classList.remove('hidden');
        } else {
            testimonial.classList.add('hidden');
        }
    });
}

function nextTestimonial() {
    currentTestimonialIndex++;
    if (currentTestimonialIndex === testimonials.length) {
        currentTestimonialIndex = 0;
    }
    showTestimonial(currentTestimonialIndex);
}

function prevTestimonial() {
    currentTestimonialIndex--;
    if (currentTestimonialIndex < 0) {
        currentTestimonialIndex = testimonials.length - 1;
    }
    showTestimonial(currentTestimonialIndex);
}

showTestimonial(currentTestimonialIndex);
document.getElementById('nextButton').addEventListener('click', nextTestimonial);
document.getElementById('prevButton').addEventListener('click', prevTestimonial);
