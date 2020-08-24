/**
 * Intalasi
 */

- Extract file masterclass_mp3.zip
- Upload ke root domain di hosting/server
- Done

--------------------------------------------------------------------------------

/**
 * 
Setting Script
 */


Semua konfigurasi script ada di satu file: /application/config/options.php.

Silahkan ubah nilai atau value dari parameter konfigurasi sesuai keinginan.

Beberapa konfigurasi sudah dibuatkan penjelasannya jadi tinggal disesuaikan.

--------------------------------------------------------------------------------

/
**
 * Menambah kode tracking (histats,analytics,ad)
 
*/

- Untuk meletakkan kode sebelum '</head>'
  Edit file /sites/default/config/header.txt

- Untuk meletakkan kode sebelum '</body>'
  Edit file /sites/default/config/footer.txt

--------------------------------------------------------------------------------

/
**
 * Menambah menu
 */

Menu default sudah dibuatkan dalam file berikut: '/sites/default/config/menus.php'
Konfigurasi menu dibuat dalam bentuk array multidimensional 
sehingga support nested/sub menu.
Untuk parameter yang diperlukan hanya 2 yaitu:

  - url -> Tag yang bisa digunakan: %site_url%
  - label -> Nama menu. 
Misal 'Home'

Adapun parameter yang digunakan untuk membuat submenu yaitu 'children'.

Berikut contoh lengkap menu dengan sub menu:


[
  'primary' => [
    [
      'url' => '%site_url%',
      'label' => 'Home'
    ],
    [
      'url' => '%site_url%/halaman1',
      'label' => 'Halaman 1',
      'children' => [
        [
        'url' => '%site_url%/halaman1/sub-halaman1',
        'label' => 'Sub Halaman 1',
        ]
      ]
    ],
    [
      'url' => '%site_url%/halaman2',
      'label' => 'Halaman 2',
      'children' => [
        [
        'url' => '%site_url%/halaman2/sub-halaman2',
        'label' => 'Sub Halaman 2',
        ]
      ]
    ]
  ]
]

Adapun 'primary' adalah ID menu yang kemudian dipanggil menggunakan fungsi berikut:

nav_menus( 'primary' );

Untuk memanggil menu silahkan lihat kode theme default antara line 41-47 di file berikut:

->  /themes/default/header.php
