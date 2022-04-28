import { registerBlockType } from '@wordpress/blocks';
import { 
    InspectorControls, 
    RichText, 
    useBlockProps, 
    InnerBlocks,
    MediaUploadCheck,
    MediaUpload,
} from '@wordpress/block-editor';
import { TextControl, SelectControl, Button } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { useEntityProp } from '@wordpress/core-data';
 
const TEMPLATE = [ [ 'core/columns', { templateLock: 'all' }, [
    [ 'core/column', { templateLock: 'insert' }, [
        [ 'sf/recipe-ingredients-block' ],
    ] ],
    [ 'core/column', { templateLock: 'insert' }, [
        [ 'sf/recipe-content-block' ],
    ] ],
] ] ];

registerBlockType( 'sf/recipe-meta-block', {
    title: 'SF Recipe Main',
    icon: 'smiley',
    category: 'sf_blocks',
 
    edit( { setAttributes, attributes } ) {
        const blockProps = useBlockProps();
        
        const postType = useSelect(
            ( select ) => select( 'core/editor' ).getCurrentPostType(),
            []
        )
        
        const [ meta, setMeta ] = useEntityProp( 'postType', postType, 'meta' );
 
        return ([
            <InspectorControls key="setting">
                <div className='px-4'>
                    <fieldset>
                        <div className='mb-3'>Recipe full quality image: </div>
                        <div className='mb-4 p-6 border-dashed border-gray-400 border-2'>
                            <img className='' src={ meta['recipe_image'] } ></img>
                        </div>

                        {/* Give option to select new image */}
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={( val ) => { setMeta({ ...meta, recipe_image: val.url }) }}  // Save image
                                allowedTypes={[ 'image' ]}   // Only allow images to be selected
                                value={ meta['recipe_image'] }
                                render={ ( { open } ) => (
                                    <Button isSecondary onClick={ open } className='mb-4'>Select Image</Button>
                                ) }
                            />
                        </MediaUploadCheck>
                    </fieldset>
                </div>
            </InspectorControls>,

            <div { ...blockProps } key='block' className='border border-gray-300 shadow-md py-8 px-16 rounded-md'>
                <div className='text-gray-500 text-center mb-8 text-lg'>Recipe block</div>
                <p className='text-gray-500 text-center mb-8 text-lg'>Use this block to write the recipe</p>

                <div className='text-gray-800'>Author: </div>
                <RichText
                    className='w-full bg-white'
                    value={meta['recipe_author']}
                    onChange={( val ) => { setMeta({ ...meta, recipe_author: val })}}
                ></RichText>

                <div className='text-gray-800 mt-3'>Cook time (optional): </div>
                <TextControl
                    className='w-full bg-white'
                    value={meta['cook_time']}
                    onChange={( val ) => { setMeta({ ...meta, cook_time: val })}}
                    placeholder='45 mins'
                ></TextControl>

                <div className='text-gray-800 mt-3'>Prep time (optional): </div>
                <TextControl
                    className='w-full bg-white'
                    value={meta['prep_time']}
                    onChange={( val ) => { setMeta({ ...meta, prep_time: val })}}
                    placeholder='45 mins'
                ></TextControl>

                <div className='text-gray-800 mt-3'>Yields (optional, meal quantity): </div>
                <TextControl
                    className='w-full bg-white'
                    value={meta['yields']}
                    onChange={( val ) => { setMeta({ ...meta, yields: val })}}
                    placeholder='2 servings'
                ></TextControl>

                <div className='text-gray-800 mt-3'>Optional ingredients (optional): </div>
                <TextControl
                    className='w-full bg-white'
                    value={meta['optionals']}
                    onChange={( val ) => { setMeta({ ...meta, optionals: val })}}
                    placeholder='basil, cheese'
                ></TextControl>

                <div className='text-gray-800 mt-3'>Recipe category: </div>
                <SelectControl
                    className='w-full bg-white'
                    selected={meta['category']}
                    options={[
                        { label: 'Appetizers', value: 'appetizers' },
                        { label: 'Mains', value: 'mains' },
                        { label: 'Sides', value: 'sides' },
                        { label: 'Desserts', value: 'desserts' },
                        { label: 'Drinks', value: 'drinks' },
                    ]}
                    onChange={( val ) => { setMeta({ ...meta, category: val })}}
                ></SelectControl>

                <InnerBlocks
                    template={TEMPLATE}
                    templateLock='all'
                ></InnerBlocks>

            </div>
        ]);
    },
 
    // No information saved to the block
    // Data is saved to post meta via the hook
    save() {
        return (
            <div id='recipeBlock'><InnerBlocks.Content></InnerBlocks.Content></div>
        );
    },
} );