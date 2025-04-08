<?php
/**
 * Template Name: Baizonn Registration
 * Deepesh Bijarnia
 */

get_header();
?>

<section class="baizonn-registration-cta">
  <div class="cta-content">
    <h2>Ready to Empower Your Child’s Future?</h2>
    <p>
      Join hundreds of parents who trust Baizonn Learning Center to build a strong foundation in Math & Science for their children.
    </p>
    <ul class="cta-benefits">
      <li>Small group classes from Primary to JC</li>
      <li>Passionate and qualified teachers</li>
      <li>Engaging hands-on learning and customized worksheets</li>
      <li>Discounts for multi-subject enrolment before <strong>1st May 2025</strong></li>
    </ul>
    <a href="#registration-form" class="baizonn-cta-btn">Start Registration Now</a>
  </div>
</section>


<div class="baizonn-registration container">
    <h1 id="registration-form" class="entry-title">Register Your Child at Baizonn Learning Center</h1>

    <?php if (isset($_GET['success'])): ?>
        <div class="notice success">Thank you for registering! We'll be in touch shortly.</div>
    <?php elseif (isset($_GET['error'])): ?>
        <div class="notice error">Something went wrong. Please try again.</div>
    <?php endif; ?>

    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="baizonn-form">
        <input id="registration" type="hidden" name="action" value="baizonn_register_user">

        <fieldset>
            <legend>Parent Information</legend>
            <label for="parent_name">Full Name</label>
            <input type="text" id="parent_name" name="parent_name" required>

            <label for="parent_email">Email</label>
            <input type="email" id="parent_email" name="parent_email" required>

            <label for="parent_phone">Phone</label>
            <input type="text" id="parent_phone" name="parent_phone" required>
        </fieldset>

        <fieldset>
            <legend>Student Information</legend>
            <label for="student_name">Student Name</label>
            <input type="text" id="student_name" name="student_name" required>

            <label for="level">Level</label>
            <select id="level" name="level" required>
                <option value="">Select Level</option>
                <option value="Primary 1-6">Primary 1-6</option>
                <option value="Secondary 1-4">Secondary 1-4</option>
                <option value="Junior College 1-2">Junior College 1-2</option>
            </select>

            <label for="subjects">Subject(s)</label>
            <select id="subjects" name="subjects[]" multiple required>
                <option value="Math">Mathematics</option>
                <option value="Science">Science</option>
            </select>

            <label for="preferred_time">Preferred Schedule</label>
            <textarea id="preferred_time" name="preferred_time" rows="4" placeholder="e.g. Mon 4-6pm, Sat 10-12pm" required></textarea>

            <label for="diet">Dietary Preference (for Open House)</label>
            <select id="diet" name="diet">
                <option value="None">None</option>
                <option value="Halal">Halal</option>
                <option value="Vegetarian">Vegetarian</option>
            </select>
        </fieldset>

        <button type="submit">Submit Registration</button>
    </form>
</div>


<?php get_footer(); ?>
