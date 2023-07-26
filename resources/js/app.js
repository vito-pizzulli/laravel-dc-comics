import './bootstrap';
import * as bootstrap from 'bootstrap';
import '~resources/scss/app.scss';
import.meta.glob([
    '../img/**'
]);

const deleteForms = document.querySelectorAll('form.form-delete');
deleteForms.forEach(deleteForm => {
    deleteForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const deleteConfirm = window.confirm('Are you sure you want to delete this comic? This action is irreversible.');
        if (deleteConfirm) {
            this.submit();
        }
    });
});