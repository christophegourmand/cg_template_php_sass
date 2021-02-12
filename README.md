# cg_template_php_sass

## **warm welcome**

I am pleased to present you my humble template for all of you who want to create a fast and simple Front-end project using native PHP, and using SASS. These two langages will allow beginners to write some simple code, and still split-it into multiples files so they get used of a well-organised project. Which is why I don't use short variables names, or files names : using clear (sometime obvious) names makes comments almost un-necessary, the code being readable like a book (if not please tell me).

Being a junior myself, this project is perfectible, but remember that the goal is to keep the project easy to maintain, specially for beginners.

## **A. 'views' folder**

Every php files who can render some HTML are located in `./views/` folder.

### **1. For each page**

To follow my workflow and project organisation, I recommend that you reproduce the following :

- each page file is named `page_something.php`
- the file `page_something.php` contain mostly the php logic (variables and mostly some `include()`). list of includes :
  - head.php
  - header.php
  - navbar.php (if not in header)
  - topPanel.php (if not in header)
  - page-content.php (who render the HTML of the page)
  - footer.php
  - load_js_script.php
- a folder `page_something` is created to contain the php files rendering the html for this page only. 
  - (if some rendered-html is shared with other pages, it should better be in a separated file located in `./views/common/` !).
- the folder `page_something` will always contain its html content in a file who will be named `page-content.php`. So every folder `page_something` will have such a file, named exactly: `page-content.php`.
- the folder `page_something` of several pages might (if necessary) also contain some `moduleName-body.php`, allowing for each page to overwrite the content of a same module. 
  - example each of these pages can overwrite the body of a same module:
    - `views/pages/page_home/topPanel-body.php`
    - `views/pages/page_aboutus/topPanel-body.php`
    - `views/pages/page_contact/topPanel-body.php`
