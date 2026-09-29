let data_nama = [];

// Menambah nama
function tambah_nama() {
    let input = document.getElementById("input_nama");
    let nama = input.value.trim();

    if (nama == "") {
        return;
    }

    data_nama.push({
        nama: nama,
        beli: false
    });

    input.value = "";
    tampil_nama();
}

// Menampilkan daftar nama
function tampil_nama() {
    let list = document.getElementById("list_nama");
    let jumlah = 0;

    list.innerHTML = "";

    for (let i = 0; i < data_nama.length; i++) {
        let item = data_nama[i];

        if (item.beli == false) {
            jumlah++;
        }

        list.innerHTML += `
            <li>
                <input type="checkbox"
                    ${item.beli ? "checked" : ""}
                    onclick="toggle_nama(${i})">

                <span>${item.nama}</span>

                <button onclick="hapus_nama(${i})">
                    Hapus
                </button>
            </li>
        `;
    }

    document.getElementById("count_nama").textContent = jumlah;
}

// Mengubah status beli
function toggle_nama(i) {
    if (data_nama[i].beli == false) {
        data_nama[i].beli = true;
    } else {
        data_nama[i].beli = false;
    }

    tampil_nama();
}

// Menghapus satu nama
function hapus_nama(i) {
    data_nama.splice(i, 1);
    tampil_nama();
}

// Menghapus semua nama
function hapusSemua_nama() {
    data_nama = [];
    tampil_nama();
}
