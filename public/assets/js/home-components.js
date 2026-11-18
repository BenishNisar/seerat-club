/* ==========================================================================
   Seerat Club Homepage Interactive Components
   ========================================================================== */

/* Existing home interactions, preserved in order. */

(function () {
  "use strict";

  const section = document.getElementById("sc-seerah-journey");

  if (!section || section.dataset.initialized === "true") return;

  section.dataset.initialized = "true";

  const steps = [
    {
      name: "Discover",
      title: "Meet the story. Discover its meaning.",
      description:
        "Children explore moments from the lives of the Prophets through engaging stories and discussion.",
      purpose:
        "Begin understanding faith through the lives and examples of our Prophets."
    },
    {
      name: "Explore",
      title: "Bring the story into their hands.",
      description:
        "Maps, crafts and shared activities help children explore the story. In Letters to Kings, they rebuilt a giant world map together.",
      purpose:
        "Connect the Seerah with an experience children can explore, discuss and remember."
    },
    {
      name: "Reflect",
      title: "Ask questions. Find the lesson.",
      description:
        "Children discuss the story’s lessons and explore how to practise kindness, patience and responsibility in everyday life.",
      purpose:
        "Look beyond what happened to understand what the lesson means for their lives."
    },
    {
      name: "Practice",
      title: "Turn a lesson into a caring action.",
      description:
        "Children connect learning with everyday choices. Friendship Mail invited them to write and decorate letters for children in Palestine.",
      purpose:
        "Put care, generosity and friendship into practice."
    },
    {
      name: "Belong",
      title: "Find friendship. Connect with the Masjid.",
      description:
        "Children learn alongside peers and volunteers through shared experiences in a supportive Masjid environment.",
      purpose:
        "Strengthen their connection with the Masjid through learning, friendship and belonging."
    }
  ];

  const stage = section.querySelector(".sj-stage");
  const cards = Array.from(section.querySelectorAll(".sj-card"));
  const stepButtons = Array.from(
    section.querySelectorAll("[data-sj-step]")
  );

  const centerLabel = section.querySelector("[data-sj-step-label]");
  const centerTitle = section.querySelector("[data-sj-center-title]");
  const centerDescription = section.querySelector(
    "[data-sj-center-description]"
  );
  const centerPurpose = section.querySelector(
    "[data-sj-center-purpose]"
  );

  const mobileLabel = section.querySelector("[data-sj-mobile-label]");
  const mobileTitle = section.querySelector("[data-sj-mobile-title]");
  const mobileDescription = section.querySelector(
    "[data-sj-mobile-description]"
  );
  const mobilePurpose = section.querySelector(
    "[data-sj-mobile-purpose]"
  );

  const counter = section.querySelector("[data-sj-counter]");
  const status = section.querySelector(".sj-status");

  let activeIndex = 0;
  let rotation = 0;
  let isAnimating = false;
  let unlockTimer;

  const reducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  );

  function getOrbitSize() {
    const width = stage.clientWidth;

    const cardWidth = cards[0].getBoundingClientRect().width;

    /*
     * Keep every photograph inside the section.
     * The centre message remains stationary.
     */
    const radiusX = Math.min(
      415,
      Math.max(85, width / 2 - cardWidth / 2 - 8)
    );

    const radiusY = window.innerWidth < 640
      ? 205
      : window.innerWidth < 1024
        ? 210
        : 242;

    return {
      radiusX: radiusX,
      radiusY: radiusY
    };
  }

  function positionCards() {
    const orbit = getOrbitSize();

    cards.forEach(function (card, index) {
      const degrees = -90 + index * 72 + rotation;
      const radians = degrees * Math.PI / 180;

      const x = Math.cos(radians) * orbit.radiusX;
      const y = Math.sin(radians) * orbit.radiusY;

      card.style.transform =
        "translate(-50%, -50%) translate(" +
        x.toFixed(2) +
        "px, " +
        y.toFixed(2) +
        "px)";

      card.style.zIndex = index === activeIndex ? "4" : "3";
    });
  }

  function updateMessage(announce) {
    const current = steps[activeIndex];

    const label =
      "STEP " +
      String(activeIndex + 1).padStart(2, "0") +
      " · " +
      current.name.toUpperCase();

    centerLabel.textContent = label;
    centerTitle.textContent = current.title;
    centerDescription.textContent = current.description;
    centerPurpose.textContent = current.purpose;

    mobileLabel.textContent = label;
    mobileTitle.textContent = current.title;
    mobileDescription.textContent = current.description;
    mobilePurpose.textContent =
      "The Islamic purpose: " + current.purpose;

    counter.textContent = String(
      activeIndex + 1
    ).padStart(2, "0");

    stepButtons.forEach(function (button, index) {
      button.setAttribute(
        "aria-pressed",
        index === activeIndex ? "true" : "false"
      );
    });

    if (announce) {
      status.textContent =
        label +
        ". " +
        current.title +
        " " +
        current.description +
        " The Islamic purpose: " +
        current.purpose;
    }
  }

  function selectStep(targetIndex) {
    if (isAnimating) return;

    const nextIndex = (
      targetIndex + steps.length
    ) % steps.length;

    if (nextIndex === activeIndex) return;

    isAnimating = true;

    /*
     * Move the selected photograph to the top
     * using the shortest rotation.
     */
    const desiredRotation = -nextIndex * 72;

    let change = (
      (desiredRotation - rotation) % 360 + 360
    ) % 360;

    if (change > 180) {
      change -= 360;
    }

    rotation += change;
    activeIndex = nextIndex;

    positionCards();
    updateMessage(true);

    clearTimeout(unlockTimer);

    unlockTimer = window.setTimeout(function () {
      isAnimating = false;
    }, reducedMotion.matches ? 0 : 650);
  }

  stepButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      selectStep(Number(button.dataset.sjStep));
    });
  });

  section.querySelectorAll(
    "[data-sj-direction]"
  ).forEach(function (button) {
    button.addEventListener("click", function () {
      const direction = button.dataset.sjDirection;

      selectStep(
        activeIndex + (direction === "next" ? 1 : -1)
      );
    });
  });

  section.addEventListener("keydown", function (event) {
    if (event.altKey || event.ctrlKey || event.metaKey) return;

    if (event.key === "ArrowRight") {
      event.preventDefault();
      selectStep(activeIndex + 1);
    }

    if (event.key === "ArrowLeft") {
      event.preventDefault();
      selectStep(activeIndex - 1);
    }
  });

  if ("ResizeObserver" in window) {
    const resizeObserver = new ResizeObserver(positionCards);
    resizeObserver.observe(stage);
  } else {
    window.addEventListener("resize", positionCards);
  }

  updateMessage(false);
  positionCards();
})();



  (() => {
    const section = document.getElementById("sc-social-showcase");
    const dialog = document.getElementById("sc-social-player");

    if (!section || !dialog || section.dataset.ssReady) return;

    section.dataset.ssReady = "true";

    const frame = dialog.querySelector(".ss-player-frame");
    const title = dialog.querySelector("#ss-player-title");
    const fallback = dialog.querySelector(".ss-youtube-fallback");
    const closeButton = dialog.querySelector(".ss-close");

    let lastTrigger = null;
    let previousOverflow = "";

    function openVideo(button) {
      const id = button.dataset.ssVideo;
      const label = button.dataset.ssTitle || "Seerat Club video";

      if (!/^[a-zA-Z0-9_-]{11}$/.test(id || "")) return;

      const youtubeURL =
        "https://www.youtube.com/watch?v=" + id;

      if (typeof dialog.showModal !== "function") {
        window.open(
          youtubeURL,
          "_blank",
          "noopener,noreferrer"
        );
        return;
      }

      if (dialog.open) return;

      lastTrigger = button;
      title.textContent = label;
      fallback.href = youtubeURL;

      const iframe = document.createElement("iframe");

      iframe.src =
        "https://www.youtube-nocookie.com/embed/" +
        id +
        "?autoplay=1&rel=0";

      iframe.title = label;

      iframe.allow =
        "accelerometer; autoplay; clipboard-write; " +
        "encrypted-media; gyroscope; picture-in-picture; web-share";

      iframe.allowFullscreen = true;
      iframe.referrerPolicy =
        "strict-origin-when-cross-origin";

      frame.replaceChildren(iframe);

      previousOverflow = document.body.style.overflow;
      document.body.style.overflow = "hidden";

      dialog.showModal();
      closeButton.focus();
    }

    section.addEventListener("click", (event) => {
      const button = event.target.closest("[data-ss-video]");

      if (button && section.contains(button)) {
        openVideo(button);
      }
    });

    closeButton.addEventListener("click", () => {
      dialog.close();
    });

    dialog.addEventListener("click", (event) => {
      if (event.target !== dialog) return;

      const bounds = dialog.getBoundingClientRect();

      const clickedOutside =
        event.clientX < bounds.left ||
        event.clientX > bounds.right ||
        event.clientY < bounds.top ||
        event.clientY > bounds.bottom;

      if (clickedOutside) {
        dialog.close();
      }
    });

    dialog.addEventListener("close", () => {
      frame.replaceChildren();
      document.body.style.overflow = previousOverflow;

      if (lastTrigger && lastTrigger.isConnected) {
        lastTrigger.focus({ preventScroll: true });
      }
    });
  })();



  (() => {
    "use strict";

    const section = document.getElementById("sc-event-showcase");

    if (!section || section.dataset.carouselReady) return;

    section.dataset.carouselReady = "true";

    /*
      Original image addresses copied from your supplied
      Seerat Club carousel HTML, in their original order.
    */

    const images = [
      "assets/images/seerat-pdf/page-11-img-1.jpeg",
      "assets/images/seerat-pdf/page-12-img-1.jpeg",
      "assets/images/seerat-pdf/page-13-img-1.jpeg",
      "assets/images/seerat-pdf/page-14-img-1.jpeg",
      "assets/images/seerat-pdf/page-15-img-1.jpeg",
      "assets/images/seerat-pdf/page-16-img-1.jpeg",
      "assets/images/seerat-pdf/page-17-img-1.jpeg",
      "assets/images/seerat-pdf/page-18-img-1.jpeg",
      "assets/images/seerat-pdf/page-19-img-1.jpeg",
      "assets/images/seerat-pdf/page-20-img-1.jpeg",
      "assets/images/seerat-pdf/page-21-img-1.jpeg",
      "assets/images/seerat-pdf/page-22-img-1.jpeg",
      "assets/images/seerat-pdf/page-23-img-1.jpeg",
      "assets/images/seerat-pdf/page-24-img-1.jpeg",
      "assets/images/seerat-pdf/page-25-img-1.jpeg"
    ];

    const stage = section.querySelector(".sce-stage");
    const previousButton = section.querySelector("[data-sce-previous]");
    const nextButton = section.querySelector("[data-sce-next]");
    const playButton = section.querySelector(".sce-play");
    const progressFill = section.querySelector(".sce-progress-fill");
    const status = section.querySelector('[role="status"]');

    const reducedMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)"
    );

    const finePointer = window.matchMedia(
      "(hover: hover) and (pointer: fine)"
    );

    const cards = [];
    const count = images.length;

    let position = 0;
    let target = 0;

    let tiltX = 0;
    let tiltY = 0;
    let desiredTiltX = 0;
    let desiredTiltY = 0;

    let frame = 0;
    let lastTime = 0;

    let dragging = false;
    let startY = 0;
    let startTarget = 0;

    let autoplayTimer = null;
    let playing = false;
    let sectionVisible = true;
    let pointerInside = false;

    function wrap(value) {
      return ((value % count) + count) % count;
    }

    /* Create the original image cards */

    images.forEach((source, index) => {
      const figure = document.createElement("figure");

      figure.className = "sce-card";
      figure.setAttribute("role", "group");
      figure.setAttribute("aria-roledescription", "slide");

      figure.setAttribute(
        "aria-label",
        "Official Seerat Club image " +
          (index + 1) +
          " of " +
          count
      );

      for (let layer = 0; layer < 3; layer++) {
        const edge = document.createElement("div");

        edge.className = "sce-card-edge";
        edge.setAttribute("aria-hidden", "true");

        figure.appendChild(edge);
      }

      const face = document.createElement("div");
      face.className = "sce-card-face";

      const image = document.createElement("img");

      image.alt = "Official Seerat Club event image " + (index + 1);
      image.width = 640;
      image.height = 394;
      image.loading = index < 3 ? "eager" : "lazy";
      image.decoding = "async";
      image.draggable = false;

      const errorMessage = document.createElement("span");

      errorMessage.className = "sce-image-error";
      errorMessage.textContent =
        "This official image is temporarily unavailable.";

      image.addEventListener("error", () => {
        figure.dataset.imageError = "true";
      });

      image.addEventListener("load", () => {
        delete figure.dataset.imageError;
      });

      image.src = source;

      face.append(image, errorMessage);
      figure.appendChild(face);
      stage.appendChild(figure);

      cards.push(figure);
    });

    /* Progress and accessible image count */

    function updateStatus() {
      const activeIndex = wrap(Math.round(target));

      progressFill.style.width =
        ((activeIndex + 1) / count) * 100 + "%";

      status.textContent =
        "Event image " + (activeIndex + 1) + " of " + count;

      cards.forEach((card, index) => {
        card.setAttribute(
          "aria-hidden",
          String(index !== activeIndex)
        );
      });
    }

    /* Cylinder movement */

    function draw(time) {
      const elapsed = lastTime
        ? Math.min(time - lastTime, 50)
        : 16.7;

      lastTime = time;

      const damping = 1 - Math.exp(-elapsed / 90);

      position = reducedMotion.matches
        ? target
        : position + (target - position) * damping;

      tiltX += (desiredTiltX - tiltX) * damping;
      tiltY += (desiredTiltY - tiltY) * damping;

      const spacing = stage.clientHeight * 0.33;

      cards.forEach((card, index) => {
        const offset =
          wrap(index - position + count / 2) - count / 2;

        const distance = Math.abs(offset);

        if (distance > 2.65) {
          card.style.visibility = "hidden";
          return;
        }

        card.style.visibility = "visible";

        const y = offset * spacing;

        const z = reducedMotion.matches
          ? 0
          : 125 - Math.min(distance, 2.65) * 210;

        const rotation = reducedMotion.matches
          ? 0
          : -Math.sign(offset) *
            Math.min(distance, 1.5) *
            43;

        card.style.zIndex = String(
          Math.round(30 - distance * 10)
        );

        card.style.opacity = String(
          Math.max(0.2, 1 - distance * 0.28)
        );

        card.style.transform =
          "translate(-50%, -50%) " +
          "translate3d(0, " + y + "px, " + z + "px) " +
          "rotateX(" + (rotation + tiltY) + "deg) " +
          "rotateY(" + tiltX + "deg)";
      });

      const stillMoving =
        Math.abs(target - position) > 0.001 ||
        Math.abs(desiredTiltX - tiltX) > 0.01 ||
        Math.abs(desiredTiltY - tiltY) > 0.01;

      if (stillMoving) {
        frame = requestAnimationFrame(draw);
      } else {
        frame = 0;
        lastTime = 0;
      }
    }

    function render() {
      if (!frame) {
        frame = requestAnimationFrame(draw);
      }
    }

    function navigate(direction) {
      target = Math.round(target) + direction;

      updateStatus();
      render();
    }

    previousButton.addEventListener("click", () => {
      navigate(-1);
    });

    nextButton.addEventListener("click", () => {
      navigate(1);
    });

    /* Keyboard navigation */

    stage.addEventListener("keydown", (event) => {
      const nextKeys = ["ArrowDown", "ArrowRight"];
      const previousKeys = ["ArrowUp", "ArrowLeft"];

      if (nextKeys.includes(event.key)) {
        event.preventDefault();
        navigate(1);
      }

      if (previousKeys.includes(event.key)) {
        event.preventDefault();
        navigate(-1);
      }
    });

    /* Drag and pointer tilt */

    stage.addEventListener("pointerdown", (event) => {
      if (event.button !== 0) return;

      dragging = true;
      startY = event.clientY;
      startTarget = target;

      stage.setPointerCapture(event.pointerId);
    });

    stage.addEventListener("pointermove", (event) => {
      if (dragging) {
        target =
          startTarget +
          (startY - event.clientY) /
          (stage.clientHeight * 0.33);

        if (reducedMotion.matches) {
          target = Math.round(target);
        }

        render();
        return;
      }

      if (!finePointer.matches || reducedMotion.matches) return;

      const bounds = stage.getBoundingClientRect();

      desiredTiltX =
        ((event.clientX - bounds.left) / bounds.width - 0.5) * 6;

      desiredTiltY =
        -((event.clientY - bounds.top) / bounds.height - 0.5) * 4;

      render();
    });

    function finishDrag() {
      if (!dragging) return;

      dragging = false;
      target = Math.round(target);

      updateStatus();
      render();
    }

    stage.addEventListener("pointerup", finishDrag);
    stage.addEventListener("pointercancel", finishDrag);
    stage.addEventListener("lostpointercapture", finishDrag);

    stage.addEventListener("pointerleave", () => {
      desiredTiltX = 0;
      desiredTiltY = 0;

      render();
    });

    section.addEventListener("pointerenter", () => {
      pointerInside = true;
    });

    section.addEventListener("pointerleave", () => {
      pointerInside = false;
    });

    /* Optional Play / Pause */

    function stopAutoplay() {
      clearInterval(autoplayTimer);

      autoplayTimer = null;
      playing = false;

      playButton.textContent = "Play";

      playButton.setAttribute(
        "aria-label",
        "Start automatic carousel"
      );
    }

    playButton.addEventListener("click", () => {
      if (playing || reducedMotion.matches) {
        stopAutoplay();
        return;
      }

      playing = true;
      playButton.textContent = "Pause";

      playButton.setAttribute(
        "aria-label",
        "Pause automatic carousel"
      );

      autoplayTimer = setInterval(() => {
        const focusedInside =
          section.contains(document.activeElement) &&
          document.activeElement !== playButton;

        if (
          !document.hidden &&
          sectionVisible &&
          !dragging &&
          !pointerInside &&
          !focusedInside
        ) {
          navigate(1);
        }
      }, 5500);
    });

    section.addEventListener("focusin", (event) => {
      if (playing && event.target !== playButton) {
        stopAutoplay();
      }
    });

    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver(
        (entries) => {
          sectionVisible = entries[0].isIntersecting;
        },
        { threshold: 0.05 }
      );

      observer.observe(section);
    }

    reducedMotion.addEventListener("change", () => {
      stopAutoplay();

      desiredTiltX = 0;
      desiredTiltY = 0;

      render();
    });

    if ("ResizeObserver" in window) {
      const observer = new ResizeObserver(render);
      observer.observe(stage);
    } else {
      window.addEventListener("resize", render);
    }

    updateStatus();
    render();
  })();



  (() => {
    const section = document.getElementById("sc-event-chapters");
    const dialog = document.getElementById("sc-event-viewer");

    if (!section || !dialog || section.dataset.ecReady) return;
    section.dataset.ecReady = "true";

    const track = section.querySelector(".ec-track");
    const fullImage = dialog.querySelector(".ec-full-image");
    const viewerTitle = dialog.querySelector("#ec-viewer-title");
    const closeButton = dialog.querySelector("[data-ec-close]");
    const previous = section.querySelector('[data-ec-direction="-1"]');
    const next = section.querySelector('[data-ec-direction="1"]');
    const reducedMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)"
    );

    const base = "assets/images/seerat-pdf/";

    /*
      Original photographs from the supplied Seerat Club PDF.
      These files already belong to the existing project.
      Neutral captions avoid inventing details about each photograph.
    */
    const photographs = [
      "page-11-img-1.jpeg",
      "page-12-img-1.jpeg",
      "page-13-img-1.jpeg",
      "page-14-img-1.jpeg",
      "page-14-img-2.jpeg",
      "page-15-img-1.jpeg",
      "page-16-img-1.jpeg",
      "page-17-img-1.jpeg",
      "page-18-img-1.jpeg",
      "page-18-img-2.jpeg",
      "page-19-img-1.jpeg",
      "page-20-img-1.jpeg",
      "page-21-img-1.jpeg",
      "page-22-img-1.jpeg",
      "page-23-img-1.jpeg",
      "page-24-img-1.jpeg",
      "page-25-img-1.jpeg"
    ];

    const fragment = document.createDocumentFragment();

    photographs.forEach((file, index) => {
      const number = String(index + 1).padStart(2, "0");
      const title = "Letters to Kings · Moment " + number;

      const article = document.createElement("article");
      article.className = "ec-card";

      const button = document.createElement("button");
      button.className = "ec-card-button";
      button.type = "button";
      button.dataset.ecImage = base + file;
      button.dataset.ecTitle = title;
      button.setAttribute("aria-label", "Open " + title);

      const image = document.createElement("img");
      image.src = base + file;
      image.alt = "Seerat Club Letters to Kings session photograph " + number;
      image.loading = "lazy";
      image.decoding = "async";
      image.width = 640;
      image.height = 480;

      const expand = document.createElement("span");
      expand.className = "ec-expand";
      expand.textContent = "View photograph ↗";
      expand.setAttribute("aria-hidden", "true");

      const copy = document.createElement("div");
      copy.className = "ec-card-copy";

      const label = document.createElement("small");
      label.textContent = "Session memories · " + number;

      const heading = document.createElement("h4");
      heading.textContent = "Letters to Kings";

      button.append(image, expand);
      copy.append(label, heading);
      article.append(button, copy);
      fragment.append(article);
    });

    track.append(fragment);

    function updateControls() {
      const maximum = track.scrollWidth - track.clientWidth;
      previous.disabled = track.scrollLeft <= 3;
      next.disabled = maximum <= 3 || track.scrollLeft >= maximum - 3;
    }

    section.querySelectorAll("[data-ec-direction]").forEach((button) => {
      button.addEventListener("click", () => {
        const card = track.querySelector(".ec-card");
        if (!card) return;

        const gap = parseFloat(getComputedStyle(track).gap) || 20;
        const distance = card.getBoundingClientRect().width + gap;

        track.scrollBy({
          left: distance * Number(button.dataset.ecDirection),
          behavior: reducedMotion.matches ? "auto" : "smooth"
        });
      });
    });

    track.addEventListener("scroll", updateControls, { passive: true });

    if ("ResizeObserver" in window) {
      new ResizeObserver(updateControls).observe(track);
    } else {
      window.addEventListener("resize", updateControls);
    }

    requestAnimationFrame(updateControls);

    let lastTrigger = null;
    let previousOverflow = "";

    section.addEventListener("click", (event) => {
      const trigger = event.target.closest("[data-ec-image]");
      if (!trigger || !section.contains(trigger)) return;

      const source = trigger.dataset.ecImage;
      const title = trigger.dataset.ecTitle || "Seerat Club photograph";

      if (typeof dialog.showModal !== "function") {
        window.open(source, "_blank", "noopener,noreferrer");
        return;
      }

      if (dialog.open) return;

      lastTrigger = trigger;
      fullImage.src = source;
      fullImage.alt = title;
      viewerTitle.textContent = title;

      previousOverflow = document.body.style.overflow;
      document.body.style.overflow = "hidden";

      dialog.showModal();
      closeButton.focus();
    });

    closeButton.addEventListener("click", () => dialog.close());

    dialog.addEventListener("click", (event) => {
      if (event.target !== dialog) return;

      const rect = dialog.getBoundingClientRect();

      if (
        event.clientX < rect.left ||
        event.clientX > rect.right ||
        event.clientY < rect.top ||
        event.clientY > rect.bottom
      ) {
        dialog.close();
      }
    });

    dialog.addEventListener("close", () => {
      document.body.style.overflow = previousOverflow;
      fullImage.removeAttribute("src");

      if (lastTrigger && lastTrigger.isConnected) {
        lastTrigger.focus({ preventScroll: true });
      }
    });

    /* Gentle entrance, only when the section becomes visible */
    if (
      !reducedMotion.matches &&
      "IntersectionObserver" in window &&
      typeof section.animate === "function"
    ) {
      const observer = new IntersectionObserver((entries) => {
        if (!entries.some((entry) => entry.isIntersecting)) return;

        section.querySelectorAll(
          ".ec-eyebrow, .ec-intro h2, .ec-intro p, " +
          ".ec-intro-actions, .ec-feature, .ec-gallery-top"
        ).forEach((element, index) => {
          element.animate(
            [
              { opacity: 1, transform: "translateY(0)" },
              { opacity: 1, transform: "translateY(0)" }
            ],
            {
              duration: 650,
              delay: index * 85,
              easing: "cubic-bezier(.2,.7,.2,1)",
              fill: "backwards"
            }
          );
        });

        observer.disconnect();
      }, { threshold: 0.12 });

      observer.observe(section);
    }
  })();



