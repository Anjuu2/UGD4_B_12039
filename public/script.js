document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', function() {
    // Ambil atribut data-icon dari dropdown-item yang diklik
    const iconClass = this.getAttribute('data-icon');
    
    // Ubah icon dropdown-toggle dengan icon yang dipilih
    document.getElementById('iconDropdown').className = iconClass;
    });
});