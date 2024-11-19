// Fungsi untuk membuka modal detail item
function openModal(title) {
    document.getElementById("modal-title").innerText = title;
    document.getElementById("modal").style.display = "block";
}

// Fungsi untuk menutup modal
function closeModal() {
    document.getElementById("modal").style.display = "none";
}

// Fungsi untuk membuka modal edit di halaman profil
function openEditModal(field) {
    document.getElementById("edit-field").innerText = field;
    document.getElementById("edit-modal").style.display = "block";
}

// Fungsi untuk memperbarui profil (simulasi)
function updateProfile() {
    const editField = document.getElementById("edit-field").innerText;
    const newValue = document.getElementById("edit-input").value;

    if (newValue) {
        alert(`${editField} has been updated to ${newValue}.`);
    } else {
        alert(`Please enter a new value for ${editField}.`);
    }

    document.getElementById("edit-input").value = '';
    closeModal();
}

// Menutup modal ketika klik di luar area modal
window.onclick = function(event) {
    const modal = document.getElementById("modal");
    const editModal = document.getElementById("edit-modal");

    if (event.target === modal) {
        closeModal();
    }

    if (event.target === editModal) {
        closeModal();
    }
}
