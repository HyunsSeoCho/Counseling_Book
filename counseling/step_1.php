<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>상담예약 - 1단계 | 신문고</title>
    <style type="text/css">
      html, body { text-align: center; background-color: #ECF0F1; }
      div { text-align: center; }
      .title { font-size: 18pt; }
      .form { text-align: left; font-size: 13pt; background-color: white; border: 1px solid gray; border-radius: 10px; margin: 0 auto; width: 650px; }
      .desc1 { text-align: left; font-size: 15pt; }
      .submit { text-align: center; width: 100px; height: 30px; }
      .footer { font-size: 10pt; color: #888888; }
      span.table { text-align: left; border: 1px solid gray; border-radius: 5px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; margin: auto; }
    </style>
  </head>
  <body>
    <div class="title">
      <p><strong>온라인 상담예약 서비스 | 신문고</strong></p>
    </div>
    <p><img src="img/logo.png" alt="" title="" width="150px" /></p>
    <br>&nbsp;<br>
    <div class="form">
      &nbsp;
      <div class="desc1">
        &nbsp;&nbsp;<strong>▷ 기본 정보 입력</strong>
      </div>
      <br>
      <form action="confirm.php" method="post">
        <div style="text-align: left; margin-left: 30px;">
          <select name="학교" style="width: 100px; height: 30px;">
            <option value="도곡중학교">도곡중학교</option>
          </select>
          <select name="학년" style="width: 70px; height: 30px;">
            <option value="1학년">1학년</option><option value="2학년">2학년</option><option value="3학년">3학년</option>
          </select>
          <select name="반" style="width: 70px; height: 30px;">
            <option value="1반">1반</option><option value="2반">2반</option><option value="3반">3반</option><option value="4반">4반</option><option value="5반">5반</option><option value="6반">6반</option><option value="7반">7반</option><option value="8반">8반</option>
          </select>
          <input type="text" name="성명" placeholder="학생명" maxlength="5" style="text-align: center; width: 100px; height: 24px;" required/>
          <br>&nbsp;
          <br>
          <span class="table" style="text-align: left;">
            <strong>성별</strong>
            <input type="radio" name="성별" value="남성" checked/><label style="font-size: 10pt;">남</label>
            <input type="radio" name="성별" value="여성" /><label style="font-size: 10pt;">여</label>
          </span>
          <br>&nbsp;<br>
          <span class="table">
            <strong>연락처</strong>&nbsp;
            <input type="text" name="전화번호" placeholder="전화번호 [하이픈'-' 없이]" value="" maxlength="11" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]+" style="width: 150px; height: 15px;" required />
            &nbsp;
            <input type="email" name="이메일" placeholder="이메일주소" value="" maxlength="50" pattern=".+[@][a-z].+[.].+" style="width: 200px; height: 15px;" required />
          </span>
          <br><br><br>
          <span class="table">
            <strong>상담 선생님</strong>&nbsp;
            <select name="teacher" style="width: 250px; height: 30px;">
              <option selected>:: 선생님 선택 ::</option>
              <option disabled></option>
              <option disabled>▼▼ 담임 선생님 ▼▼</option>
              <option value="1학년1반">1학년1반 [임은영 선생님]</option>
              <option value="1학년1반">1학년2반 [박선미 선생님]</option>
              <option disabled></option>
              <option disabled>▼▼ 비담임교과 선생님 ▼▼</option>
              <option value="비담임교과1">비담임교과1</option>
              <option value="비담임교과2">비담임교과2</option>
            </select>
          </span>
          <br>
          <p><input type="checkbox" id="checkbox" name="checkbox" checked required> <label for="checkbox">개인정보 취급 및 이용에 동의 합니다.</label></p>
          <p style="text-align: center;"><input type="submit" value="작성완료" style="width: 100px; height: 30px;" /></p>
        </form>
      </div>
    </div>
  </body>
</html>
