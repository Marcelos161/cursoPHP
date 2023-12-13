let RangeInput = document.getElementById('percentual');
let texto = document.getElementById('valorPercentual');


RangeInput.addEventListener('input', () => {
    texto.innerText = RangeInput.value + '%';
})
