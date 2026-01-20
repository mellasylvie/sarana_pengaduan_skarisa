
    const btnSiswa = document.getElementById('btnSiswa');
    const btnAdmin = document.getElementById('btnAdmin');
    const formSiswa = document.getElementById('formSiswa');
    const formAdmin = document.getElementById('formAdmin');

    btnSiswa.addEventListener('click', () => {
        btnSiswa.classList.add('active');
        btnAdmin.classList.remove('active');

        formSiswa.classList.remove('d-none');
        formAdmin.classList.add('d-none');
    });

    btnAdmin.addEventListener('click', () => {
        btnAdmin.classList.add('active');
        btnSiswa.classList.remove('active');

        formAdmin.classList.remove('d-none');
        formSiswa.classList.add('d-none');
    });
