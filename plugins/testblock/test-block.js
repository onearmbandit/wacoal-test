/* This section of the code registers a new block, ets an icon and a category, and indicates what type of field it'll include */

wp.blocks.registerBlockType('brad/border-box', {
    title: 'simple box',
    icon: 'smiley',
    category: 'common',
    attributes: {
        content: {type: 'string'},
        color: {type: 'string'}
    },

    edit: function(props){
        function updateContent(event) {
            props.setAttributes({content: event.target.value})
        }
        function updateColor(value) {
            props.setAttributes({color: value.hex})
        }
        return React.createElement(
            "div",
            null,
            React.createElement(
                "h3",
                null,
                "Simple Box"
            ),
            React.createElement("input", {type:"text", value: props.attributes.content, onChange: updateContent }),
            React.createElement(wp.components.ColorPicker, {color: props.attributes.color, onChangeComplete: updateColor })
        );
    },
    save: function(props) {
        return wp.element.createElement(
            "h3",
            {
                style : {border: "3px solid" + props.attributes.color }
            },
            props.attributes.content
        );
    }
}
)