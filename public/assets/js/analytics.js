const GA_MEASUREMENT_ID = 'G-1H3GR6LS7S'
var newScript = document.createElement('script')
newScript.async = true
newScript.src = `https://www.googletagmanager.com/gtag/js?id=${GA_MEASUREMENT_ID}`
var firstScript = document.getElementsByTagName('script')[0]
firstScript.parentNode.insertBefore(newScript, firstScript)
window.dataLayer = window.dataLayer || []
function gtag() {dataLayer.push(arguments)}
gtag('js', new Date())
gtag('config', GA_MEASUREMENT_ID)