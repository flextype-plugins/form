<h1 align="center">Form Plugin for <a href="https://flextype.org/">Flextype</a></h1>

<p align="center">
<a href="https://github.com/flextype-plugins/form/releases"><img alt="Version" src="https://img.shields.io/github/release/flextype-plugins/form.svg?label=version&color=black"></a> <a href="https://github.com/flextype-plugins/form"><img src="https://img.shields.io/badge/license-MIT-blue.svg?color=black" alt="License"></a> <a href="https://github.com/flextype-plugins/form"><img src="https://img.shields.io/github/downloads/flextype-plugins/form/total.svg?color=black" alt="Total downloads"></a> <a href="https://github.com/flextype/flextype"><img src="https://img.shields.io/badge/Flextype-0.9.8-green.svg?color=black" alt="Flextype"></a> <a href="https://scrutinizer-ci.com/g/flextype-plugins/form?branch=dev&color=black"><img src="https://img.shields.io/scrutinizer/g/flextype-plugins/form.svg?branch=dev" alt="Quality Score"></a> <a href=""><img src="https://img.shields.io/discord/423097982498635778.svg?logo=discord&color=black&label=Discord%20Chat" alt="Discord"></a>
</p>

Form Plugin to render user forms for Flextype.

## Dependencies

The following dependencies need to be installed for Form Plugin.

| Item | Version | Download |
|---|---|---|
| [flextype](https://github.com/flextype/flextype) | 0.9.8 | [download](https://github.com/flextype/flextype/releases) |
| [twig](https://github.com/flextype-plugins/twig) | >=1.0.0 | [download](https://github.com/flextype-plugins/twig/releases) |
| [jquery](https://github.com/flextype-plugins/jquery) | >=1.0.0 | [download](https://github.com/flextype-plugins/jquery/releases) |

## Installation

1. Download & Install all required dependencies.
2. Create new folder `/project/plugins/form`
3. Download Form Plugin and unzip plugin content to the folder `/project/plugins/form`

## Documentation

Fieldsets are configuration files written in YAML for Admin Panel to create publish forms. They establish your content model. Essentially, a schema that defines your fields, data types, and the interface used to manage them.

### <a name="field-types"></a> Field types

Form fields are an essential part of the fieldsets and have very powerful options.

| Field type | Description |
| --- | --- |
| `text` | The plain text field for short text blocks or a short paragraph of information related to a item–basic text content that doesn't need special formatting. <br><br> **Common uses**: Short-form text that doesn't need any formatting; Product titles; Event names |
| `email` | The email field for email text blocks |
| `password` | The password field for password text blocks |
| `textarea` | While a plain text field is used for creating short-form, a textarea field is used for long-form content. <br><br> **Common uses**: Long-form text that doesn't need any formatting; Product descriptions; Event descriptions |
| `html` | While a textarea field is used for creating long-form, unformatted text, a html field is used for long-form content that you can format. The html field gives your collaborators freedom to create and format your content. <br><br> **Common uses**: Most long-form content with links; Blog posts; Articles; Team member bios; Product description; Event details |
| `hidden` | The hidden field is like the text field, except it's hidden from the content editor. |
| `heading` | The heading field helps to group larger sets of fields. |
| `select` | A simple selectbox field. |
| `select_template` | Template select field for selecting entry template. |
| `select_visibility` | Visibility select field for selecting entry visibility state. |
| `select_routable` | Routable select field for selection entry routable state. |
| `select_media` | Media select field for selection media for entry. |
| `tags` | An interactive tags input field. |
| `datetimepicker` | The datetimepicker field lets you specify a date and time. |


### <a name="field-properties"></a> Field properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| title | string | | The field label title |
| help | string | | Optional help text below the field |
| size | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| default | string | | Default value for the field, which will be used when entry is created |
| class | string | | CSS class |
| validation.required | boolean | | Set is this field required or not. Set `true` or `false` |
| validation.pattern | string | | Validation pattern |

### Example

`/project/fieldsets/default.yaml`

```yaml
title: Default
default_field: title
icon: 'far fa-file-alt'
size: 12
form:
  name: default
  id: default
  method: post
  buttons:
    submit:
      title: Submit
      type: submit
  tabs:
    main:
      title: admin_main
      fields:
        title:
          title: admin_title
          type: text
          size: 12
        content:
          title: admin_content
          type: html
          size: 12
    settings:
      title: admin_settings
      fields:
        general_heading:
          title: admin_general
          type: heading
        description:
          title: admin_description
          type: textarea
          size: 12
        visibility:
          title: admin_visibility
          type: select_visibility
          size: 4/12
        published_at:
          title: admin_published_at
          type: datetimepicker
          size: 4/12
        routable:
          title: admin_routable
          type: select_routable
          size: 4/12
```

### Rendering forms in the TWIG templates

```
{% set registration_form = PATH_PROJECT ~ '/fieldsets/default.yaml' %}

{{ form.render(serializer_decode(filesystem_read(registration_form), 'yaml'), {})|raw }}
```

## Processing form in the Backend

```
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->post('{uri:.+}', function(Request $request, Response $response) use ($flextype) {

    // get post data
    $post_data = $request->getParsedBody();

    // save date from $post_data
    $flextype['entries']->create($post_data['name'], ['title' => $post_data['name']]);

    // redirect
    return $response->withRedirect('./');
})->add('csrf');
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/form/blob/master/LICENSE.txt)
Copyright (c) 2018-2020 [Sergey Romanenko](https://github.com/Awilum)
