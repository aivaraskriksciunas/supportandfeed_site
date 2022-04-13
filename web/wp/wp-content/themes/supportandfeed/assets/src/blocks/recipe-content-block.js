import { registerBlockType } from '@wordpress/blocks';
import { 
    InnerBlocks,
    useBlockProps, 
} from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import { useEntityProp } from '@wordpress/core-data';

const DEFAULT_BLOCK_CONTENTS = [
    [ 'core/paragraph', { placeholder: 'Instructions' } ],
];
 
registerBlockType( 'sf/recipe-content-block', {
    title: 'SF Recipe Content',
    icon: 'smiley',
    category: 'sf_blocks',
 
    edit( { setAttributes, attributes } ) {
        const blockProps = useBlockProps();
 
        return ([
            <div { ...blockProps } key='block' className='border border-gray-300 p-2'>
                <div className='text-primary uppercase text-xl text-druk-bold'>Recipe</div>

                <InnerBlocks template={DEFAULT_BLOCK_CONTENTS} templateLock={false}></InnerBlocks>

            </div>
        ]);
    },
 
    // No information saved to the block
    // Data is saved to post meta via the hook
    save() {
        return (
            <div className='border border-blue-500 p-8'>
                <div className='text-primary uppercase text-5xl text-druk-bold mb-4'>Recipe</div>

                <div className=''>
                    <InnerBlocks.Content></InnerBlocks.Content>
                </div>
            </div>
        );
    },
} );