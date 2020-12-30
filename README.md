<h1 align="center">Form Plugin for <a href="https://flextype.org/">Flextype</a></h1>

<p align="center">
<a href="https://github.com/flextype-plugins/form/releases"><img alt="Version" src="https://img.shields.io/github/release/flextype-plugins/form.svg?label=version&color=black"></a> <a href="https://github.com/flextype-plugins/form"><img src="https://img.shields.io/badge/license-MIT-blue.svg?color=black" alt="License"></a> <a href="https://github.com/flextype-plugins/form"><img src="https://img.shields.io/github/downloads/flextype-plugins/form/total.svg?color=black" alt="Total downloads"></a> <a href="https://github.com/flextype/flextype"><img src="https://img.shields.io/badge/Flextype-0.9.14-green.svg?color=black" alt="Flextype"></a> <a href="https://scrutinizer-ci.com/g/flextype-plugins/form?branch=dev&color=black"><img src="https://img.shields.io/scrutinizer/g/flextype-plugins/form.svg?branch=dev" alt="Quality Score"></a> <a href=""><img src="https://img.shields.io/discord/423097982498635778.svg?logo=discord&color=black&label=Discord%20Chat" alt="Discord"></a>
</p>

Form Plugin to render user forms for Flextype.

## Dependencies

The following dependencies need to be installed for Form Plugin.

