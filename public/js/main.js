/* =====================================================
   main.js — All Interactions & Animations
===================================================== */

document.addEventListener('DOMContentLoaded', () => {

  /* ============================================
     1. NAVBAR — scroll state + active link
  ============================================ */
  const navbar  = document.getElementById('navbar');
  const backTop = document.getElementById('backTop');

  window.addEventListener('scroll', () => {
    // scrolled class
    navbar.classList.toggle('scrolled', window.scrollY > 30);

    // back-to-top button
    backTop.classList.toggle('show', window.scrollY > 500);

    // active nav link highlight
    const sections = document.querySelectorAll('section[id]');
    let current = 'home';
    sections.forEach(sec => {
      if (window.scrollY + 140 >= sec.offsetTop) current = sec.id;
    });
    document.querySelectorAll('.nav-links a').forEach(a => {
      a.classList.toggle('active', a.getAttribute('href') === '#' + current);
    });
  });

  backTop.addEventListener('click', () =>
    window.scrollTo({ top: 0, behavior: 'smooth' })
  );

  /* ============================================
     2. MOBILE NAV TOGGLE
  ============================================ */
  const navToggle = document.getElementById('navToggle');
  const navLinks  = document.getElementById('navLinks');
  const toggleIcon = navToggle ? navToggle.querySelector('i') : null;

  if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
      const isOpen = navLinks.classList.toggle('open');
      navToggle.setAttribute('aria-expanded', isOpen);
      if (toggleIcon) {
        toggleIcon.className = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
      }
    });

    navLinks.querySelectorAll('a').forEach(a =>
      a.addEventListener('click', () => {
        navLinks.classList.remove('open');
        navToggle.setAttribute('aria-expanded', 'false');
        if (toggleIcon) toggleIcon.className = 'fa-solid fa-bars';
      })
    );

    // Close nav when clicking outside
    document.addEventListener('click', (e) => {
      if (!navbar.contains(e.target)) {
        navLinks.classList.remove('open');
        if (navToggle) navToggle.setAttribute('aria-expanded', 'false');
        if (toggleIcon) toggleIcon.className = 'fa-solid fa-bars';
      }
    });
  }

  /* ============================================
     3. DARK / LIGHT THEME TOGGLE
  ============================================ */
  const themeToggle = document.getElementById('themeToggle');

  // Persist theme across visits
  const savedTheme = localStorage.getItem('theme') || 'dark';
  document.body.setAttribute('data-theme', savedTheme);

  // Keyboard accessibility listeners for interactive divs (Theme Toggle, Menu Toggle, Back to Top)
  const accessibleBtns = [themeToggle, navToggle, backTop];
  accessibleBtns.forEach(btn => {
    if (btn) {
      btn.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          btn.click();
        }
      });
    }
  });

  themeToggle.addEventListener('click', () => {
    const next = document.body.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    document.body.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
  });

  /* ============================================
     4. REVEAL ON SCROLL (IntersectionObserver)
  ============================================ */
  const revealEls = document.querySelectorAll('.reveal');
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  revealEls.forEach(el => revealObserver.observe(el));

  /* ============================================
     5. ANIMATED COUNTERS
  ============================================ */
  const counters = document.querySelectorAll('.hero-stat .num');
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el     = entry.target;
        const target = +el.getAttribute('data-count');
        let cur      = 0;
        const step   = Math.max(1, Math.ceil(target / 60));

        const tick = () => {
          cur += step;
          if (cur >= target) {
            el.textContent = target + '+';
            return;
          }
          el.textContent = cur;
          requestAnimationFrame(tick);
        };
        tick();
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.4 });

  counters.forEach(c => counterObserver.observe(c));

  /* ============================================
     6. SKILL BAR ANIMATION
  ============================================ */
  const skillFills = document.querySelectorAll('.skill-fill');
  const skillObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.width = entry.target.getAttribute('data-width') + '%';
        skillObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  skillFills.forEach(f => skillObserver.observe(f));

  /* ============================================
     7. PROJECT FILTER
  ============================================ */
  const filterBtns  = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // update active button
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      projectCards.forEach(card => {
        const show = filter === 'all' || card.getAttribute('data-cat') === filter;
        card.style.display = show ? '' : 'none';
        if (show) {
          card.classList.remove('reveal');
          card.classList.add('in');
        }
      });
    });
  });

  /* ============================================
     8. CONTACT FORM — email redirect
  ============================================ */
  const form = document.getElementById('contactForm');
  if (form) {
    // Dynamically insert alert box inside form if not present
    let alertBox = document.getElementById('formAlert');
    if (!alertBox) {
      alertBox = document.createElement('div');
      alertBox.id = 'formAlert';
      alertBox.className = 'form-alert';
      form.appendChild(alertBox);
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const btn = form.querySelector('button[type="submit"]');
      const originalBtnHTML = btn.innerHTML;
      btn.disabled = true;
      btn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Sending...';
      alertBox.style.display = 'none';

      const name    = document.getElementById('name').value.trim();
      const email   = document.getElementById('email').value.trim();
      const service = document.getElementById('service').value;
      const message = document.getElementById('message').value.trim();

      // Send directly to WhatsApp
      const waText =
        'Hello Abdullah! %F0%9F%91%8B%0A%0A' +
        '*New Project Inquiry from Website*%0A%0A' +
        '%F0%9F%91%A4 *Name:* ' + encodeURIComponent(name) + '%0A' +
        '%F0%9F%93%A7 *Email:* ' + encodeURIComponent(email) + '%0A' +
        '%F0%9F%9B%A0%EF%B8%8F *Service:* ' + encodeURIComponent(service) + '%0A%0A' +
        '%F0%9F%92%AC *Message:*%0A' + encodeURIComponent(message);

      const waURL = 'https://wa.me/923706235635?text=' + waText;

      setTimeout(() => {
        btn.disabled = false;
        btn.innerHTML = originalBtnHTML;
        alertBox.className = 'form-alert success';
        alertBox.style.display = 'block';
        alertBox.innerHTML = '<i class="fa-solid fa-circle-check"></i> Thank you, ' + name + '! Opening WhatsApp to send your message...';
        form.reset();
        window.open(waURL, '_blank');
      }, 600);
    });
  }

  /* ============================================
     9. SMOOTH HOVER TILT on service cards
  ============================================ */
  const serviceCards = document.querySelectorAll('.service-card');
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (!prefersReducedMotion && serviceCards.length > 0) {
    serviceCards.forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect   = card.getBoundingClientRect();
        const x      = (e.clientX - rect.left) / rect.width  - 0.5;
        const y      = (e.clientY - rect.top)  / rect.height - 0.5;
        card.style.transform = `translateY(-8px) rotateX(${-y * 6}deg) rotateY(${x * 6}deg)`;
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = '';
      });
    });
  }

  // Dynamic footer copyright year update
  const yearEl = document.getElementById('year');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  /* ============================================
     10. TYPING EFFECT in hero code window
         (re-animates the cursor)
  ============================================ */
  // cursor already blinks via CSS — no JS needed

});

