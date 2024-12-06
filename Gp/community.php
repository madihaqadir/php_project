<?php
include "header.php";
?>

<div class="content-wrapper">
    <div class="text-content">
        <h2>Welcome to Our Community</h2>
        <H3>Benefits</H3>
        <p>Join Our Thriving Community
Connect, grow, and succeed together with like-minded professionals
.</p>
        <p>.1 Knowledge Sharing
Exchange ideas, experiences, and best practices with experts and peers in your field.

Regular workshops and webinars
Member-led learning sessions
Resource library access
Networking Opportunities
Build meaningful connections that can lead to collaborations and career growth.</p>
<p>.2 Monthly networking events
Industry meetups
Mentorship programs
Collaborative Projects
Work on real-world projects with community members to enhance your portfolio.</p>
<p>.3 Team-based learning
Cross-discipline collaboration
Portfolio-building opportunities
Career Growth
Accelerate your professional development through community support.</p>
<p>.4 Job opportunity sharing
Resume reviews
Interview preparation support
Exclusive Resources
Get access to tools and resources that help you excel in your trade.</p>
<p>.5 Industry tools and software
Discounts on learning materials
Community-created guides
Support System
Never feel alone in your journey with our supportive community.</p>
<p>.6 24/7 community forum
Peer-to-peer support
Expert guidance
Join Our Community Today</p>
    </div>
    <div class="image-content">
        <img src="assets/img/contact.jpg.jpg" alt="Community Image">
    </div>
</div>

<style>
    .content-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 50px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .text-content {
        flex: 1;
        padding-right: 20px; /* Add space between the text and image */
    }

    .image-content {
        flex: 1;
        max-width: 50%; /* Set the image width */
        text-align: right;
    }

    .image-content img {
        width: 110%; /* Make the image responsive */
        height: auto;
        border-radius: 10px; /* Add some rounding for a polished look */
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Optional: add shadow for depth */
    }

    /* Adjust layout for smaller screens */
    @media (max-width: 768px) {
        .content-wrapper {
            flex-direction: column; /* Stack the content on mobile */
            text-align: center;
        }

        .text-content {
            padding-right: 0;
            margin-bottom: 20px; /* Add spacing between text and image */
        }

        .image-content {
            text-align: center;
            max-width: 100%;
        }
    }
</style>

<?php
include "footer.php";
?>
