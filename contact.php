<?php
$pageTitle = 'Contact';
$sectionOneHeader = 'Contact Me Here';
$sectionOneContent = '
      <form
        id="fs-frm"
        name="simple-contact-form"
        accept-charset="utf-8"
        action="https://formspree.io/f/mgejryab"
        method="POST"
      >
        <fieldset id="fs-frm-inputs">
          <label for="full-name">Name</label>
          <input
            type="text"
            name="name"
            id="full-name"
            placeholder="First and Last"
            required=""
          >
          <label for="email-address">Email</label>
          <input
            type="email"
            name="_replyto"
            id="email-address"
            placeholder="email@yourname.com"
            required=""
          >
          <label for="message">Message</label>
          <textarea
            rows="5"
            name="message"
            id="message"
            placeholder="Your message here"
            required=""
          ></textarea>
          <input
            type="hidden"
            name="_subject"
            id="email-subject"
            value="Contact Form Submission"
          >
        </fieldset>
        <button type="submit" value="Submit">Submit</button>
      </form>';
$sectionTwoHeader = '';
$sectionTwoContent = '';
include './template.php';
