/* Seerat Club volunteer form: client-side UX only; Laravel handles validation/storage. */
(function () {
  "use strict";

  const form = document.getElementById("sc-volunteer-form");
  if (!form) return;

  const interest = document.getElementById("vol-interest");
  const help = document.getElementById("vol-interest-help");
  const feedback = document.getElementById("vol-feedback");
  const submit = form.querySelector('[type="submit"]');

  const descriptions = {
    sponsor: "Help cover participation costs for children who cannot afford to participate.",
    ideas: "Share your creative ideas for content and activities.",
    volunteer: "Share your time and expertise to help shape young minds.",
  };

  interest?.addEventListener("change", function () {
    help.textContent = descriptions[interest.value] || "Choose the way you would like to support Seerat Club.";
  });

  form.addEventListener("submit", function (event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      form.classList.add("reg-has-errors");
      if (feedback) {
        feedback.hidden = false;
        feedback.textContent = "Please complete the required fields and check the highlighted information.";
      }
      form.reportValidity();
      return;
    }

    if (submit) {
      submit.disabled = true;
      submit.setAttribute("aria-busy", "true");
      submit.dataset.originalText = submit.textContent;
      submit.textContent = "Submitting…";
    }
  });
})();
