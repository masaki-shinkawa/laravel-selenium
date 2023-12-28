<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="app.css" />
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <body>
    <main class="main">
      <!-- sectionタグで1種類 -->
      <!-- 画像なしカレンダー -->
      <section class="container" id="container1">
        <div class="contents">
          <img class="contents__logo" src="/assets/logo.png" alt="logo" />
          <div class="calendar">
            <h1 class="calendar__year-month">
              <span class="calendar__year-month--number">2023</span>
              <span class="calendar__year-month--unit">年</span>
              <span class="calendar__year-month--number">5</span>
              <span class="calendar__year-month--unit">月</span>
            </h1>
            <div class="calendar__weekdays">
              <div class="calendar__weekday calendar__weekday--red">日</div>
              <div class="calendar__weekday">月</div>
              <div class="calendar__weekday">火</div>
              <div class="calendar__weekday">水</div>
              <div class="calendar__weekday">木</div>
              <div class="calendar__weekday">金</div>
              <div class="calendar__weekday calendar__weekday--blue">土</div>
            </div>
            <div class="calendar__days">
              <div class="calendar__cell">
                <div class="calendar__day calendar__day--outside">30</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">1</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">2</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">3</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">4</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">5</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">6</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">7</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">8</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">9</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">10</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">11</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">12</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">13</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                  <span class="calendar__event--text">その他2件</span>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">14</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">15</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">16</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">17</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">18</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">19</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">20</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">21</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                  <span class="calendar__event--text">その他2件</span>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">22</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">23</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">24</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">25</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">26</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">27</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                  <span class="calendar__event--text">その他2件</span>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">28</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">29</div>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">30</div>
              </div>
              <div class="calendar__cell">
                <div class="calendar__day">31</div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">1</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">2</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">3</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">4</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">5</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">6</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">7</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">8</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">9</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">10</d>
              </div>
            </div>
          </div>
        </div>
        <footer class="calendar__footer">
          <span class="calendar__footer--text"
            >※詳しい出店情報は次の画像へ</span
          >
        </footer>
      </section>

      <!-- 画像ありカレンダー -->
      <!-- container__imageをつけると背景画像付与 -->
      <section class="container container__image">
        <div class="contents">
          <img class="contents__logo" src="/assets/logo.png" alt="logo" />
          <div class="calendar">
            <div class="calendar__year-month">
              <span class="calendar__year-month--number">2023</span>
              <span class="calendar__year-month--unit">年</span>
              <span class="calendar__year-month--number">5</span>
              <span class="calendar__year-month--unit">月</span>
            </div>
            <div class="calendar__weekdays">
              <span class="calendar__weekday calendar__weekday--red">日</span>
              <span class="calendar__weekday">月</span>
              <span class="calendar__weekday">火</span>
              <span class="calendar__weekday">水</span>
              <span class="calendar__weekday">木</span>
              <span class="calendar__weekday">金</span>
              <span class="calendar__weekday calendar__weekday--blue">土</span>
            </div>
            <div class="calendar__days">
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">30</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">1</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">2</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">3</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">4</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">5</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">6</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">7</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">8</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">9</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">10</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">11</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">12</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">13</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                  <span class="calendar__event--text">その他2件</span>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">14</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">15</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">16</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">17</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">18</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">19</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">20</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">21</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                  <span class="calendar__event--text">その他2件</span>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">22</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">23</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">24</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">25</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">26</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">27</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                  <span class="calendar__event--text">その他2件</span>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">28</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">29</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">30</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day">31</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">1</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">2</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">3</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">4</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">5</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">6</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">7</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">8</d>
                <div class="calendar__event">
                  <div class="calendar__event--box">
                    <span>青空マーケット</span>
                  </div>
                </div>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">9</d>
              </div>
              <div class="calendar__cell">
                <d class="calendar__day calendar__day--outside">10</d>
              </div>
            </div>
          </div>
        </div>
        <footer class="calendar__footer">
          <span class="calendar__footer--text"
            >※詳しい出店情報は次の画像へ</span
          >
        </footer>
      </section>

      <!-- 画像なし出店場所詳細 -->
      <!-- container__imageをつけると背景画像付与 -->
      <section class="container">
        <div class="contents">
          <img class="contents__logo" src="/assets/logo.png" alt="logo" />
          <div class="location">
            <h1 class="location__header">出店場所詳細</h1>
            <div class="location__contents">
              <ul class="location__list">
                <li class="location__item">
                  <dl class="location__detail">
                    <dt>
                      <img
                        class="location__detail--icon"
                        src="/assets/clock.svg"
                        alt="出店時刻"
                      />
                    </dt>
                    <dd class="location__detail--text">
                      5月4日(木) 11:00〜16:00
                    </dd>
                  </dl>
                  <dl class="location__detail">
                    <img
                      class="location__detail--icon"
                      src="/assets/location.svg"
                      alt="出店場所"
                    />
                    <span class="location__detail--text">青空マーケット</span>
                  </dl>
                  <dl class="location__detail">
                    <i class="location__detail--icon"></i>
                    <span class="location__detail--address"
                      >京都市山科区大塚元屋敷町36</span
                    >
                  </dl>
                </li>
                <li class="location__item">
                  <dl class="location__detail">
                    <dt>
                      <img
                        class="location__detail--icon"
                        src="/assets/clock.svg"
                        alt="出店時刻"
                      />
                    </dt>
                    <dd
                      class="location__detail--text location__detail--holiday"
                    >
                      5月7日(日) 11:00〜16:00
                    </dd>
                  </dl>
                  <dl class="location__detail">
                    <img
                      class="location__detail--icon"
                      src="/assets/location.svg"
                      alt="出店場所"
                    />
                    <span class="location__detail--text">青空マーケット</span>
                  </dl>
                  <dl class="location__detail">
                    <i class="location__detail--icon"></i>
                    <span class="location__detail--address"
                      >京都市山科区大塚元屋敷町36</span
                    >
                  </dl>
                </li>
                <li class="location__item">
                  <dl class="location__detail">
                    <dt>
                      <img
                        class="location__detail--icon"
                        src="/assets/clock.svg"
                        alt="出店時刻"
                      />
                    </dt>
                    <dd class="location__detail--text">
                      5月11日(木) 11:00〜16:00
                    </dd>
                  </dl>
                  <dl class="location__detail">
                    <img
                      class="location__detail--icon"
                      src="/assets/location.svg"
                      alt="出店場所"
                    />
                    <span class="location__detail--text">青空マーケット</span>
                  </dl>
                  <dl class="location__detail">
                    <i class="location__detail--icon"></i>
                    <span class="location__detail--address"
                      >京都市山科区大塚元屋敷町36</span
                    >
                  </dl>
                </li>
                <li class="location__item">
                  <dl class="location__detail">
                    <dt>
                      <img
                        class="location__detail--icon"
                        src="/assets/clock.svg"
                        alt="出店時刻"
                      />
                    </dt>
                    <dd
                      class="location__detail--text location__detail--saturday"
                    >
                      5月13日(土) 11:00〜16:00
                    </dd>
                  </dl>
                  <dl class="location__detail">
                    <img
                      class="location__detail--icon"
                      src="/assets/location.svg"
                      alt="出店場所"
                    />
                    <span class="location__detail--text">青空マーケット</span>
                  </dl>
                  <dl class="location__detail">
                    <i class="location__detail--icon"></i>
                    <span class="location__detail--address"
                      >京都市山科区大塚元屋敷町36</span
                    >
                  </dl>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- 画像あり出店場所詳細 -->
      <!-- container__imageをつけると背景画像付与 -->
      <section class="container container__image">
        <div class="contents">
          <img class="contents__logo" src="/assets/logo.png" alt="logo" />
          <div class="location">
            <h1 class="location__header">出店場所詳細</h1>
            <div class="location__contents">
              <ul class="location__list">
                <li class="location__item">
                  <dl class="location__detail">
                    <dt>
                      <img
                        class="location__detail--icon"
                        src="/assets/clock.svg"
                        alt="出店時刻"
                      />
                    </dt>
                    <dd class="location__detail--text">
                      5月4日(木) 11:00〜16:00
                    </dd>
                  </dl>
                  <dl class="location__detail">
                    <img
                      class="location__detail--icon"
                      src="/assets/location.svg"
                      alt="出店場所"
                    />
                    <span class="location__detail--text">青空マーケット</span>
                  </dl>
                  <dl class="location__detail">
                    <i class="location__detail--icon"></i>
                    <span class="location__detail--address"
                      >京都市山科区大塚元屋敷町36</span
                    >
                  </dl>
                </li>
                <li class="location__item">
                  <dl class="location__detail">
                    <dt>
                      <img
                        class="location__detail--icon"
                        src="/assets/clock.svg"
                        alt="出店時刻"
                      />
                    </dt>
                    <dd
                      class="location__detail--text location__detail--holiday"
                    >
                      5月7日(日) 11:00〜16:00
                    </dd>
                  </dl>
                  <dl class="location__detail">
                    <img
                      class="location__detail--icon"
                      src="/assets/location.svg"
                      alt="出店場所"
                    />
                    <span class="location__detail--text">青空マーケット</span>
                  </dl>
                  <dl class="location__detail">
                    <i class="location__detail--icon"></i>
                    <span class="location__detail--address"
                      >京都市山科区大塚元屋敷町36</span
                    >
                  </dl>
                </li>
                <li class="location__item">
                  <dl class="location__detail">
                    <dt>
                      <img
                        class="location__detail--icon"
                        src="/assets/clock.svg"
                        alt="出店時刻"
                      />
                    </dt>
                    <dd class="location__detail--text">
                      5月11日(木) 11:00〜16:00
                    </dd>
                  </dl>
                  <dl class="location__detail">
                    <img
                      class="location__detail--icon"
                      src="/assets/location.svg"
                      alt="出店場所"
                    />
                    <span class="location__detail--text">青空マーケット</span>
                  </dl>
                  <dl class="location__detail">
                    <i class="location__detail--icon"></i>
                    <span class="location__detail--address"
                      >京都市山科区大塚元屋敷町36</span
                    >
                  </dl>
                </li>
                <li class="location__item">
                  <dl class="location__detail">
                    <dt>
                      <img
                        class="location__detail--icon"
                        src="/assets/clock.svg"
                        alt="出店時刻"
                      />
                    </dt>
                    <dd
                      class="location__detail--text location__detail--saturday"
                    >
                      5月13日(土) 11:00〜16:00
                    </dd>
                  </dl>
                  <dl class="location__detail">
                    <img
                      class="location__detail--icon"
                      src="/assets/location.svg"
                      alt="出店場所"
                    />
                    <span class="location__detail--text">青空マーケット</span>
                  </dl>
                  <dl class="location__detail">
                    <i class="location__detail--icon"></i>
                    <span class="location__detail--address"
                      >京都市山科区大塚元屋敷町36</span
                    >
                  </dl>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