(function () {
  "use strict";

  const section = document.getElementById("sc-programs");
  const modal = document.getElementById("sc-experience-dialog");

  if (!section || !modal) return;

  const title = document.getElementById("sc-experience-dialog-title");
  const activityCopy = document.getElementById("sc-experience-activity-copy");
  const purposeCopy = document.getElementById("sc-experience-purpose-copy");
  const modalBody = modal.querySelector(".sc-experience-dialog-body");
  const closeButton = modal.querySelector(".sc-experience-close");
  const exploreButton = modal.querySelector(".sc-experience-secondary");

  let previousTrigger = null;

  const activities = {
    scholar: {
      title: "Scholar Guidance",
      activity:
        "Discover Seerah under the guidance of Maulana Muhammad Owais.",
      purpose:
        "Get to know the Prophet ﷺ and connect his example with everyday choices."
    },

    stories: {
      title: "Seerah Stories",
      activity:
        "Explore the life of Prophet Muhammad ﷺ through interactive stories and discussion.",
      purpose:
        "Discover lessons in kindness, patience and courage."
    },

    practical: {
      title: "Practical Activities",
      activity:
        "Build, create and explore through maps, crafts and group challenges.",
      purpose:
        "Connect the lessons of Seerah with experiences children remember."
    },

    reflection: {
      title: "Reflection & Character",
      activity:
        "Pause, ask questions and reflect on the lessons within each session.",
      purpose:
        "Explore how kindness, generosity and patience shape everyday actions."
    },

    monthly: {
      title: "Monthly Sessions",
      activity:
        "Come together each month for stories, activities, discussion and reflection.",
      purpose:
        "Keep growing through a Seerah journey that educates, inspires and unites."
    },

    masjid: {
      title: "Masjid & Community",
      activity:
        "Learn and take part alongside other children and volunteers at the Masjid.",
      purpose:
        "Build a connection with the Masjid through learning, friendship and belonging."
    },

    discussions: {
      title: "Group Discussions",
      activity:
        "Share ideas, ask questions and listen to different perspectives.",
      purpose:
        "Think about Seerah lessons and their place in everyday life."
    },

    map: {
      title: "World Map Activities",
      activity:
        "Explore the world of Letters to Kings through a giant map and landmark activities.",
      purpose:
        "Discover the places connected with the Prophet’s ﷺ letters to rulers."
    },

    crafts: {
      title: "Creative Crafts",
      activity:
        "Create themed crafts, from decorated letters to model landmarks.",
      purpose:
        "Explore session themes through creativity and reflection."
    },

    mail: {
      title: "Friendship Mail",
      activity:
        "Write and decorate letters for children in Palestine.",
      purpose:
        "Express care, generosity and connection with the wider community."
    },

    together: {
      title: "Learning Together",
      activity:
        "Join shared activities with other children and volunteers.",
      purpose:
        "Build friendship and cooperation while learning lessons from Seerah."
    }
  };

  section.querySelectorAll("[data-sc-activity]").forEach(function (button) {
    button.setAttribute("aria-haspopup", "dialog");
    button.setAttribute("aria-controls", modal.id);

    button.addEventListener("click", function () {
      const details = activities[button.dataset.scActivity];

      if (!details || modal.open) return;

      previousTrigger = button;

      title.textContent = details.title;
      activityCopy.textContent = details.activity;
      purposeCopy.textContent = details.purpose;

      modal.showModal();
      modalBody.scrollTop = 0;
      document.body.classList.add("sc-experience-is-open");
    });
  });

  function closeModal() {
    if (modal.open) modal.close();
  }

  closeButton.addEventListener("click", closeModal);
  exploreButton.addEventListener("click", closeModal);

  /* Close when the backdrop is clicked */
  modal.addEventListener("click", function (event) {
    if (event.target !== modal) return;

    const bounds = modal.getBoundingClientRect();

    const outside =
      event.clientX < bounds.left ||
      event.clientX > bounds.right ||
      event.clientY < bounds.top ||
      event.clientY > bounds.bottom;

    if (outside) closeModal();
  });

  /* Escape works through the native dialog behaviour */
  modal.addEventListener("close", function () {
    document.body.classList.remove("sc-experience-is-open");

    if (previousTrigger && previousTrigger.isConnected) {
      previousTrigger.focus({ preventScroll: true });
    }
  });
})();



