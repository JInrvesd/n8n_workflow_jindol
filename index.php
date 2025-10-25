<?php
$profile = [
    'label' => '온라인 명함',
    'name' => '경영지도사 임진택',
    'tagline' => '재무관리 전문 컨설턴트',
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
        'placeholder' => '세부 설명은 추후 입력 예정입니다.',
    ],
    [
        'title' => '비즈니스지원단 현장클리닉',
        'placeholder' => '안내 내용은 추후 입력 예정입니다.',
    ],
    [
        'title' => '업무 레퍼런스',
        'placeholder' => '레퍼런스 정보는 추후 입력 예정입니다.',
    ],
];
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($profile['name']) ?> - 온라인 명함</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <main class="business-card">
      <header class="card-header">
        <div class="profile">
          <div class="profile-photo" aria-hidden="true">사진<br />추후<br />입력</div>
          <div class="profile-details">
            <p class="card-label"><?= htmlspecialchars($profile['label']) ?></p>
            <h1><?= htmlspecialchars($profile['name']) ?></h1>
            <p class="tagline"><?= htmlspecialchars($profile['tagline']) ?></p>
          </div>
        </div>
        <div class="controls" aria-label="카드 이동 버튼">
          <button class="control-btn" data-direction="prev" aria-label="이전 카드">◀</button>
          <span class="progress" aria-live="polite">1 / <?= count($cards) ?></span>
          <button class="control-btn" data-direction="next" aria-label="다음 카드">▶</button>
        </div>
      </header>

      <section class="card-slider" aria-live="polite">
        <?php foreach ($cards as $index => $card): ?>
          <article class="card<?= $index === 0 ? ' active' : '' ?>">
            <h2><?= htmlspecialchars($card['title']) ?></h2>
            <?php if (!empty($card['items'])): ?>
              <ul>
                <?php foreach ($card['items'] as $item): ?>
                  <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php elseif (!empty($card['placeholder'])): ?>
              <p class="placeholder"><?= htmlspecialchars($card['placeholder']) ?></p>
            <?php elseif (!empty($card['paragraphs'])): ?>
              <?php foreach ($card['paragraphs'] as $paragraph): ?>
                <p><?= htmlspecialchars($paragraph) ?></p>
              <?php endforeach; ?>
            <?php endif; ?>
          </article>
        <?php endforeach; ?>
      </section>
    </main>

    <script>
      const cards = document.querySelectorAll('.card');
      const progress = document.querySelector('.progress');
      const controlButtons = document.querySelectorAll('.control-btn');
      let currentIndex = 0;

      function updateCards(index) {
        cards.forEach((card, i) => {
          card.classList.toggle('active', i === index);
          card.setAttribute('aria-hidden', i !== index);
        });
        progress.textContent = `${index + 1} / ${cards.length}`;
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
