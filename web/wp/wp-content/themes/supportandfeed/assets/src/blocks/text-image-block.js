
import { registerBlockType } from '@wordpress/blocks'
import { 
    useBlockProps, 
    InspectorControls,
    ColorPalette,
    InnerBlocks,
    MediaUpload,
    MediaUploadCheck,
} from '@wordpress/block-editor'

import {
    Button,
    ToggleControl,
} from '@wordpress/components'

import SF_ColorPalette from './color-palette'


// Default items that are placed in the nested block
const DEFAULT_BLOCK_CONTENTS = [
    [ 'core/heading', { placeholder: 'Title', level: 1 } ],
    [ 'core/paragraph', { placeholder: 'Type text here or add new blocks' } ],
];


registerBlockType( 'sf/text-image-block', {
    title: 'SF Text block',
    icon: 'smiley',
    category: 'sf_blocks',

    attributes: {
        img: { type: 'string' },
        bgColor: { type: 'string' },
        reverse: { type: 'boolean' },
    },

    edit({ attributes, setAttributes }) {

        const blockProps = useBlockProps();

        // Callbacks
        const onChangeBGColor = ( hexColor ) => {
            setAttributes({ bgColor: hexColor })
        }

        const onChangeImgUrl = ( media ) => setAttributes({ img: media.url })
        const onChangeReverse = ( val ) => setAttributes({ reverse: val })

        // Construct the block
        return ([
            <InspectorControls key="setting">
                <div className='px-4'>

                    {/* Background color picker */}
                    <fieldset className='mb-4'>
                        <legend className="blocks-base-control__label mb-2">
                            Background color
                        </legend>
                        <ColorPalette // Element Tag for Gutenberg standard colour selector
                            onChange={ onChangeBGColor } // onChange event callback
                            colors={ SF_ColorPalette }   // Specify list of available colors
                        />
                    </fieldset>

                    {/* Image picker */}
                    <fieldset>
                        {/* Show currently selected image */}
                        <div className='mb-2'>Selected image:</div>
                        <img className='mb-2' src={ attributes.img } ></img>

                        {/* Give option to select new image */}
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={ onChangeImgUrl }  // Save image
                                allowedTypes={[ 'image' ]}   // Only allow images to be selected
                                value={ attributes.img }
                                render={ ( { open } ) => (
                                    <Button isSecondary onClick={ open } className='mb-4'>Select image</Button>
                                ) }
                            />
                        </MediaUploadCheck>
                    </fieldset>
                    
                    <fieldset>
                        <ToggleControl
                            label="Reverse layout"
                            help={
                                attributes.reverse
                                    ? 'Image is on the left.'
                                    : 'Image is on the right.'
                            }
                            checked={ attributes.reverse }
                            onChange={ onChangeReverse }
                        />
                    </fieldset>
                    
                </div>
            </InspectorControls>,

            <div  { ...blockProps } key='block'>

                {/* Block itself */}
                <div className={`w-full flex ${ attributes.reverse ? 'flex-row-reverse':''}`} style={{ backgroundColor: attributes.bgColor }}>
                    {/* Text panel */}
                    <div className='w-1/2 border-r-2'>
                        <InnerBlocks template={ DEFAULT_BLOCK_CONTENTS }/>
                    </div>
                    {/* Image panel */}
                    <div className='w-1/2'>
                        <img src={ attributes.img }></img>
                    </div>
                </div>
            </div>
        ])

    },
    save({ attributes }) {        
        const blockProps = useBlockProps.save();
        
        return (
            <div {...blockProps} className={`text-image-section w-full lg:flex ${ attributes.reverse ? 'flex-row-reverse':''}`} 
                style={"background-color: " + attributes.bgColor }>
                <div className='lg:w-1/2 px-16 py-16 text-justify font-light'>            
                    <InnerBlocks.Content/>
                </div>
            
                <div id='plantBasedImg' className='section-image lg:w-1/2'>
                    <img src={attributes.img}></img>
                </div>
            </div>
        )

    },
})