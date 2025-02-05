// Animate skill bars on page load
window.addEventListener("load", () => {
    const skillBars = document.querySelectorAll(".skill-bar-fill");
    skillBars.forEach(bar => {
      const targetWidth = bar.style.width;
      bar.style.width = "0";
      setTimeout(() => {
        bar.style.width = targetWidth;
      }, 100);
    });
  });
