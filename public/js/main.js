// Force HTTPS for all AJAX calls
if (window.location.protocol === 'http:') {
    window.location.href = window.location.href.replace('http:', 'https:');
}

// Update any dynamic URL creation to use HTTPS
function getBaseUrl() {
    return window.location.protocol + '//' + window.location.host;
}