| Item | Version | Download |
|---|---|---|
| [flextype](https://github.com/flextype/flextype) | 0.9.14 | [download](https://github.com/flextype/flextype/releases) |
| [twig](https://github.com/flextype-plugins/twig) | >=1.0.0 | [download](https://github.com/flextype-plugins/twig/releases) |
| [jquery](https://github.com/flextype-plugins/jquery) | >=1.0.0 | [download](https://github.com/flextype-plugins/jquery/releases) |

## Installation

1. Download & Install all required dependencies.
2. Create new folder `project/plugins/form/`
3. Download Form Plugin and unzip plugin content to the folder `project/plugins/form/`

## Documentation

Fieldsets are configuration files written in YAML for Admin Panel to create publish forms. They establish your content model. Essentially, a schema that defines your fields, data types, and the interface used to manage them.

### Fields

* [Text](#field-text)
* [Email](#field-email)
* [Number](#field-number)
* [Password](#field-password)
* [Textarea](#field-textarea)
* [HTML](#field-html)
* [Hidden](#field-hidden)
* [Heading](#field-heading)
* [Select](#field-select)
* [Select Template](#field-select-template)
* [Select Visibility](#field-select-visibility)
* [Select Routable](#field-select-routable)
* [Select Media](#field-select-media)
* [Tags](#field-tags)
* [Date Time Picker](#field-datetimepicker)

### Fields Details

#### <a name="field-text"></a> Text

The plain text field for short text blocks or a short paragraph of information related to a item–basic text content that doesn't need special formatting. <br><br> **Common uses**: Short-form text that doesn't need any formatting; Product titles; Event names

##### Example

```yaml
form:
  fields:
    title:
      title: Title
      type: text
```

##### <a name="field-types"></a> Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `default` | string | | Default value for the field, which will be used when entry is created |
| `class` | string | | CSS class |
| `validation.required` | boolean | | Set is this field required or not. Set `true` or `false` |
| `validation.pattern` | string | | Validation pattern |

#### <a name="field-email"></a> Email

The email field for email text blocks.

##### Example

```yaml
form:
  fields:
    email:
      title: Email
      type: email
```

##### <a name="field-types"></a> Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `default` | string | | Default value for the field, which will be used when entry is created |
| `class` | string | | CSS class |
| `validation.required` | boolean | | Set is this field required or not. Set `true` or `false` |
| `validation.pattern` | string | | Validation pattern |

#### <a name="field-number"></a> Number

The number field for number blocks.

##### Example

```yaml
form:
  fields:
    number:
      title: Number
      type: number
```

##### <a name="field-types"></a> Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `default` | string | | Default value for the field, which will be used when entry is created |
| `class` | string | | CSS class |
| `validation.required` | boolean | | Set is this field required or not. Set `true` or `false` |
| `validation.pattern` | string | | Validation pattern |
| min | int | | Minimum value for number field |
| max | int | | Maximum value for number field |

#### <a name="field-password"></a> Password

The password field for password text blocks

##### Example

```yaml
form:
  fields:
    password:
      title: Password
      type: password
```

##### <a name="field-types"></a> Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `default` | string | | Default value for the field, which will be used when entry is created |
| `class` | string | | CSS class |
| `validation.required` | boolean | | Set is this field required or not. Set `true` or `false` |
| `validation.pattern` | string | | Validation pattern |

#### <a name="field-textarea"></a> Textarea

While a plain text field is used for creating short-form, a textarea field is used for long-form content. <br><br> **Common uses**: Long-form text that doesn't need any formatting; Product descriptions; Event descriptions

##### Example

```yaml
form:
  fields:
    message:
      title: Message
      type: textarea
```

##### <a name="field-types"></a> Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `default` | string | | Default value for the field, which will be used when entry is created |
| `class` | string | | CSS class |
| `validation.required` | boolean | | Set is this field required or not. Set `true` or `false` |
| `validation.pattern` | string | | Validation pattern |

#### <a name="field-html"></a> HTML

While a textarea field is used for creating long-form, unformatted text, a html field is used for long-form content that you can format. The html field gives your collaborators freedom to create and format your content. <br><br> **Common uses**: Most long-form content with links; Blog posts; Articles; Team member bios; Product description; Event details.

We are using [Trumbowyg](https://alex-d.github.io/Trumbowyg/) - a very small but powerful WYSIWYG editor created by Alexandre Demode (@Alex-D)

##### Example

```yaml
form:
  fields:
    content:
      title: Content
      type: html
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `default` | string | | Default value for the field, which will be used when entry is created |
| `class` | string | | CSS class |
| `validation.required` | boolean | | Set is this field required or not. Set `true` or `false` |
| `validation.pattern` | string | | Validation pattern |

#### <a name="field-hidden"></a> Hidden

The hidden field allows storing values in the content file that are not visible to users. This can be useful to store additional information for a page, which is only available to the developer or editors who have access to the filesystem. Such a hidden field can be edited only either directly in the filesystem or programmatically via a script.

##### Example

```yaml
form:
  fields:
    hidden:
      title: Hidden
      type: hidden
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `default` | string | | Default value for the field, which will be used when entry is created |
| `class` | string | | CSS class |
| `validation.required` | boolean | | Set is this field required or not. Set `true` or `false` |
| `validation.pattern` | string | | Validation pattern |

#### <a name="field-heading"></a> Heading

The heading field helps to group larger sets of fields.

##### Example

```yaml
form:
  fields:
    heading:
      title: Heading
      type: heading
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `class` | string | | CSS class |
| `h` | int | 3 | Heading size from 1 to 6 |

#### <a name="field-select"></a> Select

The heading field helps to group larger sets of fields.

##### Example

```yaml
form:
  fields:
    genre:
      title: Genre
      type: select
      options:
        action: Action
        adventure: Adventure
        horror: Horror
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `class` | string | | CSS class |
| `options` | array | | Array of options |

#### <a name="field-select-template"></a> Select Template

Template select field for selecting entry template.

##### Example

```yaml
form:
  fields:
    template:
      title: Template
      type: select_template
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `class` | string | | CSS class |

#### <a name="field-select-visibility"></a> Select Visibility

Visibility select field for selecting entry visibility state.

##### Example

```yaml
form:
  fields:
    visibility:
      title: Visibility
      type: select_visibility
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `class` | string | | CSS class |

#### <a name="field-select-routable"></a> Select Routable

Routable select field for selection entry routable state.

##### Example

```yaml
form:
  fields:
    routable:
      title: Routable
      type: select_routable
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `class` | string | | CSS class |

#### <a name="field-select-media"></a> Select Media

Media select field for selection media for entry.

##### Example

```yaml
form:
  fields:
    cover:
      title: Media
      type: select_media
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `class` | string | | CSS class |

#### <a name="field-tags"></a> Tags

An interactive tags input field.

##### Example

```yaml
form:
  fields:
    tags:
      title: Tags
      type: tags
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `class` | string | | CSS class |

#### <a name="field-datetimepicker"></a> Date Time Picker

The datetimepicker field lets you specify a date and time.

##### Example

```yaml
form:
  fields:
    published_at:
      title: Tags
      type: datetimepicker
```

##### Field Properties

| Property | Type | Default | Description |
| --- | --- | --- | --- |
| `title` | string | | The field label title |
| `help` | string | | Optional help text below the field |
| `size` | string | 12 | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| `class` | string | | CSS class |

### Basic Fieldset Example

`project/fieldsets/default.yaml`

```yaml
title: Default
default_field: title
icon: 'far fa-file-alt'
size: 12
form:
  name: default
  id: default
  method: post
  messages:
    success: true
    error: true
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
{% set registration_form_file = PATH_PROJECT ~ '/fieldsets/default.yaml' %}

{{ flextype.form.render(flextype.serializers.yaml.decode(filesystem().file(registration_form_file).get()), {})|raw }}
```

### Processing form in the Backend

```
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

flextype()->post('{uri:.+}', function(Request $request, Response $response) {

    // get post data
    $post_data = $request->getParsedBody();

    // save date from $post_data
    flextype('entries')->create($post_data['name'], ['title' => $post_data['name']]);

    // redirect
    return $response->withRedirect('./');
})->add('csrf');
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/form/blob/master/LICENSE.txt)
Copyright (c) 2021 [Sergey Romanenko](https://github.com/Awilum)
