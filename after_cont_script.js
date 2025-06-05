const form = document.getElementById('form');
const formInput = document.querySelector('.subscribe__input');
const formBtn = document.querySelector('.subscribe__btn');
const subscribeImg = document.querySelector('.subscribe__image');

formInput.addEventListener('input', () => {
  formInput.checkValidity() ? formBtn.classList.add('btn--active') : formBtn.classList.remove('btn--active');
});

form.addEventListener('submit', e => {
  e.preventDefault();

  subscribeImg.classList.add('subscribe__image--success');
  formBtn.classList.add('btn--success');
  formBtn.value = "You're on the list! 👍";

  formInput.disabled = true;
  formBtn.disabled = true;
});