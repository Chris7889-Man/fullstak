

let input = document.getElementById('formUsername')
let hasil = document.getElementById('hasilUsername')


input.addEventListener('input', function () {
    hasil.innerHTML = input.value
})
let submitForm = document.getElementById('submitForm')

// input
let username = document.getElementById('username')
let nama = document.getElementById('nama')
let alamat = document.getElementById('alamat')

// text
let usernameText = document.getElementById('UsernameText')
let namaText = document.getElementById('namaText')
let alamatText = document.getElementById('alamatText')

submitForm.addEventListener('submit', function (event) {
    // validasi 
    // usernaem : harus di isi minimal 3 huruf, dan max 3 huruf
    // nama : Harus diisi minimal 3 huruf
    // alamat : Harus diisi minimal 10 huruf

    let errorUsername = document.getElementById('errorUsername')
    let errornama = document.getElementById('errornama')
    let erroralamat = document.getElementById('erroralamat')

    event.preventDefault()
    let valid = true

    //  validasi username
    if (username.value == '' || username.value == null) {
        errorUsername.innerHTML = " Username tidak boleh kosong"
        valid = false
    }
    else if (username.value.length < 3) {
        errorUsername.innerHTML = "Username minimal 3 karakter"
        valid = false
    }
    else if (username.value.length > 30) {
        errorUsername.innerHTML = " Username maximal 30 karakter"
        valid = false
    }
    else {
        errorUsername.innerHTML = ''
    }

    // validasi nama
    if (nama.value == '' || nama.value == null) {
        errornama.innerHTML = 'nama tidak boleh kosong'
        valid = false
    }
    else if (nama.value.length < 3) {
        errornama.innerHTML = 'nama minimal 3 karakter'
        valid = false
    }
    else {
        errornama.innerHTML
    }


    // validasi alamat
    if (alamat.value == '' || alamat.value == null) {
        erroralamat.innerHTML = 'alamat tidak boleh kosong'
        valid = false
    }
    else if (alamat.value.length < 10) {
        erroralamat.innerHTML = 'alamat minimal 10 karakter'
        valid = false
    }
    else {
        erroralamat.innerHTML
    }

    // validasi Stanbuk
    if (stanbuk.value == '' || stanbuk.value == null){
        errorstanbuk.innerHTML = 'stanbuk tidak boleh kosong'
        valid = false
    }

    else if (stanbuk.value.length > 6){
        errorstanbuk.innerHTML = 'stanbuk maxsimal 6 baru bisa diisi'
        valid = false

    }
    else {
        errorstanbuk.innerHTML
    }

    // validasi No. Telepon
    if (notelepon.value == '' || notelepon.value == null){
        errornotelepon.innerHTML = 'No Telepon tidak boleh kosong'
        valid = false
    } 

    else if (notelepon.value.length < 10){
        errornotelepon.innerHTML = 'No. Telepon minimal 10 karakter'
        valid = false
    }

    else if (notelepon.value.length > 13){
        errornotelopon.innerHTML = 'No. Telepon Maxsimal 13 karakter saja tidak boleh lebih'
        valid = false
    }
    else {
        errornotelepon.innerHTML
    }

    // jika berhasil/tidak summit form
    if (valid) {
        usernameText.innerHTML = 'Username  : ' + username.value
        namaText.innerHTML = 'Nama :  ' + nama.value
        alamatText.innerHTML = 'Alamat  : ' + alamat.value
        stanbukText.innerHTML = 'Stanbuk : ' + stanbuk.value
        noteleponText.innerHTML='No. Telepon : ' + notelepon.value
        
    }

    else {
        usernameText.innerHTML = 'Username  : '
        namaText.innerHTML = 'Nama  : '
        alamatText.innerHTML = 'Alamat  : '
        stanbukText.innerHTML = 'Stanbuk : '
        noteleponText.innerHTML = 'No. Telepon'

    }


})

