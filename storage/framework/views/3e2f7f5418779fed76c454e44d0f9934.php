<?php $__env->startSection('title', 'Registration · Seerat Club for Kids'); ?>
<?php $__env->startSection("Content"); ?>
<?php ($hero = $pageContent->get('hero')); ?>


 <!-- ==============================================
     YOUR NEW REGISTRATION PAGE CONTENT STARTS HERE
     ============================================== -->
<div class="reg-page-wrap">
        <!-- HERO SECTION -->
<!-- Registration Hero -->
<section
  class="sc-registration-banner"
  aria-labelledby="sc-registration-banner-title"
>
  <!-- Decorative Islamic Arch -->
  <svg
    class="sc-registration-banner__decoration"
    viewBox="0 0 520 520"
    fill="none"
    aria-hidden="true"
    focusable="false"
  >
    <circle
      cx="260"
      cy="260"
      r="220"
      stroke="currentColor"
      stroke-width="1.5"
      stroke-dasharray="6 10"
    />

    <circle
      cx="260"
      cy="260"
      r="175"
      stroke="currentColor"
      stroke-width="1"
    />

    <path
      d="M90 460V230C90 128 166 56 260 24C354 56 430 128 430 230V460"
      stroke="currentColor"
      stroke-width="2"
    />

    <path
      d="M260 64L268 84L288 92L268 100L260 120L252 100L232 92L252 84Z"
      fill="currentColor"
      stroke="none"
    />
  </svg>

  <div class="sc-registration-banner__container">
    <div class="sc-registration-banner__grid">
      <!-- Hero Content -->
      <div class="sc-registration-banner__content">
        <span class="sc-registration-banner__eyebrow">
          <span aria-hidden="true"></span>
          <?php echo e($hero?->metadata['eyebrow'] ?? 'Seerat Club Membership'); ?>

        </span>

        <h1
          class="sc-registration-banner__title"
          id="sc-registration-banner-title"
        >
          <?php echo e($hero?->metadata['title_prefix'] ?? 'Begin Your Child’s'); ?>

          <span><?php echo e($hero?->metadata['title_emphasis'] ?? 'Seerat Journey.'); ?></span>
        </h1>

        <p class="sc-registration-banner__description">
          <?php echo e($hero?->subtitle ?? 'Register your child for meaningful Seerah learning, engaging activities, reflection and community inside the Masjid.'); ?>

        </p>

        <div class="sc-registration-banner__age">
          <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.7"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
            focusable="false"
          >
            <circle cx="9" cy="8" r="3"></circle>
            <path d="M3 20v-2a6 6 0 0 1 12 0v2"></path>
            <path d="M16 5a3 3 0 0 1 0 6"></path>
            <path d="M17 14a5 5 0 0 1 4 4v2"></path>
          </svg>

          <span><?php echo e($hero?->metadata['age_text'] ?? 'For children aged 6 to 16'); ?></span>
        </div>

        <div class="sc-registration-banner__actions">
          <a
            class="sc-registration-banner__button"
            href="#registration-form"
          >
            Start Registration

            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
              focusable="false"
            >
              <path d="M5 12h14"></path>
              <path d="m13 6 6 6-6 6"></path>
            </svg>
          </a>

          <a
            class="sc-registration-banner__link"
            href="#reg-membership"
          >
            Explore membership
            <span aria-hidden="true">↗</span>
          </a>
        </div>
      </div>

      <!-- Authentic Seerat Club Photography -->
      <div class="sc-registration-banner__visual">
        <div class="sc-registration-banner__photo">
          <img
            src="<?php echo e(asset('assets/images/seerat-pdf/page-12-img-1.jpeg')); ?>"
            alt="Children learning together at Seerat Club"
            decoding="async"
            fetchpriority="high"
          />
        </div>

        <div class="sc-registration-banner__caption">
          <svg
            viewBox="0 0 48 48"
            fill="none"
            stroke="currentColor"
            stroke-width="1.6"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
            focusable="false"
          >
            <path d="M24 13c-6-4-13-5-20-3v27c7-2 14-1 20 3"></path>
            <path d="M24 13c6-4 13-5 20-3v27c-7-2-14-1-20 3"></path>
            <path d="M24 13v27"></path>
            <path d="M10 18c3 0 6 1 8 2"></path>
            <path d="M10 25c3 0 6 1 8 2"></path>
            <path d="M30 20c2-1 5-2 8-2"></path>
            <path d="M30 27c2-1 5-2 8-2"></path>
          </svg>

          <p>
            Good people. Better Muslims.
            <strong>Brighter Tomorrows.</strong>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
        <!-- MEMBERSHIP KIT SECTION -->
        <section class="reg-kit" id="reg-membership">
          <div class="container">
            <div class="reg-kit-grid">
              <div>
                <img
                  alt="Seerat Club learning experiences"
                  class="reg-kit-img"
                  decoding="async"
                  loading="lazy"
                  src="<?php echo e(asset('assets/images/registration-page-left-image.png')); ?>"
                />
              </div>
              <div>
                <span class="reg-eyebrow"> SEERAT CLUB MEMBERSHIP </span>
                <h2>Everything they need to begin the journey.</h2>
                <div class="reg-kit-benefits">
                  <div class="reg-benefit-card">
                    <div class="icon-box">
                      <!-- Replaced with visual icon matching reference -->
                      <svg
                        aria-hidden="true"
                        fill="none"
                        focusable="false"
                        stroke="var(--sc-gold)"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        viewbox="0 0 24 24"
                      >
                        <rect
                          height="14"
                          rx="2"
                          ry="2"
                          width="18"
                          x="3"
                          y="5"
                        ></rect>
                        <line x1="3" x2="21" y1="10" y2="10"></line>
                        <line x1="7" x2="10" y1="15" y2="15"></line>
                        <line x1="14" x2="17" y1="15" y2="15"></line>
                      </svg>
                    </div>
                    <h3>Exclusive Membership Card</h3>
                    <p>Exclusive membership card.</p>
                  </div>
                  <div class="reg-benefit-card">
                    <div class="icon-box">
                      <!-- Replaced with visual icon matching reference -->
                      <svg
                        aria-hidden="true"
                        fill="none"
                        focusable="false"
                        stroke="var(--sc-gold)"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        viewbox="0 0 24 24"
                      >
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path
                          d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"
                        ></path>
                      </svg>
                    </div>
                    <h3>Activity Journal</h3>
                    <p>Activity journal at the first session.</p>
                  </div>
                  <div class="reg-benefit-card">
                    <div class="icon-box">
                      <!-- Replaced with visual icon matching reference -->
                      <svg
                        aria-hidden="true"
                        fill="none"
                        focusable="false"
                        stroke="var(--sc-gold)"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        viewbox="0 0 24 24"
                      >
                        <path
                          d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"
                        ></path>
                        <line x1="7" x2="7.01" y1="7" y2="7"></line>
                      </svg>
                    </div>
                    <h3>Member Discounts</h3>
                    <p>20% off Radiant Tarbiyah books and courses.</p>
                    <p>
                      90% off Muhammad (PBUH): The Greatest Leader of All Time
                      by Dr. Adeel Zeerak (Rs.500 against the original cost of
                      $16 at Amazon).
                    </p>
                  </div>
                  <div class="reg-benefit-card">
                    <div class="icon-box">
                      <!-- Replaced with visual icon matching reference -->
                      <svg
                        aria-hidden="true"
                        fill="none"
                        focusable="false"
                        stroke="var(--sc-gold)"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        viewbox="0 0 24 24"
                      >
                        <path
                          d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                      </svg>
                    </div>
                    <h3>Priority Access to Monthly Sessions</h3>
                    <p>
                      Priority for monthly sessions before registration opens to
                      non-members, subject to availability.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- INFO STRIP -->
        <div class="reg-strip">
          <div class="container">
            <div class="reg-strip-grid">
              <div class="reg-strip-item">
                <div class="icon-box">
                  <svg
                    aria-hidden="true"
                    fill="none"
                    focusable="false"
                    stroke="var(--sc-gold)"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    viewbox="0 0 24 24"
                  >
                    <path d="M20 12v10H4V12"></path>
                    <path d="M2 7h20v5H2z"></path>
                    <path d="M12 22V7"></path>
                    <path
                      d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"
                    ></path>
                    <path
                      d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <h5>No Registration Fee</h5>
                  <p>Membership fee: None.</p>
                </div>
              </div>
              <div class="reg-strip-item">
                <div class="icon-box">
                  <svg
                    aria-hidden="true"
                    fill="none"
                    focusable="false"
                    stroke="var(--sc-gold)"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    viewbox="0 0 24 24"
                  >
                    <rect
                      height="18"
                      rx="2"
                      ry="2"
                      width="18"
                      x="3"
                      y="4"
                    ></rect>
                    <line x1="16" x2="16" y1="2" y2="6"></line>
                    <line x1="8" x2="8" y1="2" y2="6"></line>
                    <line x1="3" x2="21" y1="10" y2="10"></line>
                  </svg>
                </div>
                <div>
                  <h5>Register Once for the Year</h5>
                  <p>No repeat signup for future monthly sessions.</p>
                </div>
              </div>
              <div class="reg-strip-item">
                <div class="icon-box">
                  <svg
                    aria-hidden="true"
                    fill="none"
                    focusable="false"
                    stroke="var(--sc-gold)"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    viewbox="0 0 24 24"
                  >
                    <polygon
                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                    ></polygon>
                  </svg>
                </div>
                <div>
                  <h5>Priority Access</h5>
                  <p>Subject to availability.</p>
                </div>
              </div>
              <div class="reg-strip-item">
                <div class="icon-box">
                  <svg
                    aria-hidden="true"
                    fill="none"
                    focusable="false"
                    stroke="var(--sc-gold)"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    viewbox="0 0 24 24"
                  >
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                  </svg>
                </div>
                <div>
                  <h5>Monthly Sessions</h5>
                  <p>Engaging learning all year round</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- REGISTRATION PROCESS -->
        <section class="reg-process">
          <div class="container">
            <span class="reg-eyebrow"> REGISTRATION PROCESS </span>
            <h2>A simple process to get started.</h2>
            <div class="reg-process-steps">
              <div class="reg-step">
                <div class="reg-step-icon">
                  <span class="reg-step-num"> 01 </span>
                  <svg
                    aria-hidden="true"
                    fill="none"
                    focusable="false"
                    stroke="var(--sc-green)"
                    stroke-width="1.5"
                    viewbox="0 0 24 24"
                  >
                    <path
                      d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                    ></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" x2="8" y1="13" y2="13"></line>
                    <line x1="16" x2="8" y1="17" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                  </svg>
                </div>
                <div>
                  <h3>Complete the Form</h3>
                  <p>Fill in your child's details below.</p>
                </div>
                <div class="reg-step-line"></div>
              </div>
              <div class="reg-step">
                <div class="reg-step-icon">
                  <span class="reg-step-num"> 02 </span>
                  <svg
                    aria-hidden="true"
                    fill="none"
                    focusable="false"
                    stroke="var(--sc-green)"
                    stroke-width="1.5"
                    viewbox="0 0 24 24"
                  >
                    <path
                      d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                    ></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                </div>
                <div>
                  <h3>Receive Confirmation</h3>
                  <p>The team confirms registration after verification.</p>
                </div>
                <div class="reg-step-line"></div>
              </div>
              <div class="reg-step">
                <div class="reg-step-icon">
                  <span class="reg-step-num"> 03 </span>
                  <svg
                    aria-hidden="true"
                    fill="none"
                    focusable="false"
                    stroke="var(--sc-green)"
                    stroke-width="1.5"
                    viewbox="0 0 24 24"
                  >
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                  </svg>
                </div>
                <div>
                  <h3>Join Upcoming Sessions</h3>
                  <p>Attend once your place is confirmed.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- FORM SECTION -->
        <section class="reg-form-section" id="registration-form">
          <div class="container">
            <div class="reg-form-container">
              <div class="reg-form-header">
                <span class="reg-eyebrow"> MEMBERSHIP REGISTRATION </span>
                <h2>Register Your Child</h2>
                <p>Your child’s journey begins with a few details.</p>
                <p class="reg-form-notice" id="reg-form-notice">
                  Your details are securely submitted to Seerat Club, saved in the registration system and reviewed by the team.
                </p>
                <?php if($selectedEvent): ?>
                  <p class="reg-form-notice"><strong>Registering for:</strong> <?php echo e($selectedEvent->title); ?><?php echo e($selectedEvent->event_date ? ' · '.$selectedEvent->event_date->format('d M Y') : ''); ?></p>
                <?php endif; ?>
              </div>
              <!-- IMPORTANT: Update the field labels and options below to exactly match your Google Form -->
              <?php if(session('success')): ?>
                <div class="reg-form-notice" style="border-color:#b8d8c1;background:#eef8f0;color:#285c3b;margin-bottom:18px;">
                  <?php echo e(session('success')); ?>

                </div>
              <?php endif; ?>
              <?php if($errors->any()): ?>
                <div class="reg-form-notice" style="border-color:#e4b9b4;background:#fff1ef;color:#8b3a33;margin-bottom:18px;">
                  Please review the highlighted form fields and try again.
                </div>
              <?php endif; ?>
              <form
                action="<?php echo e(route('registration.store')); ?>" aria-describedby="reg-form-notice" id="sc-registration-form" method="POST"
              >
                <?php echo csrf_field(); ?>
                <?php if($selectedEvent): ?><input type="hidden" name="event_id" value="<?php echo e($selectedEvent->id); ?>"><?php endif; ?>
                <div class="reg-form-grid">
                  <fieldset class="reg-fieldset">
                    <legend class="reg-form-group-title">
                      <svg
                        aria-hidden="true"
                        fill="none"
                        focusable="false"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewbox="0 0 24 24"
                      >
                        <path
                          d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                      A. Parent / Guardian Details
                    </legend>
                    <div class="reg-form-row">
                      <div class="reg-field">
                        <label for="reg-field-1">
                          Parent / Guardian Full Name
                          <span> * </span>
                        </label>
                        <input
                          class="reg-input"
                          id="reg-field-1"
                          name="field_1"
                          placeholder="Enter full name"
                          required=""
                          type="text"
                          value="<?php echo e(old('field_1')); ?>"
                        />
                      </div>
                      <div class="reg-field">
                        <label for="reg-field-2">
                          Relationship to Child
                          <span> * </span>
                        </label>
                        <select
                          class="reg-select"
                          id="reg-field-2"
                          name="field_2"
                          required=""
                        >
                          <option value="">Select relationship</option>
                          <option <?php if(old('field_2')==='Father'): echo 'selected'; endif; ?>>Father</option>
                          <option <?php if(old('field_2')==='Mother'): echo 'selected'; endif; ?>>Mother</option>
                          <option <?php if(old('field_2')==='Guardian'): echo 'selected'; endif; ?>>Guardian</option>
                          <option <?php if(old('field_2')==='Other'): echo 'selected'; endif; ?>>Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="reg-form-row">
                      <div class="reg-field">
                        <label for="reg-field-3">
                          Email Address
                          <span> * </span>
                        </label>
                        <input
                          autocomplete="email"
                          class="reg-input"
                          id="reg-field-3"
                          name="field_3"
                          placeholder="name@example.com"
                          required=""
                          type="email"
                          value="<?php echo e(old('field_3')); ?>"
                        />
                      </div>
                      <div class="reg-field">
                        <label for="reg-field-4">
                          Phone Number
                          <span> * </span>
                        </label>
                        <input
                          autocomplete="tel"
                          class="reg-input"
                          id="reg-field-4"
                          inputmode="tel"
                          name="field_4"
                          placeholder="0334 1234567"
                          required=""
                          type="tel"
                          value="<?php echo e(old('field_4')); ?>"
                        />
                      </div>
                    </div>
                    <div class="reg-form-row full">
                      <div class="reg-field">
                        <label for="reg-field-5">
                          Alternative Contact Number
                        </label>
                        <input
                          autocomplete="tel"
                          class="reg-input"
                          id="reg-field-5"
                          inputmode="tel"
                          name="field_5"
                          placeholder="Optional"
                          type="tel"
                          value="<?php echo e(old('field_5')); ?>"
                        />
                      </div>
                    </div>
                    <!-- Section B -->
                  </fieldset>
                  <fieldset class="reg-fieldset">
                    <legend class="reg-form-group-title">
                      <svg
                        aria-hidden="true"
                        fill="none"
                        focusable="false"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewbox="0 0 24 24"
                      >
                        <path
                          d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                      </svg>
                      B. Child Information
                    </legend>
                    <div class="reg-form-row">
                      <div class="reg-field">
                        <label for="reg-field-6">
                          Child Full Name
                          <span> * </span>
                        </label>
                        <input
                          class="reg-input"
                          id="reg-field-6"
                          name="field_6"
                          placeholder="Enter child's full name"
                          required=""
                          type="text"
                          value="<?php echo e(old('field_6')); ?>"
                        />
                      </div>
                      <div class="reg-field">
                        <label for="reg-field-7">
                          Age Group
                          <span> * </span>
                        </label>
                        <select
                          class="reg-select"
                          id="reg-field-7"
                          name="field_7"
                          required=""
                        >
                          <option value="">Select age group</option>
                          <option <?php if(old('field_7')==='6 - 8 years'): echo 'selected'; endif; ?>>6 - 8 years</option>
                          <option <?php if(old('field_7')==='9 - 11 years'): echo 'selected'; endif; ?>>9 - 11 years</option>
                          <option <?php if(old('field_7')==='12 - 14 years'): echo 'selected'; endif; ?>>12 - 14 years</option>
                          <option <?php if(old('field_7')==='15 - 16 years'): echo 'selected'; endif; ?>>15 - 16 years</option>
                        </select>
                      </div>
                    </div>
                    <div class="reg-form-row">
                      <div class="reg-field">
                        <label for="reg-field-8"> Date of Birth </label>
                        <input
                          class="reg-input"
                          id="reg-field-8"
                          name="field_8"
                          type="date"
                          value="<?php echo e(old('field_8')); ?>"
                        />
                      </div>
                      <div class="reg-field">
                        <label for="reg-field-9"> Gender </label>
                        <select
                          class="reg-select"
                          id="reg-field-9"
                          name="field_9"
                        >
                          <option value="">Select gender</option>
                          <option <?php if(old('field_9')==='Male'): echo 'selected'; endif; ?>>Male</option>
                          <option <?php if(old('field_9')==='Female'): echo 'selected'; endif; ?>>Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="reg-field">
                      <label> Previous Participation in Seerat Club? </label>
                      <div class="reg-radio-group">
                        <label class="reg-radio-label">
                          <input
                            id="reg-field-10"
                            name="prev_participation"
                            type="radio"
                            value="yes"
                            <?php if(old('prev_participation')==='yes'): echo 'checked'; endif; ?>
                          />
                          Yes
                        </label>
                        <label class="reg-radio-label">
                          <input
                            id="reg-field-11"
                            name="prev_participation"
                            type="radio"
                            value="no"
                            <?php if(old('prev_participation')==='no'): echo 'checked'; endif; ?>
                          />
                          No
                        </label>
                        <label class="reg-radio-label">
                          <input
                            id="reg-field-12"
                            name="prev_participation"
                            type="radio"
                            value="first_time"
                            <?php if(old('prev_participation','first_time')==='first_time'): echo 'checked'; endif; ?>
                          />
                          First time
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset class="reg-fieldset">
                    <legend class="reg-form-group-title">
                      <svg
                        aria-hidden="true"
                        fill="none"
                        focusable="false"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewbox="0 0 24 24"
                      >
                        <path
                          d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                        ></path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>
                      C. Contact Details
                    </legend>
                    <div class="reg-form-row full">
                      <div class="reg-field">
                        <label for="reg-field-13">
                          Area / Location
                          <span> * </span>
                        </label>
                        <select
                          class="reg-select"
                          id="reg-field-13"
                          name="field_13"
                          required=""
                        >
                          <option value="">Select your area</option>
                          <option <?php if(old('field_13')==='DHA Phase 4'): echo 'selected'; endif; ?>>DHA Phase 4</option>
                          <option <?php if(old('field_13')==='DHA Phase 5'): echo 'selected'; endif; ?>>DHA Phase 5</option>
                          <option <?php if(old('field_13')==='DHA Phase 6'): echo 'selected'; endif; ?>>DHA Phase 6</option>
                          <option <?php if(old('field_13')==='Clifton'): echo 'selected'; endif; ?>>Clifton</option>
                          <option <?php if(old('field_13')==='Other'): echo 'selected'; endif; ?>>Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="reg-field">
                      <label> Preferred Communication Method </label>
                      <div class="reg-radio-group">
                        <label class="reg-radio-label">
                          <input
                            id="reg-field-14"
                            name="comm_method"
                            type="radio"
                            value="whatsapp"
                            <?php if(old('comm_method','whatsapp')==='whatsapp'): echo 'checked'; endif; ?>
                          />
                          WhatsApp
                        </label>
                        <label class="reg-radio-label">
                          <input
                            id="reg-field-15"
                            name="comm_method"
                            type="radio"
                            value="phone"
                            <?php if(old('comm_method')==='phone'): echo 'checked'; endif; ?>
                          />
                          Phone Call
                        </label>
                        <label class="reg-radio-label">
                          <input
                            id="reg-field-16"
                            name="comm_method"
                            type="radio"
                            value="email"
                            <?php if(old('comm_method')==='email'): echo 'checked'; endif; ?>
                          />
                          Email
                        </label>
                      </div>
                    </div>
                    <div class="reg-form-row">
                      <div class="reg-field">
                        <label for="reg-field-17">
                          Emergency Contact Name
                        </label>
                        <input
                          class="reg-input"
                          id="reg-field-17"
                          name="field_17"
                          placeholder="Name"
                          type="text"
                          value="<?php echo e(old('field_17')); ?>"
                        />
                      </div>
                      <div class="reg-field">
                        <label for="reg-field-18">
                          Emergency Contact Phone
                        </label>
                        <input
                          autocomplete="tel"
                          class="reg-input"
                          id="reg-field-18"
                          inputmode="tel"
                          name="field_18"
                          placeholder="Phone number"
                          type="tel"
                          value="<?php echo e(old('field_18')); ?>"
                        />
                      </div>
                    </div>
                    <!-- Section D -->
                  </fieldset>
                  <fieldset class="reg-fieldset">
                    <legend class="reg-form-group-title">
                      <svg
                        aria-hidden="true"
                        fill="none"
                        focusable="false"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewbox="0 0 24 24"
                      >
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" x2="12.01" y1="17" y2="17"></line>
                      </svg>
                      D. Membership Questions
                    </legend>
                    <div class="reg-form-row full">
                      <div class="reg-field">
                        <label for="reg-field-19">
                          How did you hear about Seerat Club?
                          <span> * </span>
                        </label>
                        <select
                          class="reg-select"
                          id="reg-field-19"
                          name="field_19"
                          required=""
                        >
                          <option value="">Select an option</option>
                          <option <?php if(old('field_19')==='Social Media'): echo 'selected'; endif; ?>>Social Media</option>
                          <option <?php if(old('field_19')==='Friend / Family'): echo 'selected'; endif; ?>>Friend / Family</option>
                          <option <?php if(old('field_19')==='Masjid'): echo 'selected'; endif; ?>>Masjid</option>
                          <option <?php if(old('field_19')==='Other'): echo 'selected'; endif; ?>>Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="reg-field">
                      <label>
                        What are you most looking forward to? (Select all that
                        apply)
                      </label>
                      <div class="reg-checkbox-group">
                        <label class="reg-checkbox-label">
                          <input
                            id="reg-field-20"
                            name="looking_forward[]"
                            type="checkbox"
                            value="learning"
                            <?php if(in_array('learning', old('looking_forward', []))): echo 'checked'; endif; ?>
                          />
                          Seerah learning
                        </label>
                        <label class="reg-checkbox-label">
                          <input
                            id="reg-field-21"
                            name="looking_forward[]"
                            type="checkbox"
                            value="activities"
                            <?php if(in_array('activities', old('looking_forward', []))): echo 'checked'; endif; ?>
                          />
                          Activities &amp; crafts
                        </label>
                        <label class="reg-checkbox-label">
                          <input
                            id="reg-field-22"
                            name="looking_forward[]"
                            type="checkbox"
                            value="friends"
                            <?php if(in_array('friends', old('looking_forward', []))): echo 'checked'; endif; ?>
                          />
                          Making new friends
                        </label>
                        <label class="reg-checkbox-label">
                          <input
                            id="reg-field-23"
                            name="looking_forward[]"
                            type="checkbox"
                            value="sessions"
                            <?php if(in_array('sessions', old('looking_forward', []))): echo 'checked'; endif; ?>
                          />
                          Monthly sessions
                        </label>
                        <label class="reg-checkbox-label">
                          <input
                            id="reg-field-24"
                            name="looking_forward[]"
                            type="checkbox"
                            value="events"
                            <?php if(in_array('events', old('looking_forward', []))): echo 'checked'; endif; ?>
                          />
                          Community events
                        </label>
                        <label class="reg-checkbox-label">
                          <input
                            id="reg-field-25"
                            name="looking_forward[]"
                            type="checkbox"
                            value="other"
                            <?php if(in_array('other', old('looking_forward', []))): echo 'checked'; endif; ?>
                          />
                          Other
                        </label>
                      </div>
                    </div>
                    <div class="reg-form-row full">
                      <div class="reg-field">
                        <label for="reg-field-26">
                          Additional Information / Notes
                        </label>
                        <textarea
                          class="reg-textarea"
                          id="reg-field-26"
                          name="field_26"
                          placeholder="Any additional information about your child (e.g. allergies, special needs, etc.)"
                          rows="4"
                        ><?php echo e(old('field_26')); ?></textarea>
                      </div>
                    </div>
                    <div class="reg-field">
                      <label>
                        Consent &amp; Agreement
                        <span> * </span>
                      </label>
                      <label class="reg-checkbox-label">
                        <input
                          id="reg-field-27"
                          name="field_27"
                          required=""
                          type="checkbox"
                          <?php if(old('field_27')): echo 'checked'; endif; ?>
                        />
                        <span>
                          I give permission for my child to participate in
                          Seerat Club activities and understand that photos or
                          videos may be taken for Seerat Club purposes.
                        </span>
                      </label>
                    </div>
                  </fieldset>
                </div>
                <div class="reg-form-submit-wrap">
                  <button class="reg-form-submit" type="submit">
                    Submit Registration
                    <span> → </span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- HELP SECTION -->
        <section class="reg-help">
          <div class="container">
            <div class="reg-help-grid">
              <div class="reg-help-intro">
                <svg
                  aria-hidden="true"
                  fill="none"
                  focusable="false"
                  stroke="currentColor"
                  stroke-width="1.5"
                  viewbox="0 0 24 24"
                >
                  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                  <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <div>
                  <h3>Need Help Registering?</h3>
                  <p>
                    We're here to help! If you have any questions or need
                    assistance, please reach out through any of the following
                    options.
                  </p>
                </div>
              </div>
              <div class="reg-help-links">
                <div class="reg-help-item">
                  <h3>
                    <svg
                      aria-hidden="true"
                      fill="none"
                      focusable="false"
                      stroke="currentColor"
                      stroke-width="2"
                      viewbox="0 0 24 24"
                    >
                      <path
                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"
                      ></path>
                    </svg>
                    Alternative Form
                  </h3>
                  <p>You can also fill out an alternative registration form.</p>
                  <a
                    href="https://forms.gle/G5MT6fxRm8hBhBEbA"
                    rel="noopener"
                    target="_blank"
                  >
                    Open official form ↗
                  </a>
                </div>
                <div class="reg-help-item">
                  <h3>
                    <svg
                      aria-hidden="true"
                      fill="none"
                      focusable="false"
                      stroke="currentColor"
                      stroke-width="2"
                      viewbox="0 0 24 24"
                    >
                      <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                      ></path>
                    </svg>
                    Contact Us
                  </h3>
                  <p>
                    0334-3541413
                    <br />
                    0333-2225425
                  </p>
                  <a href="<?php echo e(route('Home.contact')); ?>"> We're happy to assist you </a>
                </div>
                <div class="reg-help-item">
                  <h3>
                    <svg
                      aria-hidden="true"
                      fill="none"
                      focusable="false"
                      stroke="currentColor"
                      stroke-width="2"
                      viewbox="0 0 24 24"
                    >
                      <path
                        d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                      ></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    In Person
                  </h3>
                  <p>
                    Forms are also available at
                    <br />
                    <strong> Masjid-e-Shafqat (Ph 4, DHA) </strong>
                  </p>
                  <a href="<?php echo e(route('Home.contact')); ?>"> Contact us → </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- VIDEO SECTION -->
        <section class="reg-video">
          <div class="container">
            <div class="reg-video-header">
              <div>
                <h2>See Seerat Club in Action</h2>
                <p>
                  Moments of learning, friendship and faith from our monthly
                  sessions.
                </p>
              </div>
              <a
                href="https://www.youtube.com/@SeeratClubForKids"
                target="_blank"
              >
                More Videos →
              </a>
            </div>
            <div class="reg-video-grid">
              <a
                aria-label="Watch Seerat Club registration video 1 on YouTube"
                class="reg-video-card"
                href="https://www.youtube.com/watch?v=RE0TdycsdlI"
                rel="noopener noreferrer"
                target="_blank"
              >
                <img
                  alt=""
                  decoding="async"
                  loading="lazy"
                  src="https://i.ytimg.com/vi/RE0TdycsdlI/hqdefault.jpg"
                />
                <div class="reg-video-play">
                  <svg
                    aria-hidden="true"
                    fill="currentColor"
                    focusable="false"
                    viewbox="0 0 24 24"
                  >
                    <path d="m9 5 11 7-11 7Z"></path>
                  </svg>
                </div>
                <div class="reg-video-info">
                  <span class="reg-video-title"> Seerat Club in action </span>
                  <span class="reg-video-duration"> Watch video 01 ↗ </span>
                </div>
              </a>
              <a
                aria-label="Watch Seerat Club registration video 2 on YouTube"
                class="reg-video-card"
                href="https://www.youtube.com/watch?v=lU0z3_vfXTg"
                rel="noopener noreferrer"
                target="_blank"
              >
                <img
                  alt=""
                  decoding="async"
                  loading="lazy"
                  src="https://i.ytimg.com/vi/lU0z3_vfXTg/hqdefault.jpg"
                />
                <div class="reg-video-play">
                  <svg
                    aria-hidden="true"
                    fill="currentColor"
                    focusable="false"
                    viewbox="0 0 24 24"
                  >
                    <path d="m9 5 11 7-11 7Z"></path>
                  </svg>
                </div>
                <div class="reg-video-info">
                  <span class="reg-video-title"> Seerat Club in action </span>
                  <span class="reg-video-duration"> Watch video 02 ↗ </span>
                </div>
              </a>
              <a
                aria-label="Watch Seerat Club registration video 3 on YouTube"
                class="reg-video-card"
                href="https://www.youtube.com/watch?v=XQ-JtsOfX9s"
                rel="noopener noreferrer"
                target="_blank"
              >
                <img
                  alt=""
                  decoding="async"
                  loading="lazy"
                  src="https://i.ytimg.com/vi/XQ-JtsOfX9s/hqdefault.jpg"
                />
                <div class="reg-video-play">
                  <svg
                    aria-hidden="true"
                    fill="currentColor"
                    focusable="false"
                    viewbox="0 0 24 24"
                  >
                    <path d="m9 5 11 7-11 7Z"></path>
                  </svg>
                </div>
                <div class="reg-video-info">
                  <span class="reg-video-title"> Seerat Club in action </span>
                  <span class="reg-video-duration"> Watch video 03 ↗ </span>
                </div>
              </a>
              <a
                aria-label="Watch Seerat Club registration video 4 on YouTube"
                class="reg-video-card"
                href="https://www.youtube.com/watch?v=htx0206TjJ4"
                rel="noopener noreferrer"
                target="_blank"
              >
                <img
                  alt=""
                  decoding="async"
                  loading="lazy"
                  src="https://i.ytimg.com/vi/htx0206TjJ4/hqdefault.jpg"
                />
                <div class="reg-video-play">
                  <svg
                    aria-hidden="true"
                    fill="currentColor"
                    focusable="false"
                    viewbox="0 0 24 24"
                  >
                    <path d="m9 5 11 7-11 7Z"></path>
                  </svg>
                </div>
                <div class="reg-video-info">
                  <span class="reg-video-title"> Seerat Club in action </span>
                  <span class="reg-video-duration"> Watch video 04 ↗ </span>
                </div>
              </a>
            </div>
            <p class="reg-more-conversations">
              More from Seerat Club:
              <a
                href="https://www.youtube.com/watch?v=UWEw7uQhOcA"
                rel="noopener"
                target="_blank"
              >
                Watch a conversation ↗
              </a>
              <a
                href="https://www.youtube.com/watch?v=n4cmPgryveU"
                rel="noopener"
                target="_blank"
              >
                Discover the initiative ↗
              </a>
            </p>
          </div>
        </section>


        
        <!-- VOLUNTEER CTA -->
        <section class="reg-cta">
          <div class="container">
            <div class="reg-cta-inner">
              <div>
                <h3>Want to support the journey?</h3>
                <p>
                  Help us create more opportunities for our children to learn,
                  grow and connect through the Seerah.
                </p>
              </div>
              <a class="reg-btn" href="<?php echo e(route('Home.volunteer')); ?>">
                Explore Volunteering →
              </a>
            </div>
          </div>
        </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/Home/registration.blade.php ENDPATH**/ ?>