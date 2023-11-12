const consultationButton = document.getElementById('main-container-button-free-сonsultation');
const formSection = document.querySelector('.third-container');

consultationButton.addEventListener('click', () => {
    formSection.scrollIntoView({ behavior: 'smooth' });
});