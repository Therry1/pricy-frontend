(() => {
  const searchInput = document.querySelector(".pricy-search-input");
  if (!searchInput) return;

  const rows = Array.from(document.querySelectorAll(".pricy-table tbody tr"));

  searchInput.addEventListener("input", () => {
    const q = searchInput.value.trim().toLowerCase();
    rows.forEach((row) => {
      const txt = row.textContent.toLowerCase();
      row.style.display = txt.includes(q) ? "" : "none";
    });
  });
})();
