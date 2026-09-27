const theme = document.getElementById('theme');

if (localStorage.getItem('darkMode') === 'true') {
  document.body.classList.add('dark');
  theme.textContent = '☀';
}

theme.onclick = () => {
  document.body.classList.toggle('dark');

  const dark = document.body.classList.contains('dark');

  localStorage.setItem('darkMode', dark);
  theme.textContent = dark ? '☀' : '☾';
};

const form = document.getElementById('contactForm');

if (form) {
  form.onsubmit = async e => {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name || !email || !message) {
      alert('Name, email, and message must be filled in!');
      return;
    }

    const formData = new FormData(form);

    try {
      const response = await fetch(
        'https://formsubmit.co/ajax/h1101251028@student.untan.ac.id',
        {
          method: 'POST',
          body: formData,
          headers: {
            'Accept': 'application/json'
          }
        }
      );

      if (response.ok) {
        alert('Message sent successfully. Thank you!');
        form.reset();
      } else {
        alert('Message could not be sent. Please try again.');
      }
    } catch (error) {
      alert('There was an error sending your message.');
    }
  };
}