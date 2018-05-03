$("document").ready(function(){

  var message = "";

  $(".lbox_info").hide();

  $(".lbox").click(function(){
    if($(this).hasClass("l_b1")){
      message = "<h3>Key Stage 1-2</h3><p>Key Stage 1-2 refers broadly to the time your child is in Primary School, and primarily covers Maths, English and Science. The end of Key Stage 2 finishes with an end of year assessment to determine where best to place the student in Secondary School, effectively estimating their expected grades at GCSE and providing them with their first set of targets. This educational bracket is the first real milestone of a student’s academia, and while the future isn’t set in stone, these ‘aspirational grades’ prepare students, teachers and parents for the road ahead. <br><br> Our tutors are adept at motivating these particularly young minds, focusing and preparing them as they take their first steps towards their academic future.</p>";
    text();
  } else if ($(this).hasClass("l_b2")) {
      message = "<h3>SAT's</h3><p>SAT stands for Standard Attainment Test. These end of year assessments take place at the end of Key Stage 2, and test a student’s ability in Maths, English and Science so they’ll be in the best place when they start Secondary School. Teachers use the results from these tests to assign ‘aspirational’ (or target) grades to pupils, placing them in the lesson groups that will best allow them to achieve those targets. <br><br> While OJ Tutors begin to prepare students throughout their Key Stage 1-2 lessons, SAT’s preparation focuses on the tests themselves.  Our tutors use a combination of mock SAT tests and support lessons to evaluate a pupils strengths and work on their weaknesses. SAT’s can be a stressful time for a young pupil, as the pressure from schools is often fuelled by a need for favourable results (SAT’s results directly affect a schools ranking). Having someone to support and guide your child through the pressure can help to make him or her feel relaxed and in control.</p>";
    text();
  } else if ($(this).hasClass("l_b3")) {
      message = "<h3>GCSE's</h3><p>GCSE stands for General Certificate of Secondary Education. At the end of year 11, students will submit coursework and take exams on a number of core and chosen subjects. Your child’s GCSE results are incredibly important when deciding on what he or she would like to pursue when attending college and even impact university applications further down the road. Should your child decide against moving further into education, GCSE’s are still required by many employers who often ask that candidates have a grade C or above for Maths and English. <br><br> OJ Tuition specialises in GCSE preparation, and takes great pride in having steered many of our students to outperform their expected grades to gain places at their chosen colleges, for their chosen subjects.</p>";
    text();
  } else if ($(this).hasClass("l_b4")) {
      message = "<h3>A-LEVEL's</h3><p>A-Level's are specified, subject based qualifications that can lead students into higher education, and are seen as precursors to the pursuit of a career. Essential for many university applications, performing well at A-Level will have a big impact on securing places at desired schools, and with such a high level of competition and volume of applications, it has never been more difficult.<br><br>OJ Tuition offers A-Level tuition for English Literature, English Language and History. Our tutors have extensive experience teaching in colleges and have a vast understanding of A-Level practices and university requirements, aiding students with coursework and exam preparation.</p>";
    text();
  } else if ($(this).hasClass("l_b5")) {
      message = "<h3>S.E.N.</h3><p>SEN (Special Education Needs) is an area of education specialising in helping pupils who have a difficulty or disability when learning. SEN covers a wide spectrum, whether it’s trouble learning a particular subject (eg. English) or difficulty interacting socially, teachers who specialise in this area of education are well equipped to help children reach their full potential despite of perceived setbacks.<br><br>Olivia Johnson has spent many years as a SENCO (Special Education Needs Co-ordinator) in both a mainstream and specialised school setting and as such, her expertise enables her to help all individuals with specific learning difficulties and needs. She fully believes in the graduated approach to learning and has experience of writing both educational health care plans and pupil profiles. Olivia is qualified to assess and write reports and can provide additional support to enable your child reach his/her full potential.</p>";
    text();
    } else {
      message = "<h3>Verbal/Non-Verbal reasoning</h3><p>When applying for grammar schools, many will require applicants to take entry tests. These tests are typically a mix of Maths, English, Verbal and Non-Verbal reasoning and seek to measure a student’s learning potential.<br><br><em>Verbal reasoning</em> reveals how well a student can engage with language and covers various elements such as, testing logical reasoning, symbol manipulation, vocabulary and verbal analogies.<br><br><em>Non-Verbal reasoning</em> doesn’t involve any reading and allows teachers observe a student’s potential while language isn’t a factor. This is helpful when pupils are trying to overcome obstacles such as dyslexia and language barriers.<br><br>Mainstream schools don’t prepare pupils for these tests so extracurricular study is needed. Our tutors will work through mock tests and materials with your child to ensure they are fully prepared for the application process. Competition for grammar school places is fierce, but with a 100% pass rate, OJ Tuition stands above the rest.</p>";
    text();
    }
  });


  function text() {
    $(".lbox_info").hide();
    $(".lbox_info").empty();
    $(".lbox_info").append(message);
    $(".lbox_info").fadeToggle(500);
  };

});
