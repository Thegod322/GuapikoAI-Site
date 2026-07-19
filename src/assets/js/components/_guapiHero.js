export const initGuapiHero = () => {
  const hero = document.querySelector('.guapiHero');
  if (!hero) return;

  // Создаем canvas, если его еще нет
  let canvas = hero.querySelector('.guapiHero__canvas');
  if (!canvas) {
    canvas = document.createElement('canvas');
    canvas.className = 'guapiHero__canvas';
    hero.insertBefore(canvas, hero.firstChild);
  }

  const ctx = canvas.getContext('2d');
  let width = 0;
  let height = 0;
  let animationFrameId = null;

  const particles = [];
  const accentRGB = '255, 20, 90'; // #FF145A
  const maxConnectionDist = 130;
  const mouseRadius = 180;

  const mouse = {
    x: null,
    y: null,
    active: false
  };

  const resize = () => {
    width = hero.clientWidth;
    height = hero.clientHeight;
    const dpr = Math.min(window.devicePixelRatio || 1, 2);
    
    canvas.width = width * dpr;
    canvas.height = height * dpr;
    ctx.scale(dpr, dpr);

    initParticles();
  };

  const initParticles = () => {
    particles.length = 0;
    // Плотность точек в зависимости от площади экрана
    const density = Math.floor((width * height) / 11000);
    const count = Math.max(25, Math.min(density, 80));

    for (let i = 0; i < count; i++) {
      particles.push({
        x: Math.random() * width,
        y: Math.random() * height,
        vx: (Math.random() - 0.5) * 0.4,
        vy: -0.3 - Math.random() * 0.6, // Медленный подъем снизу вверх
        radius: 1.5 + Math.random() * 1.5,
        baseAlpha: 0.3 + Math.random() * 0.4
      });
    }
  };

  const handleMouseMove = (e) => {
    const rect = hero.getBoundingClientRect();
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
    mouse.active = true;
  };

  const handleMouseLeave = () => {
    mouse.active = false;
    mouse.x = null;
    mouse.y = null;
  };

  const render = () => {
    ctx.clearRect(0, 0, width, height);

    // 1. Обновление позиций и отрисовка связей
    for (let i = 0; i < particles.length; i++) {
      const p = particles[i];

      // Движение снизу вверх
      p.x += p.vx;
      p.y += p.vy;

      // Перерождение точки снизу при выходе за верхнюю границу
      if (p.y < -10) {
        p.y = height + 10;
        p.x = Math.random() * width;
      }
      if (p.x < -10) p.x = width + 10;
      if (p.x > width + 10) p.x = -10;

      // Дистанция до мыши
      let mouseDist = Infinity;
      let mouseFactor = 0;

      if (mouse.active && mouse.x !== null) {
        const dx = p.x - mouse.x;
        const dy = p.y - mouse.y;
        mouseDist = Math.hypot(dx, dy);

        if (mouseDist < mouseRadius) {
          mouseFactor = 1 - mouseDist / mouseRadius;
        }
      }

      // 2. Линии между соседними точками
      for (let j = i + 1; j < particles.length; j++) {
        const p2 = particles[j];
        const dx = p.x - p2.x;
        const dy = p.y - p2.y;
        const dist = Math.hypot(dx, dy);

        if (dist < maxConnectionDist) {
          let lineAlpha = (1 - dist / maxConnectionDist) * 0.35;

          // Если одна из точек рядом с мышью — делаем линию ярче
          if (mouseFactor > 0) {
            lineAlpha += mouseFactor * 0.3;
          }

          ctx.beginPath();
          ctx.moveTo(p.x, p.y);
          ctx.lineTo(p2.x, p2.y);
          ctx.strokeStyle = `rgba(${accentRGB}, ${Math.min(1, lineAlpha)})`;
          ctx.lineWidth = 0.8 + mouseFactor * 0.6;
          ctx.stroke();
        }
      }

      // 3. Линия от точки к курсору мыши
      if (mouseFactor > 0) {
        ctx.beginPath();
        ctx.moveTo(p.x, p.y);
        ctx.lineTo(mouse.x, mouse.y);
        ctx.strokeStyle = `rgba(${accentRGB}, ${mouseFactor * 0.75})`;
        ctx.lineWidth = 1 + mouseFactor * 0.8;
        ctx.stroke();
      }

      // 4. Отрисовка самой точки
      const currentAlpha = Math.min(1, p.baseAlpha + mouseFactor * 0.6);
      const currentRadius = p.radius + mouseFactor * 2;

      ctx.save();
      ctx.beginPath();
      ctx.arc(p.x, p.y, currentRadius, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(${accentRGB}, ${currentAlpha})`;

      // Свечение для активированных мышкой точек
      if (mouseFactor > 0.2) {
        ctx.shadowBlur = 12 * mouseFactor;
        ctx.shadowColor = `rgba(${accentRGB}, 0.9)`;
      }

      ctx.fill();
      ctx.restore();
    }

    animationFrameId = requestAnimationFrame(render);
  };

  resize();
  window.addEventListener('resize', resize);
  hero.addEventListener('mousemove', handleMouseMove);
  hero.addEventListener('mouseleave', handleMouseLeave);

  render();
};
