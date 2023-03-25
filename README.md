<div align="center" id="top"> 
  <img src="./.github/app.gif" alt="Laravel Validation" />

&#xa0;

  <!-- <a href="https://laravelvalidation.netlify.app">Demo</a> -->
</div>

<h1 align="center">Laravel Validation</h1>

<p align="center">
  <img alt="Github top language" src="https://img.shields.io/github/languages/top/bangadam/laravel-validation?color=56BEB8">

  <img alt="Github language count" src="https://img.shields.io/github/languages/count/bangadam/laravel-validation?color=56BEB8">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/bangadam/laravel-validation?color=56BEB8">

  <img alt="License" src="https://img.shields.io/github/license/bangadam/laravel-validation?color=56BEB8">

  <img alt="Github issues" src="https://img.shields.io/github/issues/bangadam/laravel-validation?color=56BEB8" />

  <img alt="Github forks" src="https://img.shields.io/github/forks/bangadam/laravel-validation?color=56BEB8" />

  <img alt="Github stars" src="https://img.shields.io/github/stars/bangadam/laravel-validation?color=56BEB8" />
</p>

<!-- Status -->

<!-- <h4 align="center">
	🚧  Laravel Validation 🚀 Under construction...  🚧
</h4>

<hr> -->

<p align="center">
  <a href="#dart-about">About</a> &#xa0; | &#xa0; 
  <a href="#sparkles-features">Features</a> &#xa0; | &#xa0;
  <a href="#rocket-technologies">Technologies</a> &#xa0; | &#xa0;
  <a href="#white_check_mark-requirements">Requirements</a> &#xa0; | &#xa0;
  <a href="#checkered_flag-how-to-use">How to use</a> &#xa0; | &#xa0;
  <a href="#memo-license">License</a> &#xa0; | &#xa0;
  <a href="https://github.com/bangadam" target="_blank">Author</a>
</p>

<br>

## :dart: About

Laravel Validation is a package for Laravel developers that provides an easy-to-use, powerful validation system. It allows you to quickly and easily validate user input, ensuring data integrity and accuracy.

## :sparkles: Features

:heavy_check_mark: Easy to use;\
:heavy_check_mark: Powerful validation system;\
:heavy_check_mark: Quickly and easily validate user input;

## :rocket: Technologies

The following tools were used in this project:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)

## :white_check_mark: Requirements

Before starting :checkered_flag:, you need to have [Git](https://git-scm.com), [PHP](https://www.php.net/), and [Composer](https://getcomposer.org/) installed.

## :checkered_flag: How to use

```php
use Bangadam\LaravelValidation\Rules\ValidEmail;

return [
    'email' => ['required', 'string', new ValidEmail()],
];

```

## :checkered_flag: Rules

| Rule name           | Description                                                          |
| ------------------- | -------------------------------------------------------------------- |
| ValidEmail          | Validate email address for email                                     |
| ValidUsername       | Validate username for username (alphanumeric, underscore, dash, dot) |
| ValidUuid           | Validate uuid for uuid                                               |
| ValidStrongPassword | Validate strong password for password                                |
| ValidSlug           | Validate slug for slug                                               |
| ValidUrl            | Validate url for url                                                 |
| ValidIp             | Validate ip for ip                                                   |
| ValidPhoneNumber    | Validate phone number for phone number                               |
| ValidJwt            | Validate jwt for jwt                                                 |
| ValidBirthDate      | Validate birth date for birth date (can't be in future)              |

## :memo: License

This project is under license from MIT. For more details, see the [LICENSE](LICENSE.md) file.

Made with :heart: by <a href="https://github.com/bangadam" target="_blank">bangadam</a>

&#xa0;

<a href="#top">Back to top</a>
