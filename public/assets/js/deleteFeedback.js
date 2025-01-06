function showModal() {
    document.getElementById('deleteModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('deleteModal').style.display = 'none';
}

function deleteFeedback() {
    // Find the row to delete
    var projectRow = document.getElementById('project-row');

    // Remove the row from the table
    projectRow.remove();

    // Close the modal
    closeModal();
}