(function () {
  "use strict";

  const section = document.getElementById("sc-discovery");

  if (!section || section.dataset.initialized === "true") return;

  section.dataset.initialized = "true";

  const slides = [
    {
      word: "DISCOVER",
      title: "Discover the Seerah",
      messageTitle: "Get to know their real hero.",
      background: "#f5f7f3",
      description:
        "Children discover the life and character of Prophet Muhammad ﷺ through interactive stories, helping them understand kindness, patience and choices in everyday life.",
      link: "event-letters-to-kings.html",
      linkText: "Explore the session"
    },
    {
      word: "EXPLORE",
      title: "Explore through activities",
      messageTitle: "Make the story a shared discovery.",
      background: "#efe6d0",
      description:
        "By rebuilding a giant world map, children explored the lands connected with the Prophet’s ﷺ letters. Geography and Seerah became one shared discovery.",
      link: "event-letters-to-kings.html",
      linkText: "Explore the session"
    },
    {
      word: "CARE",
      title: "Put kindness into practice",
      messageTitle: "Turn a lesson into a caring action.",
      background: "#f3ead6",
      description:
        "Children wrote and decorated letters for children in Palestine, turning the session’s message into an expression of care, generosity and friendship.",
      link: "event-letters-to-kings.html",
      linkText: "Explore the session"
    },
    {
      word: "BELONG",
      title: "Learn and belong",
      messageTitle: "A place to learn. A community to belong to.",
      background: "#f5f7f3",
      description:
        "Through shared activities with other children and volunteers, the Masjid becomes a place of learning, friendship and belonging.",
      link: "volunteer.html",
      linkText: "Explore volunteering"
    }
  ];

  const photos = Array.from(
    section.querySelectorAll(".scd-photo")
  );

  const ghost = section.querySelector(".scd-ghost");
  const messageTitle = section.querySelector("[data-scd-message-title]");
  const messageCopy = section.querySelector("[data-scd-message-copy]");
  const counter = section.querySelector("[data-scd-count]");
  const link = section.querySelector("[data-scd-link]");
  const linkText = link.querySelector("span");
  const status = section.querySelector(".scd-status");
  const stage = section.querySelector(".scd-stage");

  const reducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  );

  let activeIndex = 0;
  let isAnimating = false;
  let unlockTimer;
  let startX = 0;
  let startY = 0;

  function navigate(direction) {
    if (isAnimating) return;

    isAnimating = true;

    activeIndex = (
      activeIndex +
      (direction === "next" ? 1 : slides.length - 1)
    ) % slides.length;

    const current = slides[activeIndex];

    section.style.setProperty(
      "--discovery-bg",
      current.background
    );

    photos.forEach(function (photo, index) {
      const relativePosition = (
        index - activeIndex + slides.length
      ) % slides.length;

      const position = [
        "center",
        "right",
        "back",
        "left"
      ][relativePosition];

      photo.dataset.position = position;

      if (position === "center") {
        photo.removeAttribute("aria-hidden");
      } else {
        photo.setAttribute("aria-hidden", "true");
      }
    });

    ghost.textContent = current.word;
    messageTitle.textContent = current.messageTitle;
    messageCopy.textContent = current.description;

    counter.textContent = String(
      activeIndex + 1
    ).padStart(2, "0");

    link.href = current.link;
    linkText.textContent = current.linkText;

    status.textContent =
      "Activity " +
      (activeIndex + 1) +
      " of " +
      slides.length +
      ": " +
      current.title +
      ". " +
      current.messageTitle;

    clearTimeout(unlockTimer);

    unlockTimer = window.setTimeout(function () {
      isAnimating = false;
    }, reducedMotion.matches ? 0 : 650);
  }

  /* Arrow buttons */

  section.querySelectorAll(
    "[data-scd-direction]"
  ).forEach(function (button) {
    button.addEventListener("click", function () {
      navigate(button.dataset.scdDirection);
    });
  });

  /* Keyboard controls */

  section.addEventListener("keydown", function (event) {
    if (event.altKey || event.ctrlKey || event.metaKey) return;

    if (event.key === "ArrowRight") {
      event.preventDefault();
      navigate("next");
    }

    if (event.key === "ArrowLeft") {
      event.preventDefault();
      navigate("prev");
    }
  });

  /* Mobile swipe */

  stage.addEventListener("touchstart", function (event) {
    startX = event.changedTouches[0].clientX;
    startY = event.changedTouches[0].clientY;
  }, { passive: true });

  stage.addEventListener("touchend", function (event) {
    const distanceX =
      event.changedTouches[0].clientX - startX;

    const distanceY =
      event.changedTouches[0].clientY - startY;

    if (
      Math.abs(distanceX) > 45 &&
      Math.abs(distanceX) > Math.abs(distanceY) * 1.3
    ) {
      navigate(distanceX < 0 ? "next" : "prev");
    }
  }, { passive: true });

  /* Preload images as the section approaches the screen */

  function preloadImages() {
    photos.forEach(function (photo) {
      const image = new Image();
      image.src = photo.querySelector("img").src;
    });
  }

  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      function (entries) {
        const isVisible = entries.some(function (entry) {
          return entry.isIntersecting;
        });

        if (isVisible) {
          preloadImages();
          observer.disconnect();
        }
      },
      { rootMargin: "500px" }
    );

    observer.observe(section);
  } else {
    preloadImages();
  }
})();


