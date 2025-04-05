<?php include("./layout/header.php"); ?>
<?php
/* Template Name: Teachers */
// Array of teachers with their details
$teachers = [
    [
        'name' => 'Ms Siti',
        'qualification' => 'Bachelor in Science',
        'experience' => '8 Years teaching experience',
        'description' => 'Ms Siti is well equipped in engaging children with knowledge and fun that comes hand in hand in Smart Science Lab. With 8 years of tutoring experience, she leads students in striving to be better, in both academics and well-being. Her enthusiasm encourages students to not only do better, but also to express themselves clearer and have a deeper understanding of themselves and the values that they hold as they grow.',
        'image' => get_template_directory_uri() . '/images/Teacher1.png'
    ],
    [
        'name' => 'Ms Jennifer Chen',
        'qualification' => 'Masters in Education, Post Diploma in Education',
        'experience' => '6 Years teaching experience',
        'description' => 'Ms Jennifer outgoing personality wins her students over easily. With 6 years of experience in science and math education, she can easily convey difficult science and math concepts to the young minds with interactive approaches. Coupled with the centre’s Hands on, Minds on pedagogy, her students are often enthusiastic in classroom learning.',
        'image' => get_template_directory_uri() . 'images/Teacher2.png'
    ],
    [
        'name' => 'Mr Gao Tian',
        'qualification' => 'Bachelor in Science',
        'experience' => '8 Years teaching experience',
        'description' => 'Mr Gao is a nurturing yet fun role model for children to be able to enjoy his company on or off his lessons and activities. He loves to interact with people. Combined with his skills in coding, he has the ability to unleash the passion of learning, coding and fun to any children he meets.',
        'image' => get_template_directory_uri() . 'images/Teacher3.png'
    ],
    [
        'name' => 'Mr Roland Kenny',
        'qualification' => 'Masters in Business Administration',
        'experience' => '11 Years teaching experience',
        'description' => 'Mr Roland, the “Discipline master”. His stern face sets the tone during classes for the upper levels yet his gentle paternal self believes in empowering every child. His students often display greater interest in learning and better grades under his mentor.',
        'image' => get_template_directory_uri() . 'images/Teacher4.png'
    ],
    [
        'name' => 'Mr Peter John',
        'qualification' => 'Bachelor in Science',
        'experience' => '9 Years teaching experience',
        'description' => 'With over 8 years of experience, Mr Peter’s interactive classes bring laughter to his students while imparting crucial examination techniques and knowledge. With a strong Science and Mathematics background, he is able to motivate and guide students in reaching up to their fullest potential.',
        'image' => get_template_directory_uri() . 'images/Teacher5.png'
    ],
    [
        'name' => 'Ms Yati',
        'qualification' => 'Masters in Education, Post Diploma in Education',
        'experience' => '7 Years teaching experience',
        'description' => 'Ms Yati bags more than 7 years of experience and holds a Masters in Education. With vast experience and knowledge, she has helped many students achieve their learning goals.',
        'image' => get_template_directory_uri() . 'images/Teacher6.png'
    ]
];
?>

<main>
    <section class="teachers">
        <h2>Meet Our Teachers</h2>
        
        <?php
        // Loop through the $teachers array and display each teacher
        foreach ($teachers as $teacher) {
            echo '<div class="teacher-container">';
            echo '<img src="' . get_template_directory_uri() . '/images/' . $teacher['image'] . '" alt="' . $teacher['name'] . '">';
            echo '<div class="text">';
            echo '<h3>' . $teacher['name'] . '</h3>';
            echo '<p><strong>Qualification:</strong> ' . $teacher['qualification'] . '</p>';
            echo '<p><strong>Experience:</strong> ' . $teacher['experience'] . '</p>';
            echo '<p>' . $teacher['description'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </section>
</main>
<?php include("./layout/footer.php"); ?>