let images = [
    "https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Le_Tour_Eiffel_from_Le_Champs_de_Mars.jpg/240px-Le_Tour_Eiffel_from_Le_Champs_de_Mars.jpg",
    "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/3981ParigiArcDeTriomphe.JPG/237px-3981ParigiArcDeTriomphe.JPG",
    "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/NotreDameI.jpg/225px-NotreDameI.jpg",
    "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Palais_de_l%27Elys%C3%A9e_-_Journ%C3%A9es_du_Patrimoine_2014_001.jpg/270px-Palais_de_l%27Elys%C3%A9e_-_Journ%C3%A9es_du_Patrimoine_2014_001.jpg",
    "https://upload.wikimedia.org/wikipedia/commons/8/89/Chateau_de_Versailles%2C_France_%288132659035%29.jpg" ];
let index = 0;

function nextImage() {
    index = (index + 1) % images.length; // Переключаем индекс вперёд
    document.getElementById("gallery").src = images[index];
}

function prevImage() {
    index = (index - 1 + images.length) % images.length; // Переключаем индекс назад
    document.getElementById("gallery").src = images[index];
}
