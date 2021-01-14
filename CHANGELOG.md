<a name="1.11.0"></a>
# [1.11.0](https://github.com/flextype-plugins/form/compare/v1.10.1...v1.11.0) (2021-01-14)

### Features

* **core** update code base for new Flextype 0.9.16

### Bug Fixes

* **fields** fix select_media field
* **fields** fix select_template field

<a name="1.10.1"></a>
# [1.10.1](https://github.com/flextype-plugins/form/compare/v1.10.0...v1.10.1) (2021-01-07)

### Bug Fixes

* **samples** fix samples.

<a name="1.10.0"></a>
# [1.10.0](https://github.com/flextype-plugins/form/compare/v1.9.0...v1.10.0) (2021-01-07)

### Features

* **core** update code base for new Icon 2.0.0
* **core** update code base for new Twig 2.0.0

<a name="1.9.0"></a>
# [1.9.0](https://github.com/flextype-plugins/form/compare/v1.8.1...v1.9.0) (2021-01-03)

### Features

* **core** update code base for new Flextype 0.9.15
* **core** add plugin.php file

<a name="1.8.1"></a>
# [1.8.1](https://github.com/flextype-plugins/form/compare/v1.8.0...v1.8.1) (2020-12-30)

### Bug Fixes

* **composer** fix dependencies

<a name="1.8.0"></a>
# [1.8.0](https://github.com/flextype-plugins/form/compare/v1.7.0...v1.8.0) (2020-12-30)

### Features

* **core** update code base for new Flextype 0.9.14
* **core** Moving to PHP 7.4
* **core** use new TWIG Plugin 1.7.0

<a name="1.7.0"></a>
# [1.7.0](https://github.com/flextype-plugins/form/compare/v1.6.0...v1.7.0) (2020-12-20)

### Features

* **core** update code base for new Flextype 0.9.13

<a name="1.6.0"></a>
# [1.6.0](https://github.com/flextype-plugins/form/compare/v1.5.1...v1.6.0) (2020-12-07)

### Features

* **core** update code base for new Flextype 0.9.12

<a name="1.5.1"></a>
# [1.5.1](https://github.com/flextype-plugins/form/compare/v1.5.0...v1.5.1) (2020-08-26)

### Bug Fixes

* **fields** fix select_media field

<a name="1.5.0"></a>
# [1.5.0](https://github.com/flextype-plugins/form/compare/v1.4.0...v1.5.0) (2020-08-25)

### Features

* **core** update code base for new Flextype 0.9.11

<a name="1.4.0"></a>
# [1.4.0](https://github.com/flextype-plugins/form/compare/v1.3.0...v1.4.0) (2020-08-19)

### Features

* **core** update code base for new Flextype 0.9.10

<a name="1.3.0"></a>
# [1.3.0](https://github.com/flextype-plugins/form/compare/v1.2.1...v1.3.0) (2020-08-09)

### Features

* **core** New field `number`

<a name="1.2.1"></a>
# [1.2.1](https://github.com/flextype-plugins/form/compare/v1.2.0...v1.2.1) (2020-08-05)

### Bug Fixes

* **core** fixes for new Twig 3

<a name="1.2.0"></a>
# [1.2.0](https://github.com/flextype-plugins/form/compare/v1.1.5...v1.2.0) (2020-08-05)

### Features

* **core** update code base for new Flextype 0.9.9

<a name="1.1.5"></a>
# [1.1.5](https://github.com/flextype-plugins/form/compare/v1.1.4...v1.1.5) (2020-06-23)

### Bug Fixes

* **fieldsets:** fix form messages on submit

<a name="1.1.4"></a>
# [1.1.4](https://github.com/flextype-plugins/form/compare/v1.1.3...v1.1.4) (2020-06-21)

### Features

* **fieldsets:** add ability show form messages on submit
* **fieldsets:** add ability to translate field `help` property


<a name="1.1.3"></a>
# [1.1.3](https://github.com/flextype-plugins/form/compare/v1.1.2...v1.1.3) (2020-06-18)

### Features

* **core:** add ability to display flash messages on form submit

<a name="1.1.2"></a>
# [1.1.2](https://github.com/flextype-plugins/form/compare/v1.1.1...v1.1.2) (2020-06-14)

### Features

* add new `buttons` property for form layout.

### BREAKING CHANGES

- property `submit` removed, use `buttons` property.

<a name="1.1.1"></a>
# [1.1.1](https://github.com/flextype-plugins/form/compare/v1.1.0...v1.1.1) (2020-06-10)

### Bug Fixes

* **fieldsets:** fix translating titles for form submit button.

<a name="1.1.0"></a>
# [1.1.0](https://github.com/flextype-plugins/form/compare/v1.0.6...v1.1.0) (2020-06-10)

### Features

* add new `size` property for form layout.
* add `validation.required` and `validation.pattern` for basic html validation.
* add new fields `name`, `id`, `method`, `submit` for form.

### BREAKING CHANGES

- remove `sections`, use `form.tabs` instead for forms.

<a name="1.0.6"></a>
# [1.0.6](https://github.com/flextype-plugins/form/compare/v1.0.5...v1.0.6) (2020-06-07)

### Features

* **fields:** add new fields `email` and `password`
* **fields:** add basic html validation for fields `text, email, password, textarea`

    Usage:

    ```
      validation:
        required: true
        pattern: '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'
    ```

<a name="1.0.5"></a>
# [1.0.5](https://github.com/flextype-plugins/form/compare/v1.0.4...v1.0.5) (2020-05-27)

### Bug Fixes

* **fields:** fix issue with empty values in the tags field
* **fieldsets-samples:** fix blog fieldsets samples


<a name="1.0.4"></a>
# [1.0.4](https://github.com/flextype-plugins/form/compare/v1.0.3...v1.0.4) (2020-05-20)

### Bug Fixes

* **fieldsets:** fix method rename()

<a name="1.0.3"></a>
# [1.0.3](https://github.com/flextype-plugins/form/compare/v1.0.2...v1.0.3) (2020-05-19)

### Features

* **core:** add new fieldsets samples `blog` and `blog-post`

### Bug Fixes

* **core:** fix flatpickr and trumbowyg localizations

<a name="1.0.2"></a>
# [1.0.2](https://github.com/flextype-plugins/form/compare/v1.0.1...v1.0.2) (2020-05-17)

### Bug Fixes

* **core:** fix(core): fix html editor viewHTML functionality

<a name="1.0.1"></a>
# [1.0.1](https://github.com/flextype-plugins/form/compare/v1.0.0...v1.0.1) (2020-05-07)

### Bug Fixes

* **core:** fix html editor styles on document load

<a name="1.0.0"></a>
# [1.0.0](https://github.com/flextype-plugins/form) (2020-05-06)
* Initial Release
