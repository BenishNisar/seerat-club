<?php $__env->startSection('title', 'Girls Registration · Seerat Club for Kids'); ?>
<?php $__env->startSection("Content"); ?>
<?php
  $hero = $pageContent->get('hero');
  $heroImage = $hero?->image_path ?: 'assets/images/seerat-pdf/page-26-img-2.jpeg';
  $heroImageUrl = str_starts_with($heroImage, 'http://') || str_starts_with($heroImage, 'https://') ? $heroImage : (str_starts_with($heroImage, 'assets/') || str_starts_with($heroImage, 'storage/') ? asset($heroImage) : asset('storage/'.$heroImage));
?>


      <div class="ac-site ac-page sc-girls-page">
        <!-- Hero Section -->
        <section class="ac-masthead">
          <div aria-hidden="true" class="sc-hero-svg-decor">
            <svg
              class="sc-hero-arch-svg"
              fill="none"
              viewbox="0 0 520 520"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="260"
                cy="260"
                opacity="0.18"
                r="220"
                stroke="#c9a24d"
                stroke-dasharray="6 8"
                stroke-width="1.5"
              ></circle>
              <circle
                cx="260"
                cy="260"
                opacity="0.12"
                r="175"
                stroke="#e8cb82"
                stroke-width="1.2"
              ></circle>
              <path
                d="M90 460V230C90 128 166 56 260 24C354 56 430 128 430 230V460"
                opacity="0.22"
                stroke="#c9a24d"
                stroke-width="2"
              ></path>
              <path
                d="M260 64L268 84L288 92L268 100L260 120L252 100L232 92L252 84Z"
                fill="#e8cb82"
                opacity="0.35"
              ></path>
            </svg>
          </div>
          <div class="ac-container">
            <nav aria-label="Breadcrumb" class="ac-breadcrumb">
              <a href="<?php echo e(route('Home.welcome')); ?>"> Home </a>
              <span> / </span>
              <span> Girls </span>
            </nav>
            <div class="ac-masthead-grid">
              <div>
                <span class="ac-eyebrow">
                  <svg
                    aria-hidden="true"
                    class="sc-kicker-svg"
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.8"
                    viewbox="0 0 24 24"
                  >
                    <path
                      d="M4 6c3-1 6-1 8 1 2-2 5-2 8-1v13c-3-1-6-1-8 1-2-2-5-2-8-1Z"
                    ></path>
                    <path d="M12 7v13"></path>
                  </svg>
                  <?php echo e($hero?->metadata['eyebrow'] ?? 'SEERAT CLUB · KARACHI'); ?>

                </span>
                <h1>
                  <?php echo e($hero?->metadata['title_prefix'] ?? 'Begin Her'); ?>

                  <br />
                  <em> <?php echo e($hero?->metadata['title_emphasis'] ?? 'Seerat Journey.'); ?> </em>
                </h1>
                <p>
                  <?php echo e($hero?->subtitle ?? 'Join Seerat Club for a full year of engaging Islamic learning and activities.'); ?>

                </p>
                <div class="sc-girls-actions">
                  <a class="ac-btn" href="#registration-form">
                    Start registration
                    <span aria-hidden="true"> → </span>
                  </a>
                  <a class="ac-textlink" href="#girls-membership">
                    Explore membership ↗
                  </a>
                </div>
              </div>
              <figure class="sc-page-photo">
                <img
                  alt="Shafqat Masjid, Seerat Club’s venue in Karachi"
                  height="600"
                  src="<?php echo e($heroImageUrl); ?>"
                  width="1000"
                />
                <figcaption>Learning, faith and belonging.</figcaption>
              </figure>
            </div>
          </div>
        </section>
        <section class="ac-section sc-svg-section" id="girls-membership">
          <div class="ac-container">
            <div class="ac-membership">
              <div>
                <div class="ac-heading">
                  <span class="ac-eyebrow">
                    GIRLS · SEERAT CLUB MEMBERSHIP
                  </span>
                  <h2>
                    Learning, faith
                    <br />
                    and belonging.
                  </h2>
                </div>
                <p>
                  Join Seerat Club for a full year of Islamic learning and
                  activities. Register once, with a nominal fee for each monthly
                  session thereafter.
                </p>
                <p>
                  Registered members receive priority before sessions open to
                  nonmembers, subject to availability.
                </p>
                <a class="ac-btn" href="#registration-form">
                  Girls membership form
                  <svg
                    aria-hidden="true"
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    viewbox="0 0 32 32"
                  >
                    <path d="M7 16h18m-7-7 7 7-7 7"></path>
                  </svg>
                </a>
              </div>
              <aside class="ac-fee ac-sage">
                <span> ANNUAL MEMBERSHIP &amp; FIRST SESSION </span>
                <strong> Rs. 500 </strong>
                <p>Includes annual membership and the first session.</p>
              </aside>
            </div>
          </div>
          <div aria-hidden="true" class="sc-section-seal sc-inner-seal">
            <svg
              aria-hidden="true"
              class="sc-section-icon"
              fill="none"
              focusable="false"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="1.5"
              viewbox="0 0 24 24"
            >
              <path
                d="M4 6c3-1 6-1 8 1 2-2 5-2 8-1v13c-3-1-6-1-8 1-2-2-5-2-8-1Z"
              ></path>
              <path d="M12 7v13M7 10h2m-2 4h2m6-4h2m-2 4h2"></path>
            </svg>
          </div>
        </section>
        <section class="ac-section sc-svg-section ac-soft">
          <div class="ac-container">
            <div class="ac-inclusion">
              <svg
                aria-hidden="true"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                viewbox="0 0 32 32"
              >
                <path
                  d="M16 25S5 18 5 11a6 6 0 0 1 11-3 6 6 0 0 1 11 3c0 7-11 14-11 14Z"
                ></path>
                <path d="m11 15 3 3 7-7"></path>
              </svg>
              <div>
                <h2>No Child Left Behind!</h2>
                <p>
                  If you are unable to pay the registration fee, you are welcome
                  to register free of cost. Participation is what matters most.
                </p>
                <p>
                  For details, call
                  <a href="tel:+923332225425"> 0333 2225425 </a>
                  .
                </p>
              </div>
            </div>
          </div>
          <div aria-hidden="true" class="sc-section-seal sc-inner-seal">
            <svg
              aria-hidden="true"
              class="sc-section-icon"
              fill="none"
              focusable="false"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="1.5"
              viewbox="0 0 24 24"
            >
              <path
                d="M4 20h16M6 20v-7c0-3 2.5-5.5 6-7 3.5 1.5 6 4 6 7v7"
              ></path>
              <path d="M10 20v-4a2 2 0 0 1 4 0v4M12 3v3"></path>
            </svg>
          </div>
        </section>
        <!-- Seerat Club Video -->
        <div class="reg-page-wrap">
          <section class="reg-form-section" id="registration-form">
            <div class="container">
              <div class="reg-form-container">
                <div class="reg-form-header">
                  <span class="reg-eyebrow"> MEMBERSHIP REGISTRATION </span>
                  <h2>Register Your Child</h2>
                  <p>Your child’s journey begins with a few details.</p>
                  <p class="reg-form-notice" id="reg-form-notice">
                    Complete the form below and your registration will be securely saved. For assistance, contact
                    Seerat Club at <?php echo e($siteSettings['secondary_phone'] ?? '0333 2225425'); ?> for registration assistance.
                  </p>
                </div>
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
                  action="<?php echo e(route('girls.store')); ?>" aria-describedby="reg-form-notice" id="sc-registration-form" method="POST"
                >
                  <?php echo csrf_field(); ?>
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
                              <?php if(old('prev_participation','first_time')==='yes'): echo 'checked'; endif; ?>
                            />
                            Yes
                          </label>
                          <label class="reg-radio-label">
                            <input
                              id="reg-field-11"
                              name="prev_participation"
                              type="radio"
                              value="no"
                              <?php if(old('prev_participation','first_time')==='no'): echo 'checked'; endif; ?>
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
        </div>
        <!-- HELP SECTION -->
        <div class="reg-page-wrap">
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
                    <path
                      d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"
                    ></path>
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
                    <h3>Registration Assistance</h3>
                    <p>Contact Seerat Club for help registering your child.</p>
                    <a href="tel:+923332225425" rel="noopener">
                      Call 0333 2225425
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
        </div>
        <section
          aria-labelledby="girls-video-title"
          class="ac-section sc-girls-video-section"
        >
          <div class="ac-container sc-girls-video-grid">
            <div class="ac-heading">
              <span class="ac-eyebrow"> SEERAT CLUB IN ACTION </span>
              <h2 id="girls-video-title">
                Discover the
                <br />
                <em> Seerat Club experience. </em>
              </h2>
              <a
                class="ac-textlink"
                href="https://www.youtube.com/watch?v=n4cmPgryveU"
                rel="noopener noreferrer"
                target="_blank"
              >
                Watch on YouTube ↗
              </a>
            </div>
            <div class="sc-girls-video">
              <iframe
                allow="
                  accelerometer;
                  autoplay;
                  clipboard-write;
                  encrypted-media;
                  gyroscope;
                  picture-in-picture;
                  web-share;
                "
                allowfullscreen=""
                loading="lazy"
                src="https://www.youtube.com/embed/n4cmPgryveU"
                title="Seerat Club video from the official Girls page"
              >
              </iframe>
            </div>
          </div>
        </section>
        <!-- Registration Help -->
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("Layout.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Seerat-Club\resources\views/Home/girls.blade.php ENDPATH**/ ?>