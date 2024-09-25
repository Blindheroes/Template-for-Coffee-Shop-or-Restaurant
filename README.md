# Coffee Shop or Restaurant Template

## About this Project

This template was created by the Research and Development division of Multimedia and Internet of Things (M-IOT) Laboratory for those interested in learning the basics of web development. Feel free to fork this repository and modify it as needed. The template is built using CodeIgniter 4, a PHP full-stack web framework that is lightweight, fast, flexible, and secure.  
More information can be found on the [official CodeIgniter site](https://codeigniter.com).

You can also refer to the [user guide](https://codeigniter.com/user_guide/) for the latest version of the framework.

## Setup

copy this project to `xampp\htdocs\` folder.
To run the project, use the following command in your terminal:

```php
php spark serve
```

Alternatively, open it in your browser by visiting:

```markdown
localhost/[project-name]
```

## Requirements

PHP version 8.1 or higher is required, along with the following extensions:

- [intl](https://youtu.be/cFJVokiDhzk)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

## Hints

### Loading Assets and Anchor Tags

You can use the `base_url()` function to create URLs for your assets and links. Examples:

```php
<a href="<?= base_url() ?>public/pages/id/home">Home</a>
<a href="<?= base_url() ?>public/pages/id/menu">Menu</a>
<a href="<?= base_url() ?>public/pages/id/event">Event</a>
<a href="<?= base_url() ?>public/pages/id/about">About</a>
<a href="<?= base_url() ?>public/pages/id/contacts">Contacts</a>

<img src="<?= base_url() ?>assets/img/WALLPAPER FREYA DARK MODE.jpg" alt="Wallpaper">
```

### Where to Add Your Code

Navigate to the `app/view` directory and open any file. You may find comments like this:

```html
<!-- section 1 start -->
<!-- section 1 end -->
```

You can write your code between these comments.

This format ensures that the code and markdown structure are properly displayed.
