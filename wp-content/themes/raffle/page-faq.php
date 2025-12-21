<?php
/**
 * Template Name: FAQ
 * FAQ page template.
 */
get_header();
?>

<style>
  /* Inline FAQ-specific styling (bright palette, card layout) */
  .faq-shell{width:min(1160px,100% - 2.4rem);margin:0 auto;padding:3rem 0 4rem;color:#eaf1ff;font-family:"Manrope","Segoe UI",system-ui,sans-serif;}
  .faq-hero{position:relative;padding:1.6rem 0 1rem;text-align:center;}
  .faq-eyebrow{letter-spacing:3px;text-transform:uppercase;color:#c7d4ff;font-weight:800;margin:0 0 .4rem;}
  .faq-title{font-family:"Cormorant Garamond","Playfair Display",serif;font-size:2.6rem;margin:0 0 .45rem;color:#ffffff;}
  .faq-sub{margin:0 auto .4rem;max-width:900px;color:#c7d4ff;font-weight:600;}
  .faq-meta{margin:.2rem auto .2rem;max-width:900px;color:#5df4ff;font-weight:800;letter-spacing:.6px;}
  .faq-note{margin:0 auto 1rem;max-width:900px;color:#c7d4ff;}
  .faq-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1rem;margin-top:1.4rem;}
  .faq-card{background:linear-gradient(150deg, rgba(93,244,255,0.14), rgba(255,159,77,0.12));border:1px solid rgba(93,244,255,0.32);border-radius:16px;padding:1.1rem;box-shadow:0 18px 46px rgba(0,0,0,0.5);backdrop-filter:blur(6px);}
  .faq-card h3{margin:0 0 .35rem;font-size:1.1rem;color:#ffffff;font-family:"Cormorant Garamond","Playfair Display",serif;}
  .faq-card p{margin:0;color:#c7d4ff;line-height:1.6;font-weight:600;}
  .faq-card a{color:#5df4ff;font-weight:700;}
  .faq-card a:hover{color:#ffb271;}
  .faq-cta{margin-top:1.3rem;text-align:center;}
  .faq-cta a{display:inline-flex;align-items:center;gap:.5rem;background:linear-gradient(120deg,#5df4ff,#ff9f4d);color:#081226;padding:.8rem 1.4rem;border-radius:14px;font-weight:800;box-shadow:0 14px 34px rgba(0,0,0,0.45);text-decoration:none;border:1px solid rgba(255,255,255,0.12);}
  @media (max-width:720px){.faq-hero{padding:1.1rem 0 .6rem;} .faq-title{font-size:2.2rem;}}
</style>

<main class="faq-wrap-j5b2">
  <section id="faq">
    <div class="faq-shell">
      <div class="faq-hero">
        <p class="faq-eyebrow">Need answers?</p>
        <h1 class="faq-title">Frequently Asked Questions</h1>
        <p class="faq-sub">Straightforward responses about the yoyobam Association Foundation licensed 50/50 raffle.</p>
        <p class="faq-meta">Operator / Licensee: yoyobam Association Foundation • AGLC Raffle Licence #662961 • Draw: Mar 15, 2026 • 995 tickets at $10</p>
        <p class="faq-note">yoyobam is the campaign/brand name only. All raffle operations are performed by the Foundation under AGLC oversight.</p>
      </div>

      <div class="faq-grid" aria-labelledby="faq-list">
        <article class="faq-card">
          <h3>What are the ticket price and inventory?</h3>
          <p>Each ticket is $10. The licence caps total tickets at 995 for this draw.</p>
        </article>

        <article class="faq-card">
          <h3>Who is eligible to purchase?</h3>
          <p>Buyers must be 18+ and physically in Alberta at purchase time. Licensee staff and their immediate family are not eligible.</p>
        </article>

        <article class="faq-card">
          <h3>Can I buy more than one?</h3>
          <p>Yes. You may purchase multiple tickets; each ticket is a separate chance within the 995-ticket limit.</p>
        </article>

        <article class="faq-card">
          <h3>When and where is the draw?</h3>
          <p>The licensed draw is scheduled for March 15, 2026 at Fort Edmonton Park, Edmonton, following AGLC rules.</p>
        </article>

        <article class="faq-card">
          <h3>What is the prize?</h3>
          <p>A licensed prize pool equal to 50% of total ticket revenue (projected $3,780). It is awarded to one verified winner and is not transferable.</p>
        </article>

        <article class="faq-card">
          <h3>What are my odds?</h3>
          <p>Maximum odds are 1 in 995, based on the fixed ticket cap.</p>
        </article>

        <article class="faq-card">
          <h3>How will the winner be contacted?</h3>
          <p>The licensee will notify the winner within 5 business days using purchase contact details. The winner must respond within 30 days.</p>
        </article>

        <article class="faq-card">
          <h3>Must I attend the draw?</h3>
          <p>No. Presence is not required. The winner is contacted directly and posted on the site after verification.</p>
        </article>

        <article class="faq-card">
          <h3>Are sales refundable?</h3>
          <p>All ticket sales are final. No refunds or exchanges are permitted.</p>
        </article>

        <article class="faq-card">
          <h3>Where do proceeds go?</h3>
          <p>Proceeds support yoyobam Association Foundation programs—community outreach, education, and local initiatives under the Foundation’s mandate.</p>
        </article>

        <article class="faq-card">
          <h3>Who operates this raffle?</h3>
          <p>Operator / Licensee: yoyobam Association Foundation. yoyobam is the campaign/brand name only and not the operator.</p>
        </article>

        <article class="faq-card">
          <h3>Need more help?</h3>
          <p>Email <a href="mailto:support@yoyobam.com">support@yoyobam.com</a> or use the <a href="<?php echo esc_url( home_url('/#contact') ); ?>">contact section</a> on the homepage.</p>
        </article>
      </div>

      <div class="faq-cta">
        <a href="<?php echo esc_url( home_url('/rules') ); ?>"><i class="fa-solid fa-file-contract"></i> View full rules &amp; obligations</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
