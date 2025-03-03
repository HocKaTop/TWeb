function toggleText(button) {
    let moreText = button.previousElementSibling; // Берем предыдущий элемент (текст)
    
    if (moreText.style.display === "none") {
        moreText.style.display = "block";
        button.textContent = "Скрыть";
    } else {
        moreText.style.display = "none";
        button.textContent = "Показать больше";
    }
}
