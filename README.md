# Comprar
Website penjualan yang menyediakan barang - barang murah meriah

## Akun manajer tester
```
Username : test@gmail.com
Password : 123
```
## Akun staff tester
```
Username : staff@gmail.com
Password : 123
```
## Kebutuhan Fungsional
> Pengujung

- `Pengunjung dapat melakukan login`
- `Pengunjung dapat melakukan register` 
- `Pengunjung dapat melakukan log out `
- Pengunjung dapat memasukan barang kedalam keranjang
- Pengunjung dapat melakukan checkout
- Pengunjung dapat melihat data barang berdasarkan filter
- Pengunjung dapat mencari barang

> Manajer

- `Admin dapat melakukan login`
- `Admin dapat melakukan log out`
- `Admin dapat manajemen data barang `
- `Admin dapat manajemen data akun `
- `Admin dapat manajemen data hero `
- Admin dapat melihat history pembelian
- Admin dapat manajemen data pengiriman
- Admin dapat memanajemen data hero di homepage

## Database
> Akun
- id : int
- nama : varchar
- email : varchar
- password : varchar
> Barang
- id : int
- nama : varchar
- harga : int
- deskripsi : varchar
- gambar : varchar
- jenis : varchar
- stok : int
> keranjang
- id : int
- id_user : int
- id_barang : int
- jumlah : int
> hero
- id : int
- gambar : varchar
- label : varchar
- deskripsi : varchar
- id_pembuat : int
- status : enum