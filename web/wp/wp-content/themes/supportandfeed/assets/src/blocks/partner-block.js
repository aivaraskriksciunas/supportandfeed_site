import { registerBlockType } from '@wordpress/blocks';
import { 
    InspectorControls, 
    MediaUploadCheck,
    MediaUpload,
    InnerBlocks,
    useBlockProps, 
} from '@wordpress/block-editor';
import {
    Button
} from '@wordpress/components';

const DEFAULT_BLOCK_CONTENTS = [
    [ 'core/heading', { placeholder: 'Title', level: 2 } ],
    [ 'core/paragraph', { placeholder: 'Type text here or add new blocks' } ],
];
 
registerBlockType( 'sf/partner-block', {
    title: 'SF Partner Block',
    icon: 'smiley',
    category: 'sf_blocks',

    attributes: {
        imageUrl: { type: 'string' }
    },
 
    edit({ setAttributes, attributes }) {
        const blockProps = useBlockProps();

        const onChangeImgUrl = ( media ) => {
            setAttributes({ imageUrl: media.url })
        }
 
        return ([
            <InspectorControls key='controls'>
                <div className='px-4'>
                    <fieldset>
                        {/* Show currently selected image */}
                        <div className='mb-3'>Sponsor logo:</div>
                        <div className='mb-4 p-6 border-dashed border-gray-400 border-2'>
                            <img className='' src={ attributes.imageUrl } ></img>
                        </div>

                        {/* Give option to select new image */}
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={ onChangeImgUrl }  // Save image
                                allowedTypes={[ 'image' ]}   // Only allow images to be selected
                                value={ attributes.imageUrl }
                                render={ ( { open } ) => (
                                    <Button isSecondary onClick={ open } className='mb-4'>Select Logo</Button>
                                ) }
                            />
                        </MediaUploadCheck>
                    </fieldset>
                </div>
            </InspectorControls>,

            <div { ...blockProps } key='block'>
                <div className='md:flex border-gray-300 border'>
                    <div className='md:w-1/3 flex items-center'>
                        <img src={attributes.imageUrl}></img>
                    </div>

                    <div className='md:w-2/3 p-12'>
                        <InnerBlocks template={DEFAULT_BLOCK_CONTENTS}></InnerBlocks>
                    </div>
                </div>
            </div>
        ]);
    },
 
    // No information saved to the block
    // Data is saved to post meta via the hook
    save({ attributes }) {
        const blockProps = useBlockProps.save()

        return (
            <div { ...blockProps }>
                <div className='charity-block md:flex bg-white'>
                    <div className='charity-block-logo md:w-1/3 flex justify-center items-center'>
                        <img src={attributes.imageUrl}></img>
                    </div>

                    <div className='charity-block-content md:w-2/3 p-12 text-justify'>
                        <InnerBlocks.Content/>
                    </div>
                </div>
            </div>
        )
    },
} );