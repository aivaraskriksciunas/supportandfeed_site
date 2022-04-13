import { registerBlockType } from '@wordpress/blocks';
import { 
    InnerBlocks,
    useBlockProps, 
} from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import { useEntityProp } from '@wordpress/core-data';

const DEFAULT_BLOCK_CONTENTS = [
    [ 'core/list', { placeholder: 'List of ingredients' } ],
];
 
registerBlockType( 'sf/recipe-ingredients-block', {
    title: 'SF Recipe Ingredients',
    icon: 'smiley',
    category: 'sf_blocks',
 
    edit( { setAttributes, attributes } ) {
        const blockProps = useBlockProps();
 
        return ([
            <div { ...blockProps } key='block' className=''>
                <div className='text-primary uppercase text-xl text-druk-bold'>Ingredients</div>

                <InnerBlocks template={DEFAULT_BLOCK_CONTENTS} templateLock={false}></InnerBlocks>
            </div>
        ]);
    },
 
    // No information saved to the block
    // Data is saved to post meta via the hook
    save() {
        return (
            <div className='p-8'>
                <div className='text-primary uppercase text-5xl text-druk-bold mb-4'>Ingredients</div>
                
                <InnerBlocks.Content></InnerBlocks.Content>
            </div>
        );
    },
} );