amplitude_config = {
    'amplitude_shuffle_callback': 'change_shuffle_image'
};

function change_shuffle_image() {
    if (amplitude_shuffle) {
        document.getElementById('shuffle-on-image').style.display = 'inline-block';
        document.getElementById('shuffle-off-image').style.display = 'none';
    } else {
        document.getElementById('shuffle-on-image').style.display = 'none';
        document.getElementById('shuffle-off-image').style.display = 'inline-block';
    }
};