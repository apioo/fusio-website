
function setConsent(hasConsent) {
    window.localStorage.setItem('fusio_consent', hasConsent ? '1' : '0')
    updateConsent();
}

function updateConsent() {
    var consent = window.localStorage.getItem('fusio_consent');
    if (consent === null) {
        document.getElementById('fusio_consent').style.display = 'block';
    } else if (consent === '1') {
        document.getElementById('fusio_consent').style.display = 'none';

        gtag('consent', 'update', {
            ad_storage: 'denied',
            ad_personalization: 'denied',
            ad_user_data: 'denied',
            analytics_storage: 'granted',
        });
    } else if (consent === '0') {
        document.getElementById('fusio_consent').style.display = 'none';

        gtag('consent', 'update', {
            ad_storage: 'denied',
            ad_personalization: 'denied',
            ad_user_data: 'denied',
            analytics_storage: 'denied',
        });
    }
}

window.onload = function(e){
    updateConsent();
}
