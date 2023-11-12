const aboutButton = document.getElementById('main-container-button-about');
const pricesSection = document.querySelector('.second-container');

aboutButton.addEventListener('click', () => {
    pricesSection.scrollIntoView({ behavior: 'smooth' });
});