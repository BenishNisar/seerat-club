/* Small accessibility refinements. All original carousel and form code is retained. */
(function () {
  'use strict';
  function ready() {
    const open = document.querySelector('.rspn-mnu-btn');
    const close = document.querySelector('.rspn-mnu-cls');
    const menu = document.querySelector('.rsnp-mnu');
    [open, close].forEach(function (button, index) {
      if (!button || button.hasAttribute('role')) return;
      button.setAttribute('role', 'button');
      button.setAttribute('tabindex', '0');
      button.setAttribute('aria-label', index ? 'Close navigation' : 'Open navigation');
      button.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault(); button.click();
        }
      });
    });
    if (open && menu) {
      open.setAttribute('aria-expanded', String(menu.classList.contains('slidein')));
      new MutationObserver(function () {
        open.setAttribute('aria-expanded', String(menu.classList.contains('slidein')));
      }).observe(menu, { attributes: true, attributeFilter: ['class'] });
    }
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', ready);
  else ready();
})();


/* ==========================================================================
   Registration & Girls Form UX
   ========================================================================== */
(function () {
  "use strict";
  const form = document.getElementById("sc-registration-form");
  if (!form) return;
  const submit = form.querySelector('[type="submit"]');
  form.addEventListener("submit", function (event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      form.classList.add("reg-has-errors");
      form.reportValidity();
      return;
    }
    if (submit) {
      submit.disabled = true;
      submit.setAttribute("aria-busy", "true");
      submit.dataset.originalText = submit.textContent;
      submit.textContent = "Submitting…";
    }
  }, true);
})();
