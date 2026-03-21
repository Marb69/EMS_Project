export const deleteEm = () => {
    const deleteButtons = document.querySelectorAll('.act-del');

    deleteButtons.forEach(button => {
        button.addEventListener('click', async () => {
            const id = button.dataset.id;

            if (!id) {
                console.error('Delete button is missing a data-id attribute.');
                return;
            }

            if (!confirm('Are you sure you want to delete this employee?')) return;

            try {
                const response = await fetch('/EMS_Project/controller/DeleteEmployeeController.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: Number(id) }),
                });

                const data = await response.json();

                if (data.success) {
                    alert('Employee deleted successfully.');
                    button.closest('tr')?.remove();
                } else {
                    alert(data.message ?? 'Failed to delete employee.');
                }
            } catch (error) {
                console.error('Delete request failed:', error);
                alert('An unexpected error occurred. Please try again.');
            }
        });
    });
};