
  document.addEventListener('DOMContentLoaded', () => {
    const accordionBtns = document.querySelectorAll('.accordion-head');

    accordionBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector('span i');

        const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

        // Close all
        document.querySelectorAll('.accordion-content-container').forEach(c => {
          c.style.maxHeight = null;
        });

        document.querySelectorAll('.accordion-head span i').forEach(i => {
          i.style.transform = "rotate(0deg)";
        });

        // Open this one
        if (!isOpen) {
          content.style.maxHeight = content.scrollHeight + "px";
          icon.style.transform = "rotate(180deg)";
        }
      });
    });
  });