# 투밋네이버(To meet Neighbor)

PHP를 사용한 유저 커뮤니티 사이트

# 개발 목표(필요성)

코로나로 인해 여러 활동이 제한된 학생들에게 정보 공유, 스터디 구인, 소통의 장 마련 등 여러 기능을 제공하는 사이트를 만들기로 했습니다.

# 개발 시스템 개요

## 개요

**Title - 투밋네이버(To meet Neighbor)**<br>
PHP를 사용하여 로그인, 로그아웃, 게시판, 글쓰기, ~~취업정보~~ 등 커뮤니티 사이트 기능을 구현해보자

## 구성

### Frame

#### 메인화면

- [ ] 시계
  - [ ] 시계 그림
  - [ ] 시간
- [ ] 투두리스트
  - [ ] 등록
  - [ ] 수정
  - [ ] 완료
  - [ ] 삭제
- [ ] 최근 등록글 4개
- [ ] 일간 채용(신입 경력) 3개

#### 검색

- [x] 검색 양식(GET)
  - [x] 입력 창
  - [x] 버튼

#### 회원가입

- [ ] 카카오로 가입
- [x] 일반 회원가입
  - [x] 아이디
  - [x] 비번
  - [x] 이메일
  - [x] 닉네임

#### 로그인 / 로그아웃

- [x] 일반 로그인 양식(POST)
- [ ] 카카오로 로그인

### 마이페이지

- [ ] 내 정보
- [ ] 정보 수정
  - [ ] 닉네임 수정
  - [ ] 비밀번호 수정
  - [ ] 이메일 수정
- [ ] 내가 쓴 글
  - [ ] 게시글 수정
  - [ ] 게시글 삭제

#### 커뮤니티

- [ ] 통합 게시판
- [ ] 자유 게시판
- [ ] 구인 게시판
- [ ] 정보 게시판
- [ ] 스터디 게시판
- [ ] 게시글 작성
  - [ ] 제목
  - [ ] 태그
  - [ ] 첨부파일
  - [ ] 내용
  - [ ] 등록
  - [ ] 취소
  - [ ] 댓글
- [ ] 게시글 수정
  - [ ] 제목
  - [ ] 태그
  - [ ] 첨부파일
  - [ ] 내용
  - [ ] 등록
  - [ ] 취소
  - [ ] 게시글 삭제

#### ~~잡코리아~~

- [ ] ~~일간 채용~~
  - [ ] ~~신입Top10~~
  - [ ] ~~경력Top10~~
- [ ] ~~공채소식~~

### Database

#### users 테이블

| 필드명     | 데이터명 | null     | 추가 사항                       | 설명           |
| :--------- | -------- | -------- | ------------------------------- | :------------- |
| u_num      | int      | not null | **auto_increment, primary key** | 사용자 넘버    |
| u_id       | char(20) | not null |                                 | 아이디         |
| u_pass     | char(20) | not null |                                 | 비밀번호       |
| u_nickname | char(20) | not null |                                 | 닉네임         |
| u_email    | char(40) | not null |                                 | 이메일 주소    |
| u_date     | long     | not null |                                 | 계정 생성 날짜 |
| u_role     | char(1)  | not null |                                 | 역할(우선도)   |
| u_image_url| text     | not null |                                 | 프로필 이미지  |

#### posts 테이블

| 필드명         | 데이터명   | null     | 추가 사항                       | 설명             |
| :------------- | ---------- | -------- | ------------------------------- | :--------------- |
| p_num          | int        | not null | **auto_increment, primary key** | 게시글 넘버      |
| p_title        | char(50)   | not null |                                 | 게시글 제목      |
| p_content      | char(2000) | not null |                                 | 게시글 내용      |
| p_date         | long       | not null |                                 | 게시글 등록 날짜 |
| p_option       | char(1)    | not null |                                 | 게시글 옵션      |
| p_post_user_no | int        | not null | **foreign key**                 | 작성자 넘버      |

#### comments 테이블

| 필드명            | 데이터명  | null     | 추가 사항                       | 설명           |
| :---------------- | --------- | -------- | ------------------------------- | :------------- |
| c_num             | int       | not null | **auto_increment, primary key** | 댓글 넘버      |
| c_content         | char(400) | not null |                                 | 댓글 내용      |
| c_date            | long      | not null |                                 | 댓글 등록 날짜 |
| c_option          | char(1)   | not null |                                 | 댓글 옵션      |
| c_comment_user_no | int       | not null | **foreign key**                 | 작성자 넘버    |
| c_comment_post_no | int       | not null | **foreign key**                 | 게시글 넘버    |

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

  - FIN443
  - cydonia0211

- Frontend(디자인)

  - FIN443
  - cydonia0211

- Database
  - FIN443
  - cydonia0211

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

### 문제 발생 대처 <br>

- 5월 24일 node.js하고 python으로 scrapping 기능을 구현 못함.<br>
  > node는 서버구축 없이 패키지 사용 못하고<br>
  > python은 운영체제에 파이썬이 설치 안되있으면 스크립트 실행 안됨.<br>
  > php로 구현하는 방법은 어려워서 포기함<br> > [Link](https://www.scrapingbee.com/blog/web-scraping-php/)