/* ==========================================================================
   Learning Journey Interactive Path (#sc-learning-journey)
   ========================================================================== */
(function () {
  "use strict";

  function initialiseLearningJourney() {
    const section = document.getElementById("sc-learning-journey");

    if (!section || section.dataset.scLearningReady === "true") {
      return;
    }

    section.dataset.scLearningReady = "true";

    const cards = Array.from(
      section.querySelectorAll("[data-sc-learning-step]")
    );

    const detail = section.querySelector(".sc-learning-detail");
    const detailImage = detail.querySelector(".sc-learning-detail-image > img");
    const stepLabel = detail.querySelector(".sc-learning-step-label");
    const heading = detail.querySelector("#sc-learning-detail-heading");
    const description = detail.querySelector(".sc-learning-description");
    const purpose = detail.querySelector(".sc-learning-purpose-text");
    const status = section.querySelector('[role="status"]');

    const reducedMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)"
    );

    const stages = {
      discover: {
        number: "01",
        name: "Discover",
        heading: ["Meet the story.", "Discover its meaning."],
        description:
          "Children explore moments from the lives of the Prophets through engaging stories and guided discussion.",
        purpose:
          "Begin understanding faith through the lives and examples of our Prophets."
      },

      explore: {
        number: "02",
        name: "Explore",
        heading: ["Look closer.", "Ask questions."],
        description:
          "Children explore ideas through interactive activities, maps, discussion and hands on learning.",
        purpose:
          "Help children connect Seerah with curiosity, observation and understanding."
      },

      reflect: {
        number: "03",
        name: "Reflect",
        heading: ["Pause.", "Think about the lesson."],
        description:
          "Children reflect on what the story teaches and how it connects with their own choices and experiences.",
        purpose:
          "Develop thoughtful understanding and emotional connection with Seerah."
      },

      practice: {
        number: "04",
        name: "Practice",
        heading: ["Turn learning", "into action."],
        description:
          "Children apply lessons through practical activities, teamwork, creativity and meaningful challenges.",
        purpose:
          "Encourage children to bring Islamic values into everyday behaviour."
      },

      belong: {
        number: "05",
        name: "Belong",
        heading: ["Grow together.", "Build character."],
        description:
          "Children learn together inside the Masjid and develop stronger relationships with faith, community and one another.",
        purpose:
          "Help children see the Masjid as a place to learn, connect and grow."
      }
    };

    let activeKey = "discover";
    let transitionTimer = null;

    /*
     * Read each image from its HTML card.
     * Replacing a card's image address also updates the detail panel.
     */
    cards.forEach(function (card) {
      const key = card.dataset.scLearningStep;
      const image = card.querySelector("img");

      stages[key].image = image.getAttribute("src");
      stages[key].alt = image.getAttribute("alt") || stages[key].name;
    });

    /*
     * Missing placeholder files remain visually tidy.
     * Once your images are added, they display normally.
     */
    section.querySelectorAll("img").forEach(function (image) {
      function checkImage() {
        image.classList.toggle(
          "sc-learning-image-unavailable",
          image.complete && image.naturalWidth === 0
        );
      }

      image.addEventListener("load", checkImage);
      image.addEventListener("error", checkImage);

      if (image.complete) {
        checkImage();
      }
    });

    function updateDetail(stage) {
      stepLabel.textContent =
        "STEP " + stage.number + " · " + stage.name.toUpperCase();

      heading.replaceChildren(
        document.createTextNode(stage.heading[0]),
        document.createElement("br"),
        document.createTextNode(stage.heading[1])
      );

      description.textContent = stage.description;
      purpose.textContent = stage.purpose;

      detailImage.classList.add("sc-learning-image-unavailable");
      detailImage.alt = stage.alt;
      detailImage.src = stage.image;

      if (detailImage.complete && detailImage.naturalWidth > 0) {
        detailImage.classList.remove("sc-learning-image-unavailable");
      }

      detail.classList.remove("is-changing");
      detail.setAttribute("aria-busy", "false");

      status.textContent =
        stage.name + " selected. " +
        stage.heading.join(" ") + " " +
        stage.description + " Purpose: " + stage.purpose;
    }

    function selectStage(card) {
      const key = card.dataset.scLearningStep;

      if (!stages[key] || key === activeKey) {
        return;
      }

      activeKey = key;
      window.clearTimeout(transitionTimer);

      cards.forEach(function (item) {
        const selected = item === card;

        item.classList.toggle("is-active", selected);
        item.setAttribute("aria-pressed", String(selected));
        item.tabIndex = selected ? 0 : -1;
      });

      detail.setAttribute("aria-busy", "true");

      if (reducedMotion.matches) {
        updateDetail(stages[key]);
        return;
      }

      detail.classList.add("is-changing");

      transitionTimer = window.setTimeout(function () {
        updateDetail(stages[key]);
      }, 160);
    }

    cards.forEach(function (card, index) {
      card.addEventListener("click", function () {
        selectStage(card);
      });

      card.addEventListener("keydown", function (event) {
        let nextIndex = index;

        switch (event.key) {
          case "ArrowRight":
          case "ArrowDown":
            nextIndex = (index + 1) % cards.length;
            break;

          case "ArrowLeft":
          case "ArrowUp":
            nextIndex = (index - 1 + cards.length) % cards.length;
            break;

          case "Home":
            nextIndex = 0;
            break;

          case "End":
            nextIndex = cards.length - 1;
            break;

          default:
            return;
        }

        event.preventDefault();

        const nextCard = cards[nextIndex];

        nextCard.focus();
        selectStage(nextCard);
      });
    });

    /*
     * If motion preferences change during a transition,
     * finish the pending update immediately.
     */
    function handleMotionChange() {
      if (!reducedMotion.matches) return;

      window.clearTimeout(transitionTimer);
      updateDetail(stages[activeKey]);
    }

    if (reducedMotion.addEventListener) {
      reducedMotion.addEventListener("change", handleMotionChange);
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener(
      "DOMContentLoaded",
      initialiseLearningJourney,
      { once: true }
    );
  } else {
    initialiseLearningJourney();
  }
})();



