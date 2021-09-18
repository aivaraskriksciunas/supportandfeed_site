
const video = jQuery( '#sf-video' )
const text = jQuery( '#sf-video-text' )

video.animate({
    opacity: 1
}, 2000)

video.trigger('play')

text.css({
    opacity: 0,
    marginLeft: "-40px",
})
text.animate({
    opacity: 1,
    marginLeft: 0,
}, 1000)