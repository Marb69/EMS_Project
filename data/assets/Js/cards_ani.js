export const card_ani = () => {
  window.addEventListener("load", function () {
    document.querySelectorAll("[data-ems-count]").forEach(function (el) {
      var target = parseInt(el.getAttribute("data-ems-count"), 10);
      var current = 0;
      var step = Math.ceil(target / 40);
      var iv = setInterval(function () {
        current = Math.min(current + step, target);
        el.textContent = current;
        if (current >= target) clearInterval(iv);
      }, 28);
    });
  });
};
