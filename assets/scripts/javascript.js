// if header is https://nlhapply.000webhostapp.com/ then redirect to https://nlhapply.000webhostapp.com/
if (window.location.href.indexOf('https://nlhapply.000webhostapp.com/') > -1) {
    window.location.href = 'https://nlhapply.000webhostapp.com/'
}

// show file name when selected
document.getElementById('pfp').onchange = function () {
    document.getElementById('pfp-name').innerText = this.value.split('\\').pop()
}

function resetPfp() {
    document.getElementById('userPfpForm').reset()
    document.getElementById('pfp-name').innerText = 'Choose'
}

function checkPFP() {
    var pfp = document.getElementById('pfp')

    if (pfp.value == '') {
        pfp.setCustomValidity('Upload an image')
        document.getElementById('userPfpForm').reportValidity()
    } else {
        // submit form
        pfp.setCustomValidity('')
        document.getElementById('userPfpForm').submit()
    }
}
