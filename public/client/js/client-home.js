(() => {
  const menuButton = document.querySelector(".pricy-burger");
  const mobilePanel = document.getElementById("pricy-mobile-nav");

  if (!menuButton || !mobilePanel) return;

  const setExpanded = (expanded) => {
    menuButton.setAttribute("aria-expanded", expanded ? "true" : "false");
  };

  const closePanel = () => {
    mobilePanel.hidden = true;
    setExpanded(false);
  };

  const togglePanel = () => {
    const shouldOpen = mobilePanel.hidden;
    mobilePanel.hidden = !shouldOpen;
    setExpanded(shouldOpen);
  };

  menuButton.addEventListener("click", togglePanel);

  mobilePanel.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closePanel);
  });

  window.addEventListener("resize", () => {
    if (window.matchMedia("(min-width: 981px)").matches) {
      closePanel();
    }
  });
})();

