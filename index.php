<?php
$profile = [
    'label' => 'Online Profile',
    'name' => '경영지도사 임진택',
    'tagline' => '재무관리 전문 컨설턴트',
    'call_to_action' => '카드 뉴스 보기',
    'secondary_action' => '상담 문의',
];

$qualifications = [
    '신용분석사',
    '사회조사분석사 2급',
    'ADsP',
    '경영지도사 (재무관리)',
];

$services = [
    '사업계획서 코칭',
    '창업 컨설팅',
    '정책자금/투자유치 등 자금조달 컨설팅',
    '벤처기업/연구소 및 연구전담부서/이노비즈/메인비즈 인증 컨설팅',
];

$cards = [
    [
        'title' => '소개',
        'paragraphs' => [
            '경영지도사 임진택은 재무관리 전문 지식과 풍부한 실무 경험을 바탕으로 기업의 성장 전략을 지원합니다. 신뢰를 바탕으로 한 컨설팅으로 비즈니스의 방향성을 제시하고 실행까지 함께합니다.',
        ],
    ],
    [
        'title' => '자격사항',
        'items' => $qualifications,
    ],
    [
        'title' => '업무영역',
        'items' => $services,
    ],
    [
        'title' => '업무영역별 설명',
        'paragraphs' => [
            '세부 설명은 추후 입력 예정입니다. 각 프로젝트와 업무영역에 맞춘 맞춤형 컨설팅 정보를 업데이트할 예정입니다.',
        ],
    ],
    [
        'title' => '비즈니스지원단 현장클리닉',
        'paragraphs' => [
            '안내 내용은 추후 입력 예정입니다. 현장 컨설팅 일정과 지원 절차에 대한 자세한 정보가 추가될 예정입니다.',
        ],
    ],
    [
        'title' => '업무 레퍼런스',
        'paragraphs' => [
            '레퍼런스 정보는 추후 입력 예정입니다. 성공 사례와 컨설팅 결과를 정리해 신뢰도를 더욱 높일 예정입니다.',
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($profile['name']) ?> - 온라인 명함</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: {
                100: '#E0F2FE',
                400: '#38BDF8',
                500: '#0EA5E9',
                600: '#0284C7',
              },
            },
            fontFamily: {
              sans: ['\"Noto Sans KR\"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
          },
        },
      };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      @keyframes fade-in {
        from {
          opacity: 0;
          transform: translateY(12px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .animate-fade-in {
        animation: fade-in 0.4s ease-out;
      }
    </style>
  </head>
  <body class="min-h-screen bg-slate-950 text-slate-100 font-sans">
    <main class="mx-auto flex min-h-screen max-w-6xl flex-col justify-center px-6 py-12 lg:px-12">
      <div class="grid gap-10 lg:grid-cols-[360px_1fr] lg:items-start">
        <aside
          class="relative overflow-hidden rounded-3xl border border-slate-800/80 bg-slate-900/60 p-10 shadow-[0_32px_80px_-40px_rgba(15,23,42,0.9)] backdrop-blur"
        >
          <div
            class="absolute -top-32 -right-24 h-64 w-64 rounded-full bg-primary-500/10 blur-3xl"
            aria-hidden="true"
          ></div>
          <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-400">
            <?= htmlspecialchars($profile['label']) ?>
          </p>
          <h1 class="mt-5 text-3xl font-semibold leading-snug text-slate-50">
            <?= htmlspecialchars($profile['name']) ?>
          </h1>
          <p class="mt-3 text-base text-slate-300"><?= htmlspecialchars($profile['tagline']) ?></p>

          <div
            class="mt-10 flex aspect-[3/4] items-center justify-center rounded-2xl border border-dashed border-slate-700 bg-slate-900/40 text-center text-sm text-slate-500"
            aria-hidden="true"
          >
            향후 프로필 사진 입력 영역
          </div>

          <dl class="mt-12 space-y-4 text-sm text-slate-300">
            <div class="flex flex-col gap-1 border-l-2 border-primary-500/50 pl-4">
              <dt class="text-xs uppercase tracking-wide text-slate-400">자격사항</dt>
              <dd><?= htmlspecialchars(implode(', ', array_slice($qualifications, 0, 2))) ?></dd>
              <dd><?= htmlspecialchars(implode(', ', array_slice($qualifications, 2))) ?></dd>
            </div>
            <div class="flex flex-col gap-1 border-l-2 border-primary-500/50 pl-4">
              <dt class="text-xs uppercase tracking-wide text-slate-400">핵심 서비스</dt>
              <dd>사업계획 코칭 · 창업 컨설팅</dd>
              <dd>자금조달 및 인증 컨설팅</dd>
            </div>
          </dl>

          <div class="mt-10 flex gap-3">
            <a
              href="#cards"
              class="inline-flex items-center gap-2 rounded-full bg-primary-500 px-5 py-2 text-sm font-semibold text-slate-950 shadow-lg shadow-primary-500/20 transition hover:bg-primary-400"
            >
              <?= htmlspecialchars($profile['call_to_action']) ?>
              <span aria-hidden="true">→</span>
            </a>
            <button
              type="button"
              class="inline-flex items-center gap-2 rounded-full border border-slate-700 px-5 py-2 text-sm font-medium text-slate-300 transition hover:border-primary-500/50 hover:text-primary-400"
            >
              <?= htmlspecialchars($profile['secondary_action']) ?>
            </button>
          </div>
        </aside>

        <section
          id="cards"
          class="relative overflow-hidden rounded-3xl border border-slate-800/80 bg-slate-900/40 p-10 shadow-[0_40px_120px_-60px_rgba(14,165,233,0.45)]"
          aria-live="polite"
        >
          <header class="mb-8 flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
            <div>
              <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-400">Card Briefing</p>
              <h2 class="mt-2 text-2xl font-semibold text-slate-50">경영지원 인사이트</h2>
            </div>
            <div class="flex flex-col items-start gap-3 text-sm sm:items-end">
              <div class="flex items-center gap-2">
                <button
                  class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-700 bg-slate-900/70 text-slate-300 transition hover:border-primary-400 hover:text-primary-300"
                  data-direction="prev"
                  aria-label="이전 카드"
                >
                  <svg
                    class="h-4 w-4 transition group-hover:-translate-x-0.5"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M15 18l-6-6 6-6" />
                  </svg>
                </button>
                <button
                  class="group inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-700 bg-slate-900/70 text-slate-300 transition hover:border-primary-400 hover:text-primary-300"
                  data-direction="next"
                  aria-label="다음 카드"
                >
                  <svg
                    class="h-4 w-4 transition group-hover:translate-x-0.5"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M9 6l6 6-6 6" />
                  </svg>
                </button>
              </div>
              <div class="flex w-40 flex-col gap-1">
                <span class="text-xs uppercase tracking-wide text-slate-400">
                  <span class="progress-label">1 / <?= count($cards) ?></span>
                </span>
                <div class="h-1.5 rounded-full bg-slate-800">
                  <span
                    class="progress-bar block h-full w-1/<?= max(count($cards), 1) ?> rounded-full bg-primary-500 transition-all duration-300 ease-out"
                  ></span>
                </div>
              </div>
            </div>
          </header>

          <div class="relative min-h-[320px]">
            <div class="space-y-8">
              <?php foreach ($cards as $index => $card): ?>
                <article
                  class="card<?= $index === 0 ? '' : ' hidden' ?> flex flex-col gap-4 rounded-2xl border border-slate-800/70 bg-slate-900/50 p-8 shadow-inner shadow-black/20"
                  data-card
                >
                  <h3 class="text-xl font-semibold text-slate-50">
                    <?= htmlspecialchars($card['title']) ?>
                  </h3>
                  <?php if (!empty($card['items'])): ?>
                    <ul class="grid gap-3 text-base text-slate-300">
                      <?php foreach ($card['items'] as $item): ?>
                        <li class="flex items-start gap-2">
                          <span class="mt-1 h-2 w-2 rounded-full bg-primary-500"></span>
                          <?= htmlspecialchars($item) ?>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php elseif (!empty($card['paragraphs'])): ?>
                    <?php foreach ($card['paragraphs'] as $paragraph): ?>
                      <p class="text-base leading-7 text-slate-<?= $index === 0 ? '300' : '400' ?>">
                        <?= htmlspecialchars($paragraph) ?>
                      </p>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
      </div>
    </main>

    <script>
      const cards = Array.from(document.querySelectorAll('[data-card]'));
      const controlButtons = document.querySelectorAll('[data-direction]');
      const progressLabel = document.querySelector('.progress-label');
      const progressBar = document.querySelector('.progress-bar');
      let currentIndex = 0;

      function updateCards(index) {
        cards.forEach((card, i) => {
          card.classList.toggle('hidden', i !== index);
          card.classList.toggle('animate-fade-in', i === index);
          card.setAttribute('aria-hidden', i !== index);
        });

        const total = cards.length;
        progressLabel.textContent = `${index + 1} / ${total}`;
        const width = ((index + 1) / total) * 100;
        progressBar.style.width = `${width}%`;
      }

      controlButtons.forEach((button) => {
        button.addEventListener('click', () => {
          const direction = button.dataset.direction;
          if (direction === 'prev') {
            currentIndex = (currentIndex - 1 + cards.length) % cards.length;
          } else {
            currentIndex = (currentIndex + 1) % cards.length;
          }
          updateCards(currentIndex);
        });
      });

      document.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') {
          currentIndex = (currentIndex - 1 + cards.length) % cards.length;
          updateCards(currentIndex);
        }
        if (event.key === 'ArrowRight') {
          currentIndex = (currentIndex + 1) % cards.length;
          updateCards(currentIndex);
        }
      });

      updateCards(currentIndex);
    </script>
  </body>
</html>
