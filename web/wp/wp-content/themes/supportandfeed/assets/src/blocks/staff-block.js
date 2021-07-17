
import { registerBlockType } from '@wordpress/blocks'

import { 
    useBlockProps,
    InspectorControls,
    MediaUploadCheck,
    MediaUpload,
    RichText,
} from '@wordpress/block-editor'

import {
    Button,
    TextControl
} from '@wordpress/components'

registerBlockType( 'sf/staff-block', {
    title: 'SF Staff Block',
    icon: 'smiley',
    category: 'sf_blocks',

    attributes: {
        profileUrl: { type: 'string' },
        position: { type: 'string' },
        name: { type: 'string' },
        fullDescription: { type: 'string' },
        linkedInUrl: { type: 'string' },
        twitterUrl: { type: 'string' },
        facebookUrl: { type: 'string' },
        instagramUrl: { type: 'string' },
    },

    edit({ attributes, setAttributes }) {

        const props = useBlockProps();

        const onChangeProfile = ( media ) => {
            setAttributes({ profileUrl: media.sizes.medium.url })
        }

        return [
            <InspectorControls key='controls'>
                <div className='px-4'>

                    {/* Image picker */}
                    <fieldset>
                        {/* Show currently selected image */}
                        <div className='mb-2'>Selected profile image:</div>
                        <p className='italic text-gray-500'>A square image of 300x300 px is recommended.</p>
                        <img className='mb-2' src={ attributes.profileUrl } ></img>

                        {/* Give option to select new image */}
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={ onChangeProfile }  // Save image
                                allowedTypes={[ 'image' ]}   // Only allow images to be selected
                                value={ attributes.profileUrl }
                                render={ ( { open } ) => (
                                    <Button isSecondary onClick={ open } className='mb-4'>Select image</Button>
                                ) }
                            />
                        </MediaUploadCheck>
                    </fieldset>
                    
                    <h3>Social media links (optional):</h3>

                    <fieldset>
                        <TextControl 
                            label='LinkedIn link'
                            value={attributes.linkedInUrl} 
                            onChange={ val => setAttributes({ linkedInUrl: val })}/>
                    </fieldset>

                    <fieldset>
                        <TextControl 
                            label='Instagram link'
                            value={attributes.instagramUrl} 
                            onChange={ val => setAttributes({ instagramUrl: val })}/>
                    </fieldset>

                    <fieldset>
                        <TextControl 
                            label='Facebook link'
                            value={attributes.facebookUrl} 
                            onChange={ val => setAttributes({ facebookUrl: val })}/>
                    </fieldset>

                    <fieldset>
                        <TextControl 
                            label='Twitter link'
                            value={attributes.twitterUrl} 
                            onChange={ val => setAttributes({ twitterUrl: val })}/>
                    </fieldset>

                </div>
            </InspectorControls>,

            <div { ...props } key='block' className='p-4 border border-gray-400'>
                <div className='flex'>
                    <img src={attributes.profileUrl}></img>
                </div>

                <div className='my-4'>
                    <div>Name:</div>
                    <TextControl
                        value={attributes.name}
                        onChange={( val ) => setAttributes({ name: val })}
                    >
                    </TextControl>
                </div>

                <div className='my-4'>
                    <div>Position:</div>
                    <TextControl
                        value={attributes.position}
                        onChange={( val ) => setAttributes({ position: val })}
                    >
                    </TextControl>
                </div>

                <div className='mb-4'>
                    <div>Full description:</div>
                    <RichText
                        className='border border-gray-300 text-sm'
                        value={attributes.fullDescription}
                        onChange={( val ) => setAttributes({ fullDescription: val })}
                    >
                    </RichText>
                </div>
            </div>
        ]

    },

    save({ attributes }) {

        const socialIcon = ( url, iconName ) => {
            if ( !url ) return;

            return <a href={url} target='_blank' className='font-semibold text-gray-700 hover:text-gray-400 mr-4'>
                <span className={'text-xl ' + iconName}></span>
            </a>
        }

        const modalSocialIcon = ( url, iconName ) => {
            if ( !url ) return;

            return <a href={url} target='_blank' className='font-semibold mr-10 text-gray-600 hover:text-green-darkened'>
                <span className={'text-2xl ' + iconName}></span>
            </a>
        }

        return (
        <div {...useBlockProps.save()}>
            
            <div className='staff-block-container flex sm:block lg:flex'>
                <div className='w-1/2 sm:w-full lg:w-1/2 staff-block-profile'>
                    <img src={attributes.profileUrl}></img>
                </div>
                <div className='w-1/2 sm:w-full lg:w-1/2 flex flex-col'>
                    <div className='staff-block-name'>
                        {attributes.name}
                    </div>
                    <div className='staff-block-position flex-1'>
                        {attributes.position}
                    </div>
                    <div className='staff-block-social-links flex'>
                        {socialIcon( attributes.linkedInUrl, 'icon-linkedin2' )}
                        {socialIcon( attributes.facebookUrl, 'icon-facebook' )}
                        {socialIcon( attributes.instagramUrl, 'icon-instagram' )}
                        {socialIcon( attributes.twitterUrl, 'icon-twitter' )}
                    </div>
                </div>
            </div>

            <div className='staff-block-modal hidden'>
                <div className='modal-container'>
                    <div className='flex modal-header'>
                        <div className='modal-header-image'>
                            <img src={attributes.profileUrl}></img>
                        </div>
                        <div className='w-full modal-header-infos'>
                            <div className='flex justify-end'>
                                <svg className='modal-close-btn' xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="#000">
                                    <path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                                </svg>
                            </div>
                            <h1>{attributes.name}</h1>
                            <div>{attributes.position}</div>

                            <div className='modal-header-links flex mt-6'>
                                {modalSocialIcon( attributes.linkedInUrl, 'icon-linkedin2' )}
                                {modalSocialIcon( attributes.facebookUrl, 'icon-facebook' )}
                                {modalSocialIcon( attributes.instagramUrl, 'icon-instagram' )}
                                {modalSocialIcon( attributes.twitterUrl, 'icon-twitter' )}
                            </div>
                        </div>
                    </div>

                    <div class='modal-content'>
                        <div class='modal-content-text'>
                            <RichText.Content value={attributes.fullDescription}/>
                        </div>
                    </div>
                </div>
            </div>
        </div>)
    }
} )