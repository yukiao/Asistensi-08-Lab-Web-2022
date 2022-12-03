var nama = prompt('Masukkan nama Anda');
console.log(nama);
switch(nama) {
    case '' :
    console.log('Masukkan Nama Anda Terlebih Dahulu');
    break;
    case ' ' :
    console.log('Masukkan Nama Anda Terlebih Dahulu');
    break;
    default :
    var Pertanyaan1 = prompt('Sudah Mengumpulkan Tugas Praktikum ? yes atau no')

    switch(Pertanyaan1) {
        case 'yes':
            var Pertanyaan2 = prompt('Ikut Asistensi ? yes atau no');
            switch(Pertanyaan2) {
                case 'yes':
                    var angka = prompt('Sudah Berapa Kali Asistensi ? 1 atau 2');
                    if (angka == 1){
                        console.log('Asistensi Sekali lagi ya ' + (nama)) ;
                    }else if (angka == 2){
                        console.log('Hebat Kamu  '+(nama));
                    }
                        else {
                        console.log('Masukkan input yang benar yaitu 1 atau 2');
                        }
            
                    break;
                case 'no':
                    console.log('Asistensi Dulu Ya '+(nama));
                    break;
            }
            break;
        case 'no':
            console.log('Jangan lupa di kerja tugas praktikumnya'+(nama));   
            break;
        default :
        console.log('Masukkan input yang benar yaitu yes atau no');
        break;
    }
    
}
