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
