function scrollLeft() {
    const container = document.querySelector('.review-cards');
    container.scrollBy({ left: -300, behavior: 'smooth' });
  }
  
  function scrollRight() {
    const container = document.querySelector('.review-cards');
    container.scrollBy({ left: 300, behavior: 'smooth' });
  }