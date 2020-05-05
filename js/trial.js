function passItem() {
    $.ajax({
        url: 'php/trialfile.php',
        type: 'POST',
        data: {  },
        success: function (data) {
            window.location = 'php/somefile.txt';

        }
    });
}