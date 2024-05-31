function deleteModal(route,csrf, parent = '.content.container-fluid') {
    const modalHTML = `
                <div class="modal custom-modal fade" id="delete_employee" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Employee</h3>
                                    <p>Are you sure want to delete?</p>
                                </div>
                                <div class="modal-btn delete-action">
                                    <div class="row">
                                        <div class="col-6">
                                        <form action="${route}" method="POST">
                                            <input type="hidden" name="_token" value="${csrf}" autocomplete="off">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-primary continue-btn">Delete</button>
                                        </form>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;

    const contentContainer = document.querySelector(parent);

    const modalElement = document.createElement('div');
    modalElement.innerHTML = modalHTML;

    contentContainer.appendChild(modalElement);
}
