function showConfirmDeleteModal(formSelector, title = 'Are you sure?', text = null) {
    if (document.querySelectorAll(formSelector).length > 0) {
        document.querySelectorAll(formSelector).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                var nameData = form.getAttribute('nameData');
                Swal.fire({
                    title: title,
                    text: text != null ? text + nameData : "Want to delete : '" + nameData + "'?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Batal",
                    background: 'var(--bs-body-bg)',
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    }
}

function searchDropdown(selectParentID) {
    document.getElementById(selectParentID).addEventListener('change', function () {
        var selectedValue = this.value;
        var selectedName = this.getAttribute('paramName');
        console.log(selectedName);
        var currentUrl = window.location.href;
        var newUrl;

        if (selectedValue.includes('--')) {
            newUrl = currentUrl.replace(new RegExp(`[?&]${selectedName}=[^&]*(&|$)`), function (match, p1, p2) {
                return p1 === '?' ? '?' : '';
            });
            newUrl = newUrl.replace(/[?&]$/, '');
        } else {
            var param = `${selectedName}=${selectedValue}`;
            if (currentUrl.includes(`${selectedName}=`)) {
                newUrl = currentUrl.replace(new RegExp(`${selectedName}=[^&]*`), param);
            } else {
                newUrl = currentUrl + (currentUrl.includes('?') ? '&' : '?') + param;
            }
        }

        window.location.href = newUrl;
    });
}
