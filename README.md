# 투밋네이버(To meet Neighbor)

PHP를 사용한 유저 커뮤니티 사이트

# 개발 목표(필요성)

코로나로 인해 여러 활동이 제한된 학생들에게 정보 공유, 스터디 구인, 소통의 장 마련 등 여러 기능을 제공하는 사이트를 만들기로 했습니다.

# 개발 시스템 개요

## 개요

**Title - 투밋네이버(To meet Neighbor)**<br>
PHP를 사용하여 로그인, 로그아웃, 게시판, 글쓰기, 취업정보 등 커뮤니티 사이트 기능을 구현해보자

## 구성

### Frame

#### 메인화면

- [ ] 투두리스트
  - [ ] 예정
  - [ ] 완료
  - [ ] D-day 설정
- [ ] 시계
  - [ ] 시계 그림
  - [ ] 시간
- [ ] 날씨
  - [ ] 섭씨(30℃)
  - [ ] 위치
  - [ ] 날씨(맑음, 비, 눈 등)
- [ ] 주간 인기글 5개
- [ ] 일간 채용 TOP5
- [ ] 최근메일 5개

#### 검색

- [ ] 검색 양식(GET)
  - [ ] 입력 창
  - [ ] 버튼

#### 회원가입

- [ ] 카카오로 가입
- [ ] 일반 회원가입
  - [ ] 아이디
  - [ ] 비번
  - [ ] 이메일
  - [ ] 이름
  - [ ] 전화번호
  - [ ] 주소
  - [ ] 이메일 수신 여부

#### 로그인 / 로그아웃

- [ ] 일반 로그인 양식(POST)
- [ ] 카카오로 로그인

### 마이페이지

- [ ] 내 정보
- [ ] 정보 수정
  - [ ] 닉네임 수정
  - [ ] 비밀번호 수정
  - [ ] 이메일 수정
  - [ ] 주소 수정
  - [ ] 전화번호 수정
- [ ] 내가 쓴 글
- [ ] 성적 관리
  - [ ] 성적 정보
    - [ ] 전체 평균 성적
    - [ ] 성적 별 출력
  - [ ] 성적 추가/수정
    - [ ] 과목 추가
    - [ ] 과목 별 출력(선택)

#### 커뮤니티

- [ ] 통합 게시판
- [ ] 자유 게시판
- [ ] 구인 게시판
- [ ] 정보 게시판
- [ ] 스터디 게시판
- [ ] 글쓰기
  - [ ] 제목
  - [ ] 태그
  - [ ] 첨부파일
  - [ ] 내용
  - [ ] 확인
  - [ ] 취소
  - [ ] 댓글

#### 잡코리아

- [ ] 일간 채용
  - [ ] 잡코리아 일간 채용 TOP100에서 HTML파싱
  - [ ] 신입
  - [ ] 경력
- [ ] 공채소식

<!-- #### 메일

- [ ] 메일 쓰기
- [ ] 내게 쓰기
- [ ] 임시 보관함
- [ ] 메일 보관함 -->

### Database

#### users 테이블

| 필드명   | 데이터명 | null     | 추가 사항                       | 설명         |
| :------- | -------- | -------- | ------------------------------- | :----------- |
| num      | int      | not null | **auto_increment, primary key** | 사용자 넘버  |
| id       | char(20) | not null |                                 | 아이디       |
| pass     | char(20) | not null |                                 | 비밀번호     |
| nickname | char(20) | not null |                                 | 닉네임       |
| email    | char(40) | not null |                                 | 이메일 주소  |
| role     | char(1)  | not null |                                 | 역할(우선도) |

#### posts 테이블

| 필드명       | 데이터명   | null     | 추가 사항                       | 설명        |
| :----------- | ---------- | -------- | ------------------------------- | :---------- |
| num          | int        | not null | **auto_increment, primary key** | 게시글 넘버 |
| title        | char(50)   | not null |                                 | 게시글 제목 |
| content      | char(2000) | not null |                                 | 게시글 내용 |
| option       | char(1)    | not null |                                 | 게시글 옵션 |
| post_user_no | int        | not null | **foreign key**                 | 작성자 넘버 |

#### comments 테이블

| 필드명            | 데이터명  | null     | 추가 사항                       | 설명        |
| :---------------- | --------- | -------- | ------------------------------- | :---------- |
| c_num             | int       | not null | **auto_increment, primary key** | 댓글 넘버   |
| c_content         | char(400) | not null |                                 | 댓글 내용   |
| c_option          | char(1)   | not null |                                 | 댓글 옵션   |
| c_comment_user_no | int       | not null | **foreign key**                 | 작성자 넘버 |
| c_comment_post_no | int       | not null | **foreign key**                 | 게시글 넘버 |

#### scores 테이블

| 필드명    | 데이터명 | null     | 추가 사항                       | 설명          |
| :-------- | -------- | -------- | ------------------------------- | :------------ |
| s_num     | int      | not null | **auto_increment, primary key** | 학점관리 넘버 |
| s_name    | char(30) | not null |                                 | 과목 이름     |
| s_score   | char(3)  | not null |                                 | 과목 점수     |
| s_credit  | float    | not null |                                 | 과목 학점     |
| s_user_no | int      | not null | **foreign key**                 | 유저 넘버     |

<!-- #### mail 테이블

| 필드명       | 데이터명   | null     | 추가 사항       | 설명        |
| :----------- | ---------- | -------- | --------------- | :---------- |
| num          | int        | not null | **primary key** | 메일 넘버   |
| sender       | char(40)   | not null |                 | 송신 주소   |
| title        | char(100)  | not null |                 | 메일 제목   |
| content      | char(4000) | not null |                 | 메일 내용   |
| option       | char       | not null |                 | 메일 옵션   |
| mail_user_no | int        | not null | **foreign key** | 사용자 넘버 |
-->

<br>

# 개발 환경

## H/W 환경

- Mainboard: ASUS PRIME B460M-A
- CPU: Intel Core I5-10400F CPU @ 2.90GHz
- RAM: 16GB
- GPU: NVIDIA GeForce GTX 1060 6GB
- SSD: KLEVV NEO N400 SSD 240GB

## S/W 환경

- Microsoft Windows 10
- Visual Studio Code

## 사용 언어

- HTML/CSS
- PHP
- JS

## 업무 분담

- Backend(기능)

  - cydonia0211

- Frontend(디자인)
  - FIN443
- Database
  - cydonia0211
  - FIN443

## 개발 일정

- 4월-4째주 <br>
  세부 역할 분담 및 와이어프레임 작성

- 5월-1째주 <br>
  frame별 구성 및 DB설계

- 5월-2째주 <br>
  흐름도 작성 및 프론트엔드단 구성

- 5월-3째주 <br>
  백엔드단 구성

- 5월-4째주 <br>
  백엔드단 구성

- 6월-1째주 <br>
  사이트 결함 확인 및 PPT자료 제작.

- 6월-2째주 <br>
  마무리 및 최종 확인

# 기타

문제점 발생시 해결 방안 <br>
Stack Overflow를 통한 에러 해결방안 검색.
