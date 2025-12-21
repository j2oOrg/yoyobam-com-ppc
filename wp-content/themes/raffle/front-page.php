<?php
/**
 * Front page template pulling the landing content from the static index.html.
 */
get_header();
$hero_image = get_theme_file_uri('/assets/images/herobackground02.png');
?>

<main>
  <section class="hero" id="home">
    <div class="container hero-structure">
      <div class="hero-brief">
        <p class="eyebrow">AGLC licensed charitable raffle</p>
        <h1 class="hero-title">yoyobam Association Foundation 50/50 Raffle</h1>
        <p class="hero-lead">A compliant, 18+ draw operated under AGLC Raffle Licence #662961. The winner receives 50% of ticket sales for this licensed event.</p>
        <div class="hero-actions">
          <a href="#" class="btn primary" data-signup-btn>Purchase tickets</a>
          <a href="#oversight" class="btn ghost">View oversight &amp; rules</a>
        </div>
        <div class="hero-flags">
          <span class="flag"><i class="fa-solid fa-certificate"></i> AGLC Licence #662961</span>
          <span class="flag"><i class="fa-solid fa-ticket"></i> 995 tickets • $10 each</span>
          <span class="flag"><i class="fa-solid fa-hand-holding-dollar"></i> Winner: 50% of sales</span>
        </div>
        <p class="hero-note">Operator / Licensee: yoyobam Association Foundation • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). yoyobam is the campaign/brand name only and is not the operator. Must be 18+ and physically located in Alberta at time of purchase.</p>
      </div>

      <aside class="draw-panel">
        <div class="draw-panel__header">
          <p class="panel-label">Current licensed draw</p>
          <p class="draw-amount">$3,780 projected payout</p>
          <p class="panel-sub">50% of ticket sales to date (AGLC Raffle Licence #662961)</p>
        </div>
        <div class="countdown-deck" id="countdown">
          <div class="countdown-row">
            <div class="countdown-label">Days remaining</div>
            <div class="countdown-bar"><span id="countdownBarDays"></span></div>
            <div class="countdown-value" id="countdownDays">00</div>
          </div>
          <div class="countdown-row">
            <div class="countdown-label">Hours</div>
            <div class="countdown-bar"><span id="countdownBarHours"></span></div>
            <div class="countdown-value" id="countdownHours">00</div>
          </div>
          <div class="countdown-row">
            <div class="countdown-label">Minutes</div>
            <div class="countdown-bar"><span id="countdownBarMinutes"></span></div>
            <div class="countdown-value" id="countdownMinutes">00</div>
          </div>
          <div class="countdown-row">
            <div class="countdown-label">Seconds</div>
            <div class="countdown-bar"><span id="countdownBarSeconds"></span></div>
            <div class="countdown-value" id="countdownSeconds">00</div>
          </div>
        </div>
        <p class="deadline-note">Draw scheduled: March 15, 2026 • 5:00 PM MT • Fort Edmonton Park, Edmonton</p>
        <ul class="assurance-list">
          <li>Ticket price: $10.00 per ticket • Total tickets available: 995</li>
          <li>Winner receives 50% of total ticket sales for this licensed draw.</li>
          <li>Operator / Licensee: yoyobam Association Foundation • AGLC Raffle Licence #662961.</li>
        </ul>
      </aside>
    </div>
  </section>

  <section class="packages draw-facts" id="packages">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Key facts</p>
        <h2 class="section-title">Serious raffle, posted limits</h2>
        <p class="section-sub">Licensed, capped ticket inventory, and clearly stated prize mechanics.</p>
      </div>

      <div class="fact-grid">
        <article class="fact-card">
          <p class="fact-label">Ticket price</p>
          <p class="fact-value">$10.00</p>
          <p class="fact-note">Single price for all entries.</p>
        </article>
        <article class="fact-card">
          <p class="fact-label">Ticket cap</p>
          <p class="fact-value">995 total</p>
          <p class="fact-note">Maximum odds: 1 in 995.</p>
        </article>
        <article class="fact-card">
          <p class="fact-label">Prize</p>
          <p class="fact-value">50% of sales</p>
          <p class="fact-note">Paid out to one verified winner.</p>
        </article>
        <article class="fact-card">
          <p class="fact-label">Draw</p>
          <p class="fact-value">Mar 15, 2026</p>
          <p class="fact-note">5:00 PM MT • Fort Edmonton Park.</p>
        </article>
      </div>

      <div class="integrity-panel">
        <div>
          <p class="section-eyebrow">Oversight</p>
          <h3>Licence-first operations</h3>
          <p class="panel-text">AGLC Raffle Licence #662961 governs this draw. All advertising references the licence, ticket volume, and price exactly as approved.</p>
          <div class="panel-pills">
            <span class="pill accent"><i class="fa-solid fa-shield-halved"></i> Regulated</span>
            <span class="pill"><i class="fa-solid fa-file-contract"></i> Posted odds</span>
            <span class="pill"><i class="fa-solid fa-people-group"></i> One verified winner</span>
          </div>
        </div>
        <div class="integrity-actions">
          <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-clipboard-check"></i> Confirm your entry</a>
          <a href="#oversight" class="btn ghost">Review rules &amp; obligations</a>
        </div>
      </div>
    </div>
  </section>

  <section class="packages process" id="how">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">How it works</p>
        <h2 class="section-title">Clear, responsible flow</h2>
        <p class="section-sub">We keep the steps straightforward and transparent.</p>
      </div>

      <div class="process-grid">
        <article class="process-step">
          <span class="step-number">01</span>
          <div>
            <p class="package-name">Purchase tickets</p>
            <p class="package-note">995 tickets maximum, $10 each. Must be 18+ and in Alberta at purchase.</p>
          </div>
        </article>
        <article class="process-step">
          <span class="step-number">02</span>
          <div>
            <p class="package-name">Licence-aligned draw</p>
            <p class="package-note">Draw conducted on March 15, 2026 at Fort Edmonton Park, Edmonton.</p>
          </div>
        </article>
        <article class="process-step">
          <span class="step-number">03</span>
          <div>
            <p class="package-name">Verification &amp; payout</p>
            <p class="package-note">One winner receives 50% of total ticket sales; identity is verified before payout.</p>
          </div>
        </article>
        <article class="process-step">
          <span class="step-number">04</span>
          <div>
            <p class="package-name">Responsible follow-through</p>
            <p class="package-note">We publish the winner, respect all AGLC rules, and support responsible participation.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="impact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Your impact</p>
        <h2 class="section-title">Tickets that support conservation</h2>
        <p class="section-sub">Every purchase echoes theraffle spirit—backing wildlife and outdoor heritage.</p>
      </div>
      <div class="package-grid">
        <article class="package-card">
          <p class="package-note">
            Every ticket helps fund wildlife and habitat initiatives similar to the Pheasant Release Program. Together we keep ecosystems healthy and outdoor experiences thriving.
          </p>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn primary">Ask about the mission</a>
        </article>
        <article class="package-card" style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12);">
          <p class="section-eyebrow" style="margin-bottom:0.35rem;">Operator</p>
          <p class="section-sub" style="margin:0;">Operated by:<br>
          yoyobam Association Foundation<br>
          9111-39 Avenue, Edmonton, AB T6E5Y2<br>
          Licensed charitable organization in Alberta</p>
          <p class="section-sub" style="margin:0.6rem 0 0;">Advertising and marketing services provided by:<br>
          DigiBox Ltd (authorized agent)</p>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="winners">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Winners</p>
        <h2 class="section-title">Winners announced after the draw</h2>
        <p class="section-sub">Check back after March 15, 2026 for the official winner announcement.</p>
      </div>
      <div class="package-grid">
        <article class="package-card">
          <p class="package-note">We’ll post the verified winner and prize claim details here once the draw is completed.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="regulatory" id="oversight">
    <div id="responsible" class="sr-only" aria-hidden="true"></div>
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Compliance</p>
        <h2 class="section-title">Licensed &amp; regulated</h2>
        <p class="section-sub">Operator / Licensee: yoyobam Association Foundation • AGLC Raffle Licence #662961 • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). yoyobam is the campaign/brand name only.</p>
      </div>

      <div class="rg-grid">
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Licence &amp; limits</h3>
          <p>Operator / Licensee: yoyobam Association Foundation • AGLC Raffle Licence #662961 • 995 tickets • $10 each • Draw: Mar 15, 2026 • One $3,780 winner.</p>
          <span class="rg-badge-pill"><i class="fa-solid fa-scale-balanced"></i> Posted odds: max 1 in 995</span>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>Participate responsibly</h3>
          <p>18+ only. Set limits, keep raffle participation balanced, and take breaks. We promote balance over impulse.</p>
          <a class="rg-cta" href="https://www.albertahealthservices.ca" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-arrow-up-right-from-square"></i> Responsible participation resources</a>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
          <h3>Need support?</h3>
          <p>Helpline: <a href="tel:18663322322" class="link-accent">1-866-332-2322</a> • Alberta Health Services Addiction Helpline.</p>
          <ul class="res-links">
            <li><a href="https://gamesenseab.ca/" target="_blank" rel="noopener noreferrer">GameSense Alberta</a></li>
            <li><a href="https://www.gambleaware.org/" target="_blank" rel="noopener noreferrer">BeGambleAware</a></li>
            <li><a href="https://selfexclusion.ca/" target="_blank" rel="noopener noreferrer">Self-Exclusion Program</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Contact</p>
        <h2 class="section-title">We’re here to help</h2>
        <p class="section-sub">Questions about tickets, rules, or responsible gaming? Reach out anytime.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-card">
          <h3>Message us</h3>
          <p>Email: <a href="mailto:support@yoyobam.com">support@yoyobam.com</a></p>
          <p>Hours: Mon–Fri, 9:00 AM – 5:00 PM (MT)</p>
          <p>Response time: within 1–2 business days</p>
        </div>
        <div class="contact-form-card">
          <h3>Need assistance?</h3>
          <p>Visit the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a> or <a href="<?php echo esc_url( home_url('/rules') ); ?>">Rules</a> for quick answers.</p>
          <div class="form-status" aria-live="polite">Prefer a call? Email us to schedule.</div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="sticky-ribbon">
  <div class="item"><i class="fa-solid fa-circle-exclamation"></i> 18+</div>
  <div class="item"><i class="fa-solid fa-shield"></i> Responsible Gaming</div>
  <div class="item"><i class="fa-solid fa-ticket"></i> AGLC Licence #662961</div>
  <div class="item"><i class="fa-solid fa-bolt"></i> Fast Checkout</div>
</div>

<div class="yoyobam-modal" id="signupModal" aria-hidden="true">
  <div class="modal-card">
    <button class="modal-close" type="button" data-modal-close aria-label="Close form"><i class="fa-solid fa-xmark"></i></button>
    <h3>Ticket Purchase Inquiry</h3>
    <p>Send us a message about buying raffle tickets. We’ll respond with next steps.</p>
    <form id="signupForm" class="modal-form">
      <input type="text" id="signupName" placeholder="Full name" required>
      <input type="email" id="signupEmail" placeholder="Email address" required>
      <input type="tel" id="signupPhone" placeholder="Phone number" required>
      <textarea id="signupMessage" placeholder="Your message or ticket request" rows="3" required></textarea>
      <button type="submit" class="btn primary">Send message</button>
      <p id="signupStatus" class="modal-status" aria-live="polite"></p>
    </form>
  </div>
</div>

<div class="sticky-footer">
  <div class="container">
    <div class="badge"><span class="age-number">18+</span></div>
    <div class="badge"><i class="fa-solid fa-shield-check"></i> Responsible Gaming</div>
    <div class="badge"><i class="fa-solid fa-certificate"></i> AGLC Licence #662961</div>
  </div>
</div>

<?php get_footer(); ?>
