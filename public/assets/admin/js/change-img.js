function changeImg(changedID, imgID) {
    document.getElementById(changedID).addEventListener('change', function (event) {
        const inputFile = event.target;
        const profileImage = document.getElementById(imgID);

        if (inputFile.files && inputFile.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                profileImage.src = e.target.result;
            };

            reader.readAsDataURL(inputFile.files[0]);
        }
    });
}
