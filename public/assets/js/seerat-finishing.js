/* Shared purpose dialog. Native dialog supplies focus containment and Escape. */
(() => {
  'use strict';

  const trigger = document.querySelector('.sc-purpose-button');
  const dialog = document.getElementById('sc-purpose-modal');
  if (!trigger || !dialog) return;

  const tabs = [...dialog.querySelectorAll('[role="tab"]')];
  const panels = [...dialog.querySelectorAll('[role="tabpanel"]')];
  const close = dialog.querySelector('.sc-purpose-close');
  let previousOverflow = '';

  function activate(index, focus = false) {
    tabs.forEach((tab, position) => {
      const selected = position === index;
      tab.setAttribute('aria-selected', String(selected));
      tab.tabIndex = selected ? 0 : -1;
      panels[position].hidden = !selected;
    });
    if (focus) tabs[index].focus();
  }

  trigger.addEventListener('click', () => {
    if (typeof dialog.showModal !== 'function') {
      location.href = 'registration.html';
      return;
    }
    if (dialog.open) return;
    previousOverflow = document.body.style.overflow;
    activate(0);
    dialog.showModal();
    document.body.style.overflow = 'hidden';
    close.focus();
  });

  close.addEventListener('click', () => dialog.close());
  dialog.addEventListener('close', () => {
    document.body.style.overflow = previousOverflow;
    trigger.focus({ preventScroll: true });
  });

  dialog.addEventListener('click', (event) => {
    if (event.target !== dialog) return;
    const rect = dialog.getBoundingClientRect();
    if (event.clientX < rect.left || event.clientX > rect.right ||
        event.clientY < rect.top || event.clientY > rect.bottom) dialog.close();
  });

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => activate(index));
    tab.addEventListener('keydown', (event) => {
      let next;
      if (event.key === 'ArrowRight') next = (index + 1) % tabs.length;
      if (event.key === 'ArrowLeft') next = (index + tabs.length - 1) % tabs.length;
      if (event.key === 'Home') next = 0;
      if (event.key === 'End') next = tabs.length - 1;
      if (next === undefined) return;
      event.preventDefault();
      activate(next, true);
    });
  });
})();
