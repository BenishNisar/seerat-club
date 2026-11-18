@extends("Layout.layout")
@section('title', 'Podcast · Seerat Club for Kids')
@section("Content")


   <!-- Responsive Header -->
      <div class="sc_podcast_page">
        <!-- Podcast Hero -->
        <section aria-labelledby="podcast-title" class="sc_podcast_hero">
          <div class="sc_podcast_container">
            <nav aria-label="Breadcrumb" class="sc_podcast_breadcrumb">
              <a href="{{ route('Home.welcome') }}"> Home </a>
              <span aria-hidden="true"> / </span>
              <span aria-current="page"> Podcast </span>
            </nav>
            <div class="sc_podcast_hero_grid">
              <div class="sc_podcast_intro">
                <span class="sc_podcast_eyebrow">
                  THE SEERAT CLUB PODCAST
                </span>
                <h1 id="podcast-title">
                  Listen.
                  <br />
                  Reflect.
                  <br />
                  <span> Connect. </span>
                </h1>
                <p>
                  Deriving leadership skills from Seerat.
                  <br />
                  Discovering the purpose behind Seerat Club for Kids.
                </p>
                <div class="sc_podcast_actions">
                  <a class="sc_podcast_button" href="#podcast-episodes">
                    Explore episodes
                    <span aria-hidden="true"> ↓ </span>
                  </a>
                  <a
                    class="sc_podcast_textlink"
                    href="https://www.youtube.com/@SeeratClubForKids"
                    rel="noopener noreferrer"
                    target="_blank"
                  >
                    Watch on YouTube ↗
                  </a>
                </div>
              </div>
              <div aria-hidden="true" class="sc_podcast_art">
                <svg fill="none" viewbox="0 0 280 260">
                  <circle
                    cx="140"
                    cy="130"
                    r="110"
                    stroke="currentColor"
                    stroke-dasharray="3 9"
                  ></circle>
                  <path
                    d="M62 217V114C62 69 102 42 140 23C178 42 218 69 218 114V217"
                    opacity=".3"
                    stroke="currentColor"
                  ></path>
                  <rect
                    fill="#21352e"
                    height="89"
                    rx="23"
                    stroke="currentColor"
                    stroke-width="2"
                    width="46"
                    x="117"
                    y="63"
                  ></rect>
                  <path
                    d="M103 123v7a37 37 0 0 0 74 0v-7M140 168v29M118 197h44M126 82h28M126 94h28M126 106h28"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="3"
                  ></path>
                  <path
                    d="M75 111v22M88 97v50M192 98v49M205 111v22M48 151v10M231 74v14M224 81h14"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="3"
                  ></path>
                  <path
                    d="M62 62l3 8 8 3-8 3-3 8-3-8-8-3 8-3Z"
                    fill="currentColor"
                  ></path>
                </svg>
                <span> LISTEN · REFLECT · DISCOVER </span>
              </div>
            </div>
            <div class="sc_podcast_hero_bottom">
              <span> SEERAT CLUB FOR KIDS </span>
              <span> Conversations to watch and reflect on. </span>
              <a
                aria-label="Scroll to podcast episodes"
                href="#podcast-episodes"
              >
                ↓
              </a>
            </div>
          </div>
        </section>
        <!-- Podcast Episodes -->
        <section
          aria-labelledby="podcast-episodes-title"
          class="sc_podcast_episodes"
          id="podcast-episodes"
        >
          <div class="sc_podcast_container sc_podcast_section_heading">
            <div>
              <span class="sc_podcast_eyebrow"> EXPLORE THE EPISODES </span>
              <h2 id="podcast-episodes-title">
                Take a moment.
                <br />
                <span> Join the conversation. </span>
              </h2>
            </div>
            <p>Watch the Seerat Club podcast.</p>
          </div>
          <!-- Episode 02 -->
          <article
            aria-labelledby="podcast-episode-02"
            class="sc_podcast_episode sc_podcast_episode_02"
          >
            <div class="sc_podcast_container sc_podcast_episode_grid">
              <div class="sc_podcast_episode_copy">
                <span aria-hidden="true" class="sc_podcast_number"> 02 </span>
                <span class="sc_podcast_eyebrow"> EPISODE 02 </span>
                <h3 id="podcast-episode-02">
                  Deriving Leadership Skills from Seerat
                </h3>
                <a
                  class="sc_podcast_button"
                  href="https://www.youtube.com/watch?v=UWEw7uQhOcA"
                  rel="noopener noreferrer"
                  target="_blank"
                >
                  Watch Full Episode
                  <span aria-hidden="true"> ↗ </span>
                </a>
              </div>
              <div class="sc_podcast_video_card">
                <div class="sc_podcast_video">
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
                    referrerpolicy="strict-origin-when-cross-origin"
                    src="https://www.youtube.com/embed/UWEw7uQhOcA"
                    title="Episode 02: Deriving Leadership Skills from Seerat"
                  >
                  </iframe>
                </div>
                <div class="sc_podcast_video_caption">
                  <span> SEERAT CLUB PODCAST </span>
                  <span> EPISODE 02 </span>
                </div>
              </div>
            </div>
          </article>
          <!-- Episode 01 -->
          <article
            aria-labelledby="podcast-episode-01"
            class="sc_podcast_episode sc_podcast_episode_01"
          >
            <div class="sc_podcast_container sc_podcast_episode_grid">
              <div class="sc_podcast_episode_copy">
                <span aria-hidden="true" class="sc_podcast_number"> 01 </span>
                <span class="sc_podcast_eyebrow"> EPISODE 01 </span>
                <h3 id="podcast-episode-01">
                  Sparking Curiosity - The Seerat Club for Kids Explained
                </h3>
                <a
                  class="sc_podcast_button"
                  href="https://www.youtube.com/watch?v=n4cmPgryveU"
                  rel="noopener noreferrer"
                  target="_blank"
                >
                  Watch Full Episode
                  <span aria-hidden="true"> ↗ </span>
                </a>
              </div>
              <div class="sc_podcast_video_card">
                <div class="sc_podcast_video">
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
                    referrerpolicy="strict-origin-when-cross-origin"
                    src="https://www.youtube.com/embed/n4cmPgryveU"
                    title="Episode 01: Sparking Curiosity - The Seerat Club for Kids Explained"
                  >
                  </iframe>
                </div>
                <div class="sc_podcast_video_caption">
                  <span> SEERAT CLUB PODCAST </span>
                  <span> EPISODE 01 </span>
                </div>
              </div>
            </div>
          </article>
        </section>
        <!-- YouTube Section -->
        <section
          aria-labelledby="podcast-youtube-title"
          class="sc_podcast_youtube"
        >
          <div class="sc_podcast_container sc_podcast_youtube_inner">
            <svg
              aria-hidden="true"
              class="sc_podcast_youtube_icon"
              fill="none"
              viewbox="0 0 64 48"
            >
              <rect
                height="44"
                rx="13"
                stroke="currentColor"
                stroke-width="2"
                width="60"
                x="2"
                y="2"
              ></rect>
              <path d="m26 14 17 10-17 10Z" fill="currentColor"></path>
            </svg>
            <span class="sc_podcast_eyebrow"> CONTINUE WATCHING </span>
            <h2 id="podcast-youtube-title">
              More from
              <br />
              <span> Seerat Club. </span>
            </h2>
            <a
              class="sc_podcast_button"
              href="https://www.youtube.com/@SeeratClubForKids"
              rel="noopener noreferrer"
              target="_blank"
            >
              Visit our YouTube channel
              <span aria-hidden="true"> ↗ </span>
            </a>
          </div>
        </section>
        <!-- Contact Section -->
        <section
          aria-labelledby="podcast-contact-title"
          class="sc_podcast_contact"
        >
          <div class="sc_podcast_container sc_podcast_contact_inner">
            <div>
              <span class="sc_podcast_eyebrow"> STAY CONNECTED </span>
              <h2 id="podcast-contact-title">Contact Seerat Club</h2>
            </div>
            <div class="sc_podcast_contacts">
              <a href="tel:+923343541413"> 0334 3541413 </a>
              <a href="tel:+923332225425"> 0333 2225425 </a>
              <a class="sc_podcast_textlink" href="{{ route('Home.contact') }}">
                Contact Us ↗
              </a>
            </div>
          </div>
        </section>
      </div>


@endsection