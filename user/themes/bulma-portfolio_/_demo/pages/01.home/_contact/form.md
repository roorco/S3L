---
title: Contact
cache_enable: false
hidemenu: false
form:
    name: contact-form
    action: /home
    fields:
        - name: name
          id: name
          label: Name
          classes: input
          outerclasses: field
          placeholder: Enter your name
          autocomplete: on
          help: "Your name should consist of only letter. No numbers or other characters are accepted"
          attributes: 
            autocomplete: name
          type: text
          validate:
            required: true
        - name: honeypot
          type: honeypot
        - name: email
          id: email
          classes: input
          outerclasses: field
          label: Email
          autocomplete: on
          help: 'The email address should appear as john@domain.something'
          placeholder: Enter your email address
          type: email
          validate:
            rule: email
            required: true

        - name: message
          label: Message
          classes: textarea
          outerclasses: field          
          autocomplete: off
          help: "Your message should not consists of any scripts or other web elements"
          size: long
          placeholder: Enter your message
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
          classes: is-medium is-info is-outlined
          outerclasses: control


    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Thank you for your feedback!
        - display: thanks


---

## Send me a message