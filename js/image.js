$(document).on("click", "#my-node", function(e) {
    domtoimage.toJpeg(this, {
            quality: 1.00
        })
        .then(function(dataUrl) {
            var link = document.createElement('a');
            link.download = 'birthday-unnkonet.jpeg';
            link.href = dataUrl;
            link.click();
        });
})