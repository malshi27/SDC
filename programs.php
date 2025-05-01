<?php include './componets/header.php'; ?>
<?php include './componets/top.php'; ?>
<?php include './componets/menu.php'; ?>
    
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Programs</h1>
            <a href="index.php" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="programs.php" class="h5 text-white">Programs</a>
        </div>
    </div>
</div>
</div>
<!-- Navbar End -->

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<!-- Accordion Start -->
<div class="container my-5" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; ">
    <div class="accordion" id="accordionExample">
        <?php 
        $modules = [
            ["Module 1: Introductory Session (07 Hours)", "Provide comprehensive guidance and support to navigate the challenges and
expectations associated with the profession, fostering professional growth and
enhancing classroom effectiveness."],
            
            ["Module 2: Orientation as a Teacher (07 Hours)", "Provide comprehensive guidance and support to navigate the challenges and
expectations associated with the profession, fostering professional growth and
enhancing classroom effectiveness."],
            
            ["Module 3: Career Progression of an Academic (03 Hours)", "Focuses on improving the skills to navigate the academic environment, set career
goals, engage in continuous professional development, and build a strong network of
professional connections."],
            
            ["Module 4: Teaching Philosophy and Teaching Portfolio (07 Hours)", "Empower academics to articulate their beliefs, values, and goals as educators, and to
showcase their teaching practices and accomplishments through an organized and
professional portfolio."],
            
            ["Module 5: Learning, and Learning Outcomes (07 Hours)", "Assist academics in understanding how people learn and aligning teaching practices
with desired learning outcomes by providing applied knowledge to strategize
teaching."],
            
            ["Module 6: Teaching Methods (15 Hours)", "Assist academics by providing the necessary knowledge and skills to implement
effective, outcome-based, and learner-centered teaching strategies to facilitate
student learning.
"],
            
            ["Module 7: Classroom Management (3.5 Hours)", "Provide academics with effective strategies and techniques to create a classroom
culture that promotes student engagement, behavior management, and academic
success"],
            
            ["Module 8: Motivation of Students (3.5 Hours)", "Provide academics with a deep understanding of the factors that influence student
motivation and empower them to create an engaging learning environment"],
            
            ["Module 9: Innovative and Interactive Teaching (4 Hours)", "Inspire academics to think creatively, explore innovative teaching approaches, and
implement interactive strategies that promote active participation and deep
learning."],
           
            ["Module 10: Training Needs and Target Population (7 Hours)", "Provide academics with the knowledge and skills to conduct comprehensive training needs
assessments, make informed decisions regarding variations within the target population, and
implement inclusive teaching practices to address diverse learning needs and promote
equity in the classroom."],
           
            ["Module 11: Lesson Planning (7 Hours)", "Support academics in developing a well-structured lesson plans that aligns with
learning objectives, serving as a roadmap for effective delivery.
"],
           
            ["Module 12: Assessment and Evaluation (14 Hours)", "Empower academics to design and implement effective assessments that align with
learning objectives, provide feedback, and support student learning and
achievement."],
           
            ["Module 13: Curriculum Development (7 Hours)", "Equip academics with the knowledge to design and enhance curricula that align with
educational goals, address student needs, and promote meaningful learning
experiences.
"],
           
            ["Module 14: Effective Use of Technology for Teaching (3.5 Hours)", "Prepare academics for the digital age by developing skills and confidence to
effectively integrate technology as a powerful tool to enhance teaching practices.
"],
           
            ["Module 15: Reflective Practice, Emotional Intelligence, and Learning Communities (10.5 Hours)", "Develop the skills and mindset for reflective practice, self-awareness, and cultivating emotional
intelligence for a positive and supportive learning environment. Additionally, provide techniques
for creating collaborative learning environments, fostering a sense of community among
students, and encouraging peer support."],
          
            ["Module 16: Stress Management and transactional Analysis (7 Hours)", "Focuses on effective strategies for recognizing, managing, and reducing stress in personal and
professional lives by implementing stress reduction techniques, establishing healthy
boundaries, and improving overall quality of life. Further, it helps participants understand the
dynamics between themselves, their students and peers, fostering a more positive and
productive learning environment."],
          
            ["Module 17: Research in the Life of an Academic (7 Hours)", "Focuses on the proper writing of journal publications along with a review process that
discusses practical tips on dealing with revisions, harsh criticism, and manuscript rejection."],
           
            ["Module 18: Student Counseling (7 Hours)", "Address a wide range of issues that students may face during their academic journey,
including stress, anxiety, depression, relationship difficulties, self-esteem issues, time
management challenges, and career exploration."],
          
            ["Module 19: Soft Skills 1 (7 Hours)", "Equip academics with the essential skills and techniques necessary to effectively
manage their time, prioritize tasks, and optimize productivity"],
           
            ["Module 20: Soft Skills 2 (3.5 Hours)", "Develop academics’ understanding and proficiency in effectively communicating and engaging
with others in various personal and professional contexts."],
          
            ["Module 21: Personality Enhancement of Academics (3.5 Hours)", "Support academics in developing key personality traits and skills, positive attributes, and
behaviors that enhance personal growth and contribute to academic success."],
          
            ["Module 22: Professional Grooming for Academics (7 Hours)", "Enhance academics’ professional grooming and image to present themselves professionally,
emphasizing the importance of personal presentation and professional etiquette in
establishing credibility and fostering success. Additionally, incorporate ethics and
professionalism in teaching, focusing on understanding ethical issues in education,
maintaining professional boundaries, and upholding academic integrity"],

            ["Module 23: Quality Assurance in Higher Education (3 Hours)", "Focuses on the qualifications framework, university admission policy, and activities-related to
maintain academic standards of programmes. Participants are trained to be a part of the
internal quality assurance process.
"],
            ["Module 24: Teaching Practices (21 Hours)", "Participants demonstrate competencies through the preparation of lesson plans and conducting
a teaching session. This support academics in developing effective teaching strategies through
experiential learning with pedagogical approaches and instructional techniques that promote
effective teaching practices. Participants’ performance is marked, written and verbal feedback is
provided and this activity is considered as part of the summative assessment.
"]
        ];
        ?>
        
        <?php foreach ($modules as $index => $module): ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?php echo $index + 1; ?>">
                    <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index + 1; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index + 1; ?>">
                        <?php echo $module[0]; ?>
                    </button>
                </h2>
                <div id="collapse<?php echo $index + 1; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index + 1; ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="background-color: #e9ecef;">
                        <?php echo $module[1]; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Accordion End -->

<?php include './componets/footer.php'; ?>