/* ==========================================================================
   Story Trail Chapter Carousel (#sc-story-trail)
   ========================================================================== */
  (function () {
    "use strict";

    function initialiseSeerahTrail() {
      const section = document.getElementById("sc-story-trail");

      if (!section || section.dataset.ready === "true") return;
      section.dataset.ready = "true";

      const list = section.querySelector(".trail-list");
      const viewport = section.querySelector(".trail-window");
      const previous = section.querySelector("[data-trail-prev]");
      const next = section.querySelector("[data-trail-next]");

      /*
       * The image field accepts a copied image address.
       *
       * Leave it empty to reuse an image address from your
       * existing last carousel as a temporary artwork preview.
       *
       * These previews are not labelled as photographs of
       * the particular historical session.
       */

      const chapters = [
        {
          title: "Once Upon a Time in Jannat",
          month: "October 2024",
          link: "event-once-upon-a-time-in-jannat.html",
          image: "assets/images/academy/once-upon-a-time-in-jannat-theme.svg"
        },
        {
          title: "The Friendly Fire",
          month: "November",
          link: "event-the-friendly-fire.html",
          image: "assets/images/academy/the-friendly-fire-theme.svg"
        },
        {
          title: "Pursuit of Submission",
          month: "December",
          link: "event-the-pursuit-of-submission.html",
          image: "assets/images/academy/the-pursuit-of-submission-theme.svg"
        },
        {
          title: "The Year of the Elephant",
          month: "January 2025",
          link: "event-the-year-of-the-elephant.html",
          image: "assets/images/academy/the-year-of-the-elephant-theme.svg"
        },
        {
          title: "The Chosen Heart",
          month: "February",
          link: "event-the-chosen-heart.html",
          image: "assets/images/academy/the-chosen-heart-theme.svg"
        },
        {
          title: "The Prophet in Making",
          month: "April",
          link: "event-the-prophet-in-making.html",
          image: "assets/images/academy/the-prophet-in-making-theme.svg"
        },
        {
          title: "As Saadiq Al Ameen",
          month: "May",
          link: "event-as-saadiq-al-ameen.html",
          image: "assets/images/academy/as-saadiq-al-ameen-theme.svg"
        },
        {
          title: "At Taahirah",
          month: "July",
          link: "event-at-taahirah.html",
          image: "assets/images/academy/at-taahirah-theme.svg"
        },
        {
          title: "The First Responders",
          month: "August",
          link: "event-the-first-responders.html",
          image: "assets/images/academy/the-first-responders-theme.svg"
        },
        {
          title: "Isra & Mi’raj",
          month: "September",
          link: "event-isra-miraj.html",
          image: "assets/images/academy/isra-miraj-theme.svg"
        },
        {
          title: "Hijrat to Medina",
          month: "October",
          link: "event-hijrat-to-medina.html",
          image: "assets/images/academy/hijrat-to-medina-theme.svg"
        },
        {
          title: "Little Hearts of Mecca",
          month: "November",
          link: "event-young-hearts-of-mecca.html",
          image: "assets/images/academy/young-hearts-of-mecca-theme.svg"
        }
      ];

      const palette = [
        ["#f6eedb", "#8c6b25"],
        ["#eaf0ec", "#21352e"],
        ["#f4ead2", "#7a5b1a"],
        ["#e6ede8", "#1f2b2c"]
      ];

      chapters.forEach(function (chapter, index) {
        const item = document.createElement("li");
        const finalChapter = index === chapters.length - 1;
        const colour = palette[index % palette.length];

        item.className =
          "trail-item" + (finalChapter ? " trail-item-final" : "");

        item.style.setProperty(
          "--chapter-column",
          Math.floor(index / 2) + 1
        );

        item.style.setProperty("--chapter-tint", colour[0]);
        item.style.setProperty("--chapter-ink", colour[1]);

        const card = document.createElement("a");
        card.className = "trail-card";
        card.href = chapter.link;

        const number = document.createElement("span");
        number.className = "trail-number";
        number.textContent = String(index + 1).padStart(2, "0");

        const art = document.createElement("span");
        art.className = "trail-art";
        art.innerHTML =
          '<svg aria-hidden="true"><use href="#trail-book"></use></svg>';

        const title = document.createElement("h3");
        title.textContent = chapter.title;

        const month = document.createElement("span");
        month.className = "trail-month";
        month.textContent = chapter.month;

        const action = document.createElement("span");
        action.className = "trail-action";
        action.innerHTML =
          'Explore Chapter <svg aria-hidden="true">' +
          '<use href="#trail-arrow"></use></svg>';

        card.append(number, art);

        if (finalChapter) {
          const label = document.createElement("span");
          label.className = "trail-cycle-label";
          label.textContent = "FINAL CHAPTER · CYCLE 1";
          card.append(label);
        }

        card.append(title, month, action);
        item.append(card);
        list.append(item);
      });

      /*
       * Reuse the image addresses already present in the
       * last carousel. No unrelated stock photos are added.
       */

      function connectExistingImages() {
        const existingImages = Array.from(
          document.querySelectorAll("#sc-event-showcase .sce-stage img")
        );

        const addresses = [...new Set(
          existingImages
            .map(function (image) {
              return image.getAttribute("src") || "";
            })
            .filter(function (address) {
              return Boolean(address && address.trim());
            })
        )];

        list.querySelectorAll(".trail-art").forEach(function (art, index) {
          if (art.querySelector("img")) return;

          const chapter = chapters[index];
          const source =
            chapter.image ||
            (addresses.length ? addresses[index % addresses.length] : "");

          if (!source) return;

          const image = document.createElement("img");

          image.alt = chapter.image
            ? chapter.title + " artwork"
            : "Seerat Club artwork preview";

          image.loading = "lazy";
          image.decoding = "async";
          image.draggable = false;

          image.addEventListener("error", function () {
            image.remove();
          }, { once: true });

          image.src = source;
          art.append(image);
        });
      }

      connectExistingImages();

      /*
       * The existing carousel may initialise after this section.
       * Observe that carousel only until its image cards appear.
       */

      const sourceCarousel = document.querySelector(
        "#sc-event-showcase .sce-stage"
      );

      if (sourceCarousel && !sourceCarousel.querySelector("img")) {
        const observer = new MutationObserver(function () {
          if (sourceCarousel.querySelector("img")) {
            connectExistingImages();
            observer.disconnect();
          }
        });

        observer.observe(sourceCarousel, {
          childList: true,
          subtree: true
        });
      }

      function updateControls() {
        const maximum = viewport.scrollWidth - viewport.clientWidth;
        previous.disabled = viewport.scrollLeft <= 2;
        next.disabled = viewport.scrollLeft >= maximum - 2;
      }

      function move(direction) {
        viewport.scrollBy({
          left: direction * Math.max(260, viewport.clientWidth * 0.75),
          behavior: window.matchMedia(
            "(prefers-reduced-motion: reduce)"
          ).matches ? "auto" : "smooth"
        });
      }

      previous.addEventListener("click", function () {
        move(-1);
      });

      next.addEventListener("click", function () {
        move(1);
      });

      viewport.addEventListener("scroll", updateControls, {
        passive: true
      });

      viewport.addEventListener("keydown", function (event) {
        if (event.target !== viewport || window.innerWidth <= 700) return;

        if (event.key === "ArrowRight") {
          event.preventDefault();
          move(1);
        }

        if (event.key === "ArrowLeft") {
          event.preventDefault();
          move(-1);
        }
      });

      /* Mouse dragging. Touch uses native scrolling. */

      let dragging = false;
      let moved = false;
      let startX = 0;
      let startScroll = 0;

      viewport.addEventListener("pointerdown", function (event) {
        if (
          event.pointerType !== "mouse" ||
          event.button !== 0 ||
          window.innerWidth <= 700
        ) return;

        dragging = true;
        moved = false;
        startX = event.clientX;
        startScroll = viewport.scrollLeft;
      });

      window.addEventListener("pointermove", function (event) {
        if (!dragging) return;

        const distance = event.clientX - startX;

        if (Math.abs(distance) > 7) {
          moved = true;
          viewport.classList.add("is-dragging");
          viewport.scrollLeft = startScroll - distance;
        }
      });

      function stopDragging() {
        dragging = false;
        viewport.classList.remove("is-dragging");
      }

      window.addEventListener("pointerup", stopDragging);
      window.addEventListener("pointercancel", stopDragging);

      viewport.addEventListener("dragstart", function (event) {
        event.preventDefault();
      });

      viewport.addEventListener("click", function (event) {
        if (!moved) return;
        event.preventDefault();
        event.stopPropagation();
        moved = false;
      }, true);

      window.addEventListener("resize", updateControls);
      updateControls();
    }

    if (document.readyState === "loading") {
      document.addEventListener(
        "DOMContentLoaded",
        initialiseSeerahTrail,
        { once: true }
      );
    } else {
      initialiseSeerahTrail();
    }
  })();


/* ==========================================================================
   Featured Seerah Sessions Carousel Controls (#sc-featured-sessions)
   ========================================================================== */
(function () {
  "use strict";

  function initFeaturedSessionsCarousel() {
    const track = document.getElementById("carouselTrack");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    if (!track || !prevBtn || !nextBtn || track.dataset.bound === "true") {
      return;
    }
    track.dataset.bound = "true";

    function getStepWidth() {
      const card = track.querySelector(".sc-featured-card");
      if (!card) return 340;
      const gap = 20;
      return card.getBoundingClientRect().width + gap;
    }

    prevBtn.addEventListener("click", function () {
      track.scrollBy({ left: -getStepWidth(), behavior: "smooth" });
    });

    nextBtn.addEventListener("click", function () {
      track.scrollBy({ left: getStepWidth(), behavior: "smooth" });
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initFeaturedSessionsCarousel, { once: true });
  } else {
    initFeaturedSessionsCarousel();
  }
})();