/* ============================================
   FAB MENU + CHATBOT
============================================ */
let fabOpen = false;
let chatOpen = false;

function toggleFab() {
  fabOpen = !fabOpen;
  const items = document.querySelectorAll('.fab-item');
  const mainBtn = document.getElementById('fabMain');
  items.forEach(el => el.classList.toggle('visible', fabOpen));
  mainBtn.classList.toggle('active', fabOpen);
}

function toggleChatbot() {
  chatOpen = !chatOpen;
  document.getElementById('chatbotWidget').classList.toggle('open', chatOpen);
  if (chatOpen) {
    document.getElementById('chatInput').focus();
    // close fab menu when chatbot opens
    if (fabOpen) toggleFab();
  }
}

const SYSTEM_PROMPT = `You are a friendly AI assistant for Hafiz Abdullah, a Web Developer & AI Solutions Expert based in Lahore, Pakistan. You represent "Abdullah Dev Solutions".

About Abdullah:
- Full-stack web developer specializing in Laravel, WordPress, React, and AI integrations
- Builds modern websites, AI chatbots, and business automation systems
- 4+ years of experience, 60+ projects completed, 45+ happy clients
- Available for freelance projects
- Contact: WhatsApp +92 370 6235635

Services offered:
- Custom Website Development (Laravel, WordPress, React)
- AI Chatbot Development & Integration
- Business Automation Systems
- E-commerce Solutions
- UI/UX Design

Be helpful, concise, and friendly. If someone wants to hire Abdullah or get a quote, encourage them to reach out on WhatsApp or the Contact section. Answer in the same language the user writes in (Urdu or English).`;

const chatHistory = [];

async function sendChat() {
  const input = document.getElementById('chatInput');
  const msg = input.value.trim();
  if (!msg) return;
  input.value = '';

  appendMsg(msg, 'user');
  chatHistory.push({ role: 'user', content: msg });

  const typingId = appendTyping();

  try {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const res = await fetch('/chatbot/message', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
      },
      body: JSON.stringify({ messages: chatHistory })
    });
    const data = await res.json();
    removeTyping(typingId);
    if (data.error) {
      appendMsg('⚠️ ' + data.error, 'bot');
      return;
    }
    const reply = data.reply || "Sorry, I couldn't process that. Please try again!";
    chatHistory.push({ role: 'assistant', content: reply });
    appendMsg(reply, 'bot');
  } catch (e) {
    removeTyping(typingId);
    appendMsg('Oops! Something went wrong. Please try again.', 'bot');
  }
}

function appendMsg(text, who) {
  const box = document.getElementById('chatMessages');
  const div = document.createElement('div');
  div.className = `chat-msg ${who}`;
  div.innerHTML = `<div class="msg-bubble">${text}</div>`;
  box.appendChild(div);
  box.scrollTop = box.scrollHeight;
}

function appendTyping() {
  const box = document.getElementById('chatMessages');
  const id = 'typing_' + Date.now();
  const div = document.createElement('div');
  div.className = 'chat-msg bot';
  div.id = id;
  div.innerHTML = `<div class="msg-bubble typing"><span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span></div>`;
  box.appendChild(div);
  box.scrollTop = box.scrollHeight;
  return id;
}

function removeTyping(id) {
  const el = document.getElementById(id);
  if (el) el.remove();
}
