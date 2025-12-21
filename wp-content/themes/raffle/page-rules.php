<?php
/**
 * Template Name: Rules
 * Rules page template.
 */
get_header();
?>

<style>
  /* Inline Rules styling: vivid palette + structured cards */
  .rules-shell{width:min(1160px,100% - 2.4rem);margin:0 auto;padding:3rem 0 4rem;color:#eaf1ff;font-family:"Manrope","Segoe UI",system-ui,sans-serif;}
  .rules-hero{position:relative;padding:1.8rem 0 1.2rem;text-align:center;}
  .rules-eyebrow{letter-spacing:3px;text-transform:uppercase;color:#c7d4ff;font-weight:800;margin:0 0 .4rem;}
  .rules-title{font-family:"Cormorant Garamond","Playfair Display",serif;font-size:2.6rem;margin:0 0 .45rem;color:#ffffff;}
  .rules-sub{margin:0 auto .4rem;max-width:920px;color:#c7d4ff;font-weight:600;}
  .rules-meta{margin:.2rem auto .4rem;max-width:920px;color:#5df4ff;font-weight:800;letter-spacing:.6px;}
  .rules-note{margin:0 auto 1.2rem;max-width:920px;color:#c7d4ff;}
  .rules-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1rem;margin-top:1.6rem;}
  .rules-card{background:linear-gradient(150deg, rgba(93,244,255,0.14), rgba(255,159,77,0.12));border:1px solid rgba(93,244,255,0.32);border-radius:16px;padding:1.1rem;box-shadow:0 18px 46px rgba(0,0,0,0.5);backdrop-filter:blur(6px);}
  .rules-card h3{margin:0 0 .35rem;font-size:1.1rem;color:#ffffff;font-family:"Cormorant Garamond","Playfair Display",serif;}
  .rules-card p{margin:0;color:#c7d4ff;line-height:1.65;font-weight:600;}
  .rules-card ul{margin:.35rem 0 0 1.1rem;padding:0;color:#c7d4ff;line-height:1.6;}
  .rules-highlight{margin:1rem 0 0;padding:1rem 1.1rem;border-radius:14px;background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.12);box-shadow:0 14px 34px rgba(0,0,0,0.45);}
  .rules-highlight strong{color:#ffffff;}
  .rules-cta{margin-top:1.3rem;text-align:center;}
  .rules-cta a{display:inline-flex;align-items:center;gap:.5rem;background:linear-gradient(120deg,#5df4ff,#ff9f4d);color:#081226;padding:.85rem 1.5rem;border-radius:14px;font-weight:800;box-shadow:0 14px 34px rgba(0,0,0,0.45);text-decoration:none;border:1px solid rgba(255,255,255,0.12);}
  @media (max-width:720px){.rules-hero{padding:1.2rem 0 .8rem;} .rules-title{font-size:2.3rem;}}
</style>

<main class="rules-wrap-g7p2">
  <section id="rules">
    <div class="rules-shell">
      <div class="rules-hero">
        <p class="rules-eyebrow">Official Rules</p>
        <h1 class="rules-title">Rules &amp; Regulations</h1>
        <p class="rules-sub">The governing terms for the yoyobam Association Foundation licensed raffle. Participation is limited to individuals 18+ physically located in Alberta at time of purchase.</p>
        <p class="rules-meta">Operator / Licensee: yoyobam Association Foundation • AGLC Raffle Licence #662961 • 995 tickets • $10 per ticket • Draw: Mar 15, 2026</p>
        <p class="rules-note">yoyobam is the campaign/brand name only and not the operator. All raffle operations are conducted by the licensee under AGLC oversight.</p>
      </div>

      <div class="rules-highlight">
        <p><strong>Licence Number:</strong> 662961</p>
        <p><strong>Licensee / Operator:</strong> yoyobam Association Foundation</p>
        <p><strong>Licence Term:</strong> September 26, 2025 – December 31, 2025</p>
      </div>

      <div class="rules-grid" aria-labelledby="rules-content">
        <article class="rules-card">
          <h3>Conduct of raffle</h3>
          <p>This raffle is administered under AGLC Raffle Licence #662961 and must follow all AGLC rules of play.</p>
        </article>

        <article class="rules-card">
          <h3>Eligibility</h3>
          <p>Purchasers must be 18+ and physically in Alberta when buying tickets. Employees of the licensee and their immediate families are not eligible.</p>
        </article>

        <article class="rules-card">
          <h3>Tickets &amp; pricing</h3>
          <p>Tickets are $10 each. The licence caps total tickets at 995 for this draw. Each ticket represents one entry.</p>
        </article>

        <article class="rules-card">
          <h3>Prize</h3>
          <p>One prize equal to 50% of total ticket sales for the licensed draw. No substitutions or transfers.</p>
        </article>

        <article class="rules-card">
          <h3>Draw logistics</h3>
          <p>Draw date and time: March 15, 2026 • Location: Fort Edmonton Park, Edmonton, AB.</p>
        </article>

        <article class="rules-card">
          <h3>Notification &amp; claiming</h3>
          <p>The winner will be contacted within 5 business days using purchase contact details and posted on the site. Winner must respond within 30 days; verification is required before payout.</p>
        </article>

        <article class="rules-card">
          <h3>Refunds</h3>
          <p>All ticket sales are final; no refunds or exchanges.</p>
        </article>

        <article class="rules-card">
          <h3>Disputes</h3>
          <p>Disputes are governed by Alberta law and AGLC regulations. The licensee’s decision is final, subject to AGLC oversight.</p>
        </article>

        <article class="rules-card">
          <h3>Responsible participation</h3>
          <p>Set limits and participate responsibly. Support resources: <a href="https://gamesenseab.ca/" target="_blank" rel="noopener noreferrer">GameSense Alberta</a> or Alberta Health Services (1-866-332-2322).</p>
        </article>
      </div>

      <div class="rules-highlight" style="margin-top:1.2rem;">
        <p><strong>Questions?</strong> For clarification on these rules, <a href="<?php echo esc_url( home_url('/#contact') ); ?>">contact us</a> or review the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a>.</p>
      </div>

      <div class="rules-cta">
        <a href="<?php echo esc_url( home_url('/faq') ); ?>"><i class="fa-solid fa-circle-question"></i> View FAQs</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
