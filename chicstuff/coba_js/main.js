//variabel

const jumlahInput = document.getElementById("jumlah");
const hargaInput = document.getElementById("harga");
const totalSpan = document.getElementById("total");

//function
function calculateTotal() {
    const jumlah = jumlahInput.value;
    const harga = parseInt(hargaInput.value.replace(",",""));
    const total = jumlah * harga;

    totalSpan.innerHTML = `Rp ${total.toLocaleString("id")}`;
}

//menampilkan secara real time
jumlahInput.addEventListener("input", calculateTotal);
hargaInput.addEventListener("input", calculateTotal);

calculateTotal();