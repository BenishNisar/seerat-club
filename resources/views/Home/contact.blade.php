@extends("Layout.layout")
@section('title', 'Contact Seerat Club for Kids')
@section("Content")
@php($hero = $pageContent->get('hero'))

    <style>
      .sc-contact-page{background:#f6f3ea;padding:76px 0}
      .sc-contact-wrap{width:min(1160px,calc(100% - 36px));margin:auto;display:grid;grid-template-columns:.8fr 1.2fr;gap:42px;align-items:start}
      .sc-contact-copy .eyebrow{display:inline-block;color:#8c7138;font-weight:800;font-size:12px;letter-spacing:.12em;margin-bottom:14px}
      .sc-contact-copy h1{font-family:Georgia,serif;color:#173b31;font-size:clamp(38px,6vw,66px);line-height:1.02;margin:0 0 18px}
      .sc-contact-copy p{color:#586761;line-height:1.8}
      .sc-contact-card{background:#fff;border:1px solid #dce3dd;border-radius:24px;padding:28px;box-shadow:0 20px 55px rgba(22,54,46,.08)}
      .sc-contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px}.sc-contact-field.full{grid-column:1/-1}
      .sc-contact-field label{display:block;font-size:12px;font-weight:800;color:#405149;margin-bottom:7px}.sc-contact-field input,.sc-contact-field textarea{width:100%;border:1px solid #cfd8d1;border-radius:12px;padding:12px 13px;font:inherit}.sc-contact-field textarea{min-height:150px;resize:vertical}
      .sc-contact-submit{border:0;border-radius:12px;background:#173b31;color:#fff;font-weight:800;padding:12px 18px;cursor:pointer}.sc-contact-alert{padding:12px 14px;border-radius:12px;margin-bottom:16px}
      @media(max-width:760px){.sc-contact-wrap{grid-template-columns:1fr}.sc-contact-grid{grid-template-columns:1fr}.sc-contact-field.full{grid-column:auto}}
    </style>
    <section class="sc-contact-page" aria-labelledby="sc-contact-title">
      <div class="sc-contact-wrap">
        <div class="sc-contact-copy">
          <span class="eyebrow">{{ $hero?->metadata['eyebrow'] ?? 'GET IN TOUCH' }}</span>
          <h1 id="sc-contact-title">{{ $hero?->title ?? 'We would love to hear from you.' }}</h1>
          <p>{{ $hero?->subtitle ?? 'Questions about Seerat Club, registrations, volunteering or upcoming sessions? Send us a message and the team will respond as soon as possible.' }}</p>
          <p><strong>{{ $siteSettings['phone'] ?? '0334 3541413' }}</strong><br>{{ $siteSettings['address'] ?? 'Shafqat Masjid, 9th Gizri Lane, Phase 4, DHA, Karachi' }}</p>
        </div>
        <div class="sc-contact-card">
          @if(session('success'))<div class="sc-contact-alert" style="background:#edf7ef;color:#26603b">{{ session('success') }}</div>@endif
          @if($errors->any())<div class="sc-contact-alert" style="background:#fff0ee;color:#8c3932">{{ $errors->first() }}</div>@endif
          <form id="sc-contact-form" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="sc-contact-grid">
              <div class="sc-contact-field"><label for="contact-name">Name *</label><input id="contact-name" name="name" value="{{ old('name') }}" required></div>
              <div class="sc-contact-field"><label for="contact-email">Email *</label><input id="contact-email" name="email" type="email" value="{{ old('email') }}" required></div>
              <div class="sc-contact-field"><label for="contact-phone">Phone</label><input id="contact-phone" name="phone" value="{{ old('phone') }}"></div>
              <div class="sc-contact-field"><label for="contact-subject">Subject</label><input id="contact-subject" name="subject" value="{{ old('subject') }}"></div>
              <div class="sc-contact-field full"><label for="contact-message">Message *</label><textarea id="contact-message" name="message" required>{{ old('message') }}</textarea></div>
              <div class="sc-contact-field full"><button class="sc-contact-submit" type="submit">Send message</button></div>
            </div>
          </form>
        </div>
      </div>
    </section>


    <!-- Masjid Experience Section -->
      <section aria-labelledby="sm-heading-title" id="sc-masjid-experience">
        <div class="sm-container">
          <!-- SECTION HEADING -->
          <div class="sm-heading">
            <span class="sm-badge">
              <svg
                aria-hidden="true"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.6"
                viewbox="0 0 24 24"
              >
                <path d="M4 21V11h16v10"></path>
                <path d="M8 21v-5a4 4 0 0 1 8 0v5"></path>
                <path d="M7 11c0-4 5-7 5-7s5 3 5 7"></path>
                <path d="M12 4V1M2 21h20"></path>
              </svg>
              Faith · Friendship · Community
            </span>
            <h2 id="sm-heading-title">
              A journey through Seerah.
              <br />
              <span> A connection with the Masjid. </span>
            </h2>
            <p>
              Interactive stories, activities and reflection help children
              understand the Seerah and apply its lessons in daily life, while
              strengthening their relationship with the Masjid.
            </p>
          </div>
          <div class="sm-layout">
            <!-- LEFT CARDS -->
            <div class="sm-column">
              <article class="sm-card">
                <div class="sm-card-top">
                  <span class="sm-icon">
                    <svg aria-hidden="true" viewbox="0 0 24 24">
                      <path
                        d="M3 5c3-1 6-1 9 1 3-2 6-2 9-1v14c-3-1-6-1-9 1-3-2-6-2-9-1Z"
                      ></path>
                      <path d="M12 6v14M6 9h3M15 9h3"></path>
                    </svg>
                  </span>
                  <span class="sm-number"> 01 </span>
                </div>
                <h3>
                  My Prophet
                  <span class="sc-salawat" lang="ar"> ﷺ </span>
                  , My Hero
                </h3>
                <p>
                  Learning about the life of Prophet Muhammad
                  <span class="sc-salawat" lang="ar"> ﷺ </span>
                  through interactive stories, activities and reflection.
                </p>
              </article>
              <article class="sm-card">
                <div class="sm-card-top">
                  <span class="sm-icon">
                    <svg aria-hidden="true" viewbox="0 0 24 24">
                      <path d="m12 3 9 5-9 5-9-5 9-5Z"></path>
                      <path d="M6 10v6c3 3 9 3 12 0v-6M21 8v8"></path>
                    </svg>
                  </span>
                  <span class="sm-number"> 02 </span>
                </div>
                <h3>Scholar Supervision</h3>
                <p>
                  Conducted under the guidance and supervision of Maulana
                  Muhammad Owais.
                </p>
              </article>
              <article class="sm-card">
                <div class="sm-card-top">
                  <span class="sm-icon">
                    <svg aria-hidden="true" viewbox="0 0 24 24">
                      <rect height="16" rx="3" width="18" x="3" y="5"></rect>
                      <path d="M7 3v4M17 3v4M3 11h18"></path>
                      <path d="m9 16 2 2 4-4"></path>
                    </svg>
                  </span>
                  <span class="sm-number"> 03 </span>
                </div>
                <h3>Monthly Experiences</h3>
                <p>
                  A session planned once a month, with storytelling, practical
                  activities and group discussions.
                </p>
              </article>
            </div>
            <!-- CENTRE: IMAGE, MAP & ADDRESS INSIDE ONE CIRCLE -->
            <div class="sm-centre">
              <div class="sm-location-orb">
                <img
                  alt="Shafqat Masjid, the venue for Seerat Club activities"
                  class="sm-orb-background"
                  decoding="async"
                  height="600"
                  loading="lazy"
                  src="{{ asset('assets/images/seerat-pdf/page-26-img-2.jpeg') }}"
                  width="600"
                />
                <div class="sm-orb-content">
                  <span class="sm-orb-label"> Our community, our Masjid </span>
                  <h3>Shafqat Masjid</h3>
                  <div class="sm-orb-map">
                    <iframe
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      src="https://maps.google.com/maps?q=Shafqat%20Masjid%209th%20Gizri%20Lane%20Phase%204%20DHA%20Karachi&amp;z=15&amp;output=embed"
                      title="Map showing Shafqat Masjid in DHA Karachi"
                    >
                    </iframe>
                  </div>
                  <p>
                    9th Gizri Lane, Phase 4,
                    <br />
                    DHA, Karachi
                  </p>
                  <a
                    aria-label="Get directions to Shafqat Masjid on Google Maps, opens in a new tab"
                    class="sm-orb-link"
                    href="https://www.google.com/maps/search/?api=1&amp;query=Shafqat+Masjid+9th+Gizri+Lane+Phase+4+DHA+Karachi"
                    rel="noopener noreferrer"
                    target="_blank"
                  >
                    Get directions
                    <span aria-hidden="true"> ↗ </span>
                  </a>
                </div>
              </div>
            </div>
            <!-- RIGHT CARDS -->
            <div class="sm-column">
              <article class="sm-card">
                <div class="sm-card-top">
                  <span class="sm-icon">
                    <svg aria-hidden="true" viewbox="0 0 24 24">
                      <rect height="8" rx="1" width="8" x="3" y="12"></rect>
                      <rect height="8" rx="1" width="8" x="13" y="12"></rect>
                      <path d="m12 2 5 8H7l5-8Z"></path>
                    </svg>
                  </span>
                  <span class="sm-number"> 04 </span>
                </div>
                <h3>Learning Through Activity</h3>
                <p>
                  From a life-size world map puzzle to writing letters, children
                  take an active part in the learning.
                </p>
              </article>
              <article class="sm-card">
                <div class="sm-card-top">
                  <span class="sm-icon">
                    <svg aria-hidden="true" viewbox="0 0 24 24">
                      <path
                        d="M20.5 4.5a5 5 0 0 0-7 0L12 6l-1.5-1.5a5 5 0 0 0-7 7L12 20l8.5-8.5a5 5 0 0 0 0-7Z"
                      ></path>
                    </svg>
                  </span>
                  <span class="sm-number"> 05 </span>
                </div>
                <h3>Reflection &amp; Character</h3>
                <p>
                  Discussions connect the lessons of Seerah with everyday
                  actions, sharing and care for others.
                </p>
              </article>
              <article class="sm-card">
                <div class="sm-card-top">
                  <span class="sm-icon">
                    <svg aria-hidden="true" viewbox="0 0 24 24">
                      <circle cx="9" cy="7" r="3"></circle>
                      <path d="M3 21v-3a6 6 0 0 1 12 0v3"></path>
                      <path
                        d="M16 4a3 3 0 0 1 0 6M18 13a5 5 0 0 1 3 5v3"
                      ></path>
                    </svg>
                  </span>
                  <span class="sm-number"> 06 </span>
                </div>
                <h3>Masjid &amp; Community</h3>
                <p>
                  A supportive environment for children to learn, grow and
                  connect with their faith and the Masjid.
                </p>
              </article>
            </div>
          </div>
          <!-- SOCIAL LINKS -->
          <div class="sm-bottom">
            <p>Follow the journey beyond each session.</p>
            <div
              aria-label="Seerat Club social media"
              class="sm-socials"
              role="group"
            >
              <a
                aria-label="Seerat Club on YouTube, opens in a new tab"
                href="https://www.youtube.com/@SeeratClubForKids"
                rel="noopener noreferrer"
                target="_blank"
              >
                YouTube
                <span aria-hidden="true"> ↗ </span>
              </a>
              <a
                aria-label="Seerat Club on Instagram, opens in a new tab"
                href="https://www.instagram.com/seeratclub/"
                rel="noopener noreferrer"
                target="_blank"
              >
                Instagram
                <span aria-hidden="true"> ↗ </span>
              </a>
              <a
                aria-label="Seerat Club on Facebook, opens in a new tab"
                href="https://www.facebook.com/profile.php?id=61567792571640"
                rel="noopener noreferrer"
                target="_blank"
              >
                Facebook
                <span aria-hidden="true"> ↗ </span>
              </a>
            </div>
          </div>
        </div>
      </section>

@endsection