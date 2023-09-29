const checkbox = document.getElementById('show');


const box = document.getElementById('box');
box.style.display = 'none';

checkbox.addEventListener('click', function handleClick() {
  if (checkbox.checked) {
    box.style.display = 'block';
  } else {
    box.style.display = 'none';
  }
});
