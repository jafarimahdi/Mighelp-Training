
const dogBtn = document.querySelector('.dogBtn');
const dogImg = document.querySelector('.dogImage');

dogBtn.addEventListener('click', () => {
  fetch('https://dog.ceo/api/breeds/image/random')
    .then(result => {
      return result.json();
    })
    .then(picture => {
      dogImg.src = picture.message;
    });
});
