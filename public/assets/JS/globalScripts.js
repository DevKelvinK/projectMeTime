/* Abrir e Fechar o modal */
function Modal() {
  const modal = document.querySelector("dialog");
  const showBtn = document.querySelector("#showModal");
  const closeBtn = document.querySelector("#closeModal");
  const fixedHeader = document.getElementById("fixedHeader");
  const anchor = document.querySelector(".removeTab");

  const focusableElements =
    'a[href], button, textarea, input, select, [tabindex]:not([tabindex="-1"])';
  let firstFocusableElement, lastFocusableElement;

  function openModal() {
    modal.show();
    anchor.tabIndex = -1;
    modal.classList.remove("hidden");
    fixedHeader.classList.add("hidden");

    const focusableContent = modal.querySelectorAll(focusableElements);
    firstFocusableElement = focusableContent[0];
    lastFocusableElement = focusableContent[focusableContent.length - 1];
    document.addEventListener("keydown", handleKeyEvents);
    document.activeElement.blur();
  }

  function closeModal() {
    modal.close();
    anchor.tabIndex = 0;
    modal.classList.add("hidden");
    fixedHeader.classList.remove("hidden");
    document.removeEventListener("keydown", handleKeyEvents);
  }

  function handleKeyEvents(event) {
    if (event.key === "Tab") {
      if (event.shiftKey && document.activeElement === firstFocusableElement) {
        lastFocusableElement.focus();
        event.preventDefault();
      } else if (!event.shiftKey && document.activeElement === lastFocusableElement) {
        firstFocusableElement.focus();
        event.preventDefault();
      }
    }

    if (event.key === "Escape") {
      event.preventDefault();
      closeModal();
    }
  }

  showBtn.addEventListener("click", openModal);
  closeBtn.addEventListener("click", closeModal);
}

document.addEventListener("DOMContentLoaded", Modal);
