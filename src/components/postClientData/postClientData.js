document.getElementById('postClientData').addEventListener('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    fetch('../../backend/controller/postClientData.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            console.log('Данные успешно отправлены');
            document.getElementById('postClientData').style.display = 'none';
            document.getElementById('successMessage').style.display = 'block';
        } else {
            console.error('Произошла ошибка');
            document.getElementById('postClientData').style.display = 'none';
            document.getElementById('errorMessage').style.display = 'block';
        }
    })
    .catch(error => {
        console.error('Произошла ошибка:', error);
        document.getElementById('postClientData').style.display = 'none';
        document.getElementById('errorMessage').style.display = 'block';
    });
});