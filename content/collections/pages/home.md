---
id: home
blueprint: pages
title: Home
page_sections:
  -
    id: lb6df6a3
    left_flow_content:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Heading 2'
      -
        type: heading
        attrs:
          level: 3
        content:
          -
            type: text
            text: 'Heading 3'
      -
        type: heading
        attrs:
          level: 4
        content:
          -
            type: text
            text: 'Heading 4'
      -
        type: heading
        attrs:
          level: 5
        content:
          -
            type: text
            text: 'Heading 5'
      -
        type: heading
        attrs:
          level: 6
        content:
          -
            type: text
            text: 'Heading 6'
      -
        type: set
        attrs:
          id: lb6thwzy
          values:
            type: image
            image: placeholder-square.jpg
    right_flow_content:
      -
        type: paragraph
        attrs:
          class: lead
        content:
          -
            type: text
            text: 'Lead paragraph aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper.'
      -
        type: paragraph
        attrs:
          class: null
        content:
          -
            type: text
            text: 'Paragraph  with an '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: '#'
                  rel: null
                  target: null
                  title: null
            text: 'inline link'
          -
            type: text
            text: ', some '
          -
            type: text
            marks:
              -
                type: bold
            text: 'bold text'
          -
            type: text
            text: ' and a '
          -
            type: text
            marks:
              -
                type: italic
            text: 'little italic'
          -
            type: text
            text: " for good measure. Oh and let's throw in some strikethrough text, superscript"
          -
            type: text
            marks:
              -
                type: superscript
            text: 'XYZ '
          -
            type: text
            text: 'and subscript'
          -
            type: text
            marks:
              -
                type: subscript
            text: xyz
          -
            type: text
            text: " whilst we're at it. donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus."
      -
        type: paragraph
        attrs:
          class: null
        content:
          -
            type: text
            marks:
              -
                type: small
            text: 'Small paragraph est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo.'
      -
        type: bullet_list
        content:
          -
            type: list_item
            content:
              -
                type: paragraph
                attrs:
                  class: null
                content:
                  -
                    type: text
                    text: 'Unordered list'
          -
            type: list_item
            content:
              -
                type: paragraph
                attrs:
                  class: null
                content:
                  -
                    type: text
                    text: 'Unordered list'
          -
            type: list_item
            content:
              -
                type: paragraph
                attrs:
                  class: null
                content:
                  -
                    type: text
                    text: 'Unordered list'
      -
        type: ordered_list
        attrs:
          order: 1
        content:
          -
            type: list_item
            content:
              -
                type: paragraph
                attrs:
                  class: null
                content:
                  -
                    type: text
                    text: 'Ordered list'
          -
            type: list_item
            content:
              -
                type: paragraph
                attrs:
                  class: null
                content:
                  -
                    type: text
                    text: 'Ordered list'
          -
            type: list_item
            content:
              -
                type: paragraph
                attrs:
                  class: null
                content:
                  -
                    type: text
                    text: 'Ordered list'
      -
        type: blockquote
        content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: '“Blockquote aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nascetur ridiculus mus. Vestibulum id ligula porta felis euismod semper.”'
      -
        type: set
        attrs:
          id: lb6dg4kr
          values:
            type: button
            button_text: Button
            button_link: '#'
    type: two_column
    enabled: true
  -
    id: lb6wc7g2
    title: 'Expandable areas'
    items:
      -
        id: lb6wcbj9
        expand_title: 'Praesent commodo cursus magna vel scelerisque?'
        expand_flow_content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.'
      -
        id: lb6wcoz7
        expand_title: 'Curabitur blandit tempus porttitor?'
        expand_flow_content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.'
      -
        id: lb6wcqzz
        expand_title: 'Cras mattis consectetur purus sit amet fermentum curabitur?'
        expand_flow_content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.'
    type: expandable
    enabled: true
    thisitems:
      -
        id: lb6xbeqz
        expand_title: That
        expand_flow_content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'The other'
    expand_items:
      -
        id: lb7usa3y
        expand_title: 'Expandable area 1'
        expand_flow_content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur.'
      -
        id: lb7usirq
        expand_title: 'Expandable area 2'
        expand_flow_content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur.'
      -
        id: lb7usl2j
        expand_title: 'Expandable area 3'
        expand_flow_content:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur.'
    buttons:
      -
        id: lb7w50k0
        button_text: Button
        button_link: '#'
  -
    id: lb7ut0yq
    title: Steps
    type: steps
    enabled: true
    steps_items:
      -
        id: lb7uxuln
        number: 1
        title: 'Step title ipsum'
        text:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris.'
      -
        id: lb7uyamd
        number: 2
        title: 'Step title ipsum'
        text:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris.'
      -
        id: lb7uyf1a
        number: 3
        title: 'Step title ipsum'
        text:
          -
            type: paragraph
            attrs:
              class: null
            content:
              -
                type: text
                text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris.'
    buttons:
      -
        id: lb7w5aa6
        button_text: Button
        button_link: '#'
      -
        id: lb7w5e4s
        button_text: 'Another button'
        button_link: '#'
updated_by: 5507344a-6fe2-4ce8-8538-edf56d15c838
updated_at: 1670069322
---
