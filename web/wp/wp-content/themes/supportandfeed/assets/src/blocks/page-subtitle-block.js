import { registerBlockType } from '@wordpress/blocks';
import { 
    InspectorControls, 
    RichText, 
    useBlockProps, 
} from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import { useEntityProp } from '@wordpress/core-data';
 
registerBlockType( 'sf/page-subtitle-block', {
    title: 'SF Page Subtitle',
    icon: 'smiley',
    category: 'sf_blocks',
 
    edit( { setAttributes, attributes } ) {
        const blockProps = useBlockProps();
        
        const postType = useSelect(
            ( select ) => select( 'core/editor' ).getCurrentPostType()
        )
        
        const [ meta, setMeta ] = useEntityProp( 'postType', postType, 'meta' );
        const onSubtitleChange = ( val ) => {
            setMeta({ ...meta, page_subtitle: val })
        }
 
        return ([
            <div { ...blockProps } key='block' className='bg-gray-200 py-8 px-16 rounded-md'>
                <div className='text-gray-500 text-center mb-8 text-lg'>Meta block (invisible on the page)</div>

                <div className='text-gray-800 mb-2'>Specify page subtitle: </div>
                <RichText
                    className='w-full bg-white'
                    value={meta['page_subtitle']}
                    onChange={onSubtitleChange}
                ></RichText>
            </div>
        ]);
    },
 
    // No information saved to the block
    // Data is saved to post meta via the hook
    save() {
        return null;
    },
} );