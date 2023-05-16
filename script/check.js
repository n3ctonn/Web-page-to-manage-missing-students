function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}

function setCookie(name, value) {
  document.cookie = `${name}=${value}`;
}

const currentTheme = getCookie('tema');

const body = document.body;
const sunIcon = document.getElementById('sun');
const moonIcon = document.getElementById('moon');

if (currentTheme === 'dark') {
  body.classList.add('dark');
  sunIcon.style.display = 'none';
  moonIcon.style.display = 'block';
} else {
  body.classList.remove('dark');
  sunIcon.style.display = 'block';
  moonIcon.style.display = 'none';
}

document.querySelector('.theme-toggle-button').addEventListener('click', () => {
  body.classList.toggle('dark');
  const currentTheme = getCookie('tema');

  if (currentTheme === 'dark') {
    setCookie('tema', 'light');
    sunIcon.style.display = 'block';
    moonIcon.style.display = 'none';
  } else {
    setCookie('tema', 'dark');
    sunIcon.style.display = 'none';
    moonIcon.style.display = 'block';
  }
});
