# Comprar
Website penjualan yang menyediakan barang - barang murah meriah

## Kebutuhan Fungsional
> Pengujung

- `Pengunjung dapat melakukan login`
- `Pengunjung dapat melakukan register` 
- `Pengunjung dapat melakukan log out `
- Pengunjung dapat memasukan barang kedalam keranjang
- Pengunjung dapat melakukan checkout
- Pengunjung dapat melihat data barang berdasarkan filter
- Pengunjung dapat mencari barang

> Admin

- `Admin dapat melakukan login`
- `Admin dapat melakukan log out`
- `Admin dapat manajemen data barang `
- `Admin dapat mencari barang`
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
> hero
- id : int
- gambar : varchar
- label : varchar
- deskripsi : varchar