@extends("Layout.layout")
@section('title', 'Volunteer · Seerat Club for Kids')
@section("Content")
@php
  $hero = $pageContent->get('hero');
  $heroImage = $hero?->image_path ?: 'assets/images/seerat-pdf/page-25-img-1.jpeg';
  $heroImageUrl = str_starts_with($heroImage, 'http://') || str_starts_with($heroImage, 'https://') ? $heroImage : (str_starts_with($heroImage, 'assets/') || str_starts_with($heroImage, 'storage/') ? asset($heroImage) : asset('storage/'.$heroImage));
@endphp


  <!-- Responsive Header -->
      <div class="ac-site ac-page sc-volunteer-page">
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
              <a href="{{ route('Home.welcome') }}"> Home </a>
              <span> / </span>
              <span> Volunteer </span>
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
                  {{ $hero?->metadata['eyebrow'] ?? 'SEERAT CLUB · KARACHI' }}
                </span>
                <h1>
                  {{ $hero?->metadata['title_prefix'] ?? 'Help children learn,' }}
                  <br />
                  <em> {{ $hero?->metadata['title_emphasis'] ?? 'create and belong.' }} </em>
                </h1>
                <p>
                  {{ $hero?->subtitle ?? 'Sponsor a child, contribute ideas or volunteer with Seerat Club.' }}
                </p>
                <div class="sc-volunteer-actions">
                  <a class="ac-btn" href="#membership-form">
                    Become a volunteer
                    <span aria-hidden="true"> → </span>
                  </a>
                  <a class="ac-textlink" href="#support-options">
                    Ways to support ↗
                  </a>
                </div>
              </div>
              <figure class="sc-page-photo">
                <img
                  alt="A Seerat Club session"
                  height="600"
                  src="{{ asset('assets/images/academy/page-21-img-1.webp') }}"
                  width="1000"
                />
                <figcaption>
                  Your time. Your ideas. A shared purpose.
                </figcaption>
              </figure>
            </div>
          </div>
        </section>
        <section class="ac-section sc-svg-section" id="support-options">
          <div class="ac-container">
            <div class="ac-heading">
              <span class="ac-eyebrow"> SUPPORT THE JOURNEY </span>
              <h2>Your support. A shared purpose.</h2>
              <p>
                Seerat Club is committed to making its programs accessible to
                all children, regardless of their financial background. We
                invite you to partner with us in the following ways:
              </p>
            </div>
            <div class="ac-feature-grid">
              <article class="ac-card">
                <div class="ac-icon">
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
                </div>
                <h3>Sponsor a Child</h3>
                <p>
                  Help cover the cost for children who cannot afford to
                  participate, ensuring they also experience the joy of learning
                  about our Prophet (PBUH).
                </p>
                <a class="ac-textlink" href="#membership-form">
                  Get involved
                  <span aria-hidden="true"> → </span>
                </a>
              </article>
              <article class="ac-card">
                <div class="ac-icon">
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
                      d="m4 22 6-5 6 5-6 5-6-5Zm14-1 6-5 5 4-6 6-5-5ZM9 6h10v10H9V6Z"
                    ></path>
                    <path d="m20 4 6 5m-6 0 6-5"></path>
                  </svg>
                </div>
                <h3>Contribute Ideas</h3>
                <p>
                  Share your creative ideas for content and activities to
                  enhance our sessions.
                </p>
                <a class="ac-textlink" href="#membership-form">
                  Get involved
                  <span aria-hidden="true"> → </span>
                </a>
              </article>
              <article class="ac-card">
                <div class="ac-icon">
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
                      d="M5 28V14h4v14m14 0V14h4v14M3 28h26M9 15c0-5 7-8 7-8s7 3 7 8H9Zm4 13v-7a3 3 0 0 1 6 0v7M16 3v4M5 10v1m22-1v1"
                    ></path>
                  </svg>
                </div>
                <h3>Volunteer</h3>
                <p>Your time and expertise can help shape young minds.</p>
                <a class="ac-textlink" href="#membership-form">
                  Get involved
                  <span aria-hidden="true"> → </span>
                </a>
              </article>
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
            <div class="ac-split">
              <img
                alt="Volunteers and children learning together in Shafqat Masjid"
                class="ac-rounded"
                decoding="async"
                loading="lazy"
                src="{{ asset('assets/images/academy/page-25-img-1.webp') }}"
              />
              <div>
                <div class="ac-heading">
                  <span class="ac-eyebrow"> BE PART OF THE COMMUNITY </span>
                  <h2>
                    A little of your time.
                    <br />
                    A meaningful difference.
                  </h2>
                </div>
                <p>
                  Support a child, share an idea or join the volunteer team
                  using the form below.
                </p>
                <a class="ac-btn" href="#membership-form">
                  Join as a volunteer
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
        <!-- Volunteer Form -->
        <div class="reg-page-wrap">
          <section
            aria-labelledby="volunteer-form-title"
            class="reg-form-section"
            id="membership-form"
          >
            <div class="container">
              <div class="reg-form-container">
                <div class="reg-form-header">
                  <span class="reg-eyebrow"> BE PART OF THE JOURNEY </span>
                  <h2 id="volunteer-form-title">Support Seerat Club</h2>
                  <p>Tell us how you would like to contribute.</p>
                  <p class="reg-form-notice" id="volunteer-notice">
                    Share your details below. Your request will be securely saved and reviewed by the Seerat Club team.
                  </p>
                  @if(session('success'))
                    <div class="reg-form-feedback" style="display:block" role="status">{{ session('success') }}</div>
                  @endif
                  @if($errors->any())
                    <div class="reg-form-feedback" style="display:block" role="alert">Please check the highlighted fields and submit again.</div>
                  @endif
                </div>
                <form
                  action="{{ route('volunteer.store') }}"
                  aria-describedby="volunteer-notice"
                  id="sc-volunteer-form"
                  method="post"
                >
                  @csrf
                  <div class="reg-form-grid">
                    <fieldset class="reg-fieldset">
                      <legend class="reg-form-group-title">
                        01 · Your details
                      </legend>
                      <div class="reg-form-row full">
                        <div class="reg-field">
                          <label for="vol-name">
                            Full name
                            <span> * </span>
                          </label>
                          <input
                            autocomplete="name"
                            class="reg-input"
                            id="vol-name"
                            maxlength="120"
                            name="full_name"
                            value="{{ old('full_name') }}"
                            placeholder="Your full name"
                            required=""
                          />
                        </div>
                      </div>
                      <div class="reg-form-row full">
                        <div class="reg-field">
                          <label for="vol-phone">
                            Contact number
                            <span> * </span>
                          </label>
                          <input
                            autocomplete="tel"
                            class="reg-input"
                            id="vol-phone"
                            maxlength="30"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="Your phone number"
                            required=""
                            type="tel"
                          />
                        </div>
                      </div>
                      <div class="reg-form-row full">
                        <div class="reg-field">
                          <label for="vol-email">
                            Email address
                            <span> (optional) </span>
                          </label>
                          <input
                            autocomplete="email"
                            class="reg-input"
                            id="vol-email"
                            maxlength="254"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="you@example.com"
                            type="email"
                          />
                        </div>
                      </div>
                    </fieldset>
                    <fieldset class="reg-fieldset">
                      <legend class="reg-form-group-title">
                        02 · How you can help
                      </legend>
                      <div class="reg-field">
                        <label for="vol-interest">
                          I would like to
                          <span> * </span>
                        </label>
                        <select
                          aria-describedby="vol-interest-help"
                          class="reg-select"
                          id="vol-interest"
                          name="support_type"
                          required=""
                        >
                          <option value="">Choose how to contribute</option>
                          <option value="sponsor" @selected(old('support_type')==='sponsor')>Sponsor a Child</option>
                          <option value="ideas" @selected(old('support_type')==='ideas')>Contribute Ideas</option>
                          <option value="volunteer" @selected(old('support_type')==='volunteer')>Volunteer</option>
                        </select>
                        <p
                          aria-live="polite"
                          class="vol-field-help"
                          id="vol-interest-help"
                        >
                          Choose the way you would like to support Seerat Club.
                        </p>
                      </div>
                      <div class="reg-form-row full">
                        <div class="reg-field">
                          <label for="vol-message">
                            Your ideas, skills or message
                            <span> (optional) </span>
                          </label>
                          <textarea
                            class="reg-textarea"
                            id="vol-message"
                            maxlength="2000"
                            name="message"
                            placeholder="Tell us how you would like to help."
                            rows="6"
                          >{{ old('message') }}</textarea>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="reg-form-submit-wrap">
                    <button class="reg-form-submit" type="submit">
                      Submit Volunteer Interest
                      <span aria-hidden="true"> → </span>
                    </button>
                  </div>
                  <div
                    class="reg-form-feedback"
                    hidden=""
                    id="vol-feedback"
                    role="status"
                  ></div>
                </form>
              </div>
            </div>
          </section>
        </div>
        <!-- Volunteer Help -->
        <section class="ac-section sc-volunteer-help">
          <div class="ac-container sc-volunteer-help-card">
            <div>
              <span class="ac-eyebrow"> LET’S CONNECT </span>
              <h2>Have a question?</h2>
              <p>Contact Seerat Club to discuss how you can help.</p>
            </div>
            <div class="sc-volunteer-actions">
              <a class="ac-btn" href="tel:+923332225425"> Call 0333 2225425 </a>
              <a class="ac-textlink" href="{{ route('Home.contact') }}"> Contact us ↗ </a>
            </div>
          </div>
        </section>
      </div>

@endsection