<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:wght@400&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,400&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-[#FFFFFF] flex flex-col items-center w-[1300px] box-sizing-border">
        <div class="bg-[url('../img/DesaLangLang.png')] bg-[50%_50%] bg-cover bg-no-repeat relative m-[0_0_60px_0] w-[1300px] h-[720px]">
          <div class="bg-[rgba(0,0,0,0.5)] absolute left-[0px] top-[0px] right-[0px] bottom-[0px] h-[100%]">
          </div>
          <div class="absolute left-[110px] top-[10px] right-[110px] flex flex-col items-end box-sizing-border">
            <div class="m-[0_9.5px_0_9.5px] flex flex-row w-[fit-content] box-sizing-border">
              <img class="m-[23px_10px_22.5px_0] w-[12px] h-[14.5px]" src="../icon/location.svg" />
              <span class="break-words font-Asap font-normal text-[15px] leading-[4] text-[#FFFFFF]">
                Kec. Singosari, Kab. Malang, Jawa Timur
              </span>
            </div>
            <div class="rounded-[15px] bg-[#FFFFFF] m-[0_0_101px_0] flex flex-row justify-between p-[10px_53.7px_10px_33.6px] w-[1080px] box-sizing-border">
              <div class="flex flex-row box-sizing-border">
                <div class="bg-[url('../img/logo-lang2.png')] bg-[50%_50%] bg-cover bg-no-repeat m-[0_10.1px_0_0] w-[64.8px] h-[70px]">
                </div>
                <p class="m-[11px_0_11px_0] break-words font-['SF_Pro_Display','Roboto_Condensed'] font-extrabold text-[32px] text-[#1D4001]">
                  <span class="siwalang-sub-28"></span><span></span>
                </p>
              </div>
              <div class="flex flex-row text-3xl font-black justify-center md:justify-start" style="font-family: poppins; margin-top: 18px;">
                <p style="color: rgb(65, 184, 90)">
                  SI
                </p>
                <p style="color: rgb(0, 86, 47)">
                  WALANG
                </p>
              </div>
              <div class="m-[25px_0_25px_0] flex flex-row justify-between w-[280.9px] h-[fit-content] box-sizing-border">
                <span class="m-[0_10px_0_0] w-[113px] break-words font-Asap font-bold text-[15px] leading-[1.333] uppercase text-[#2A6C12]">
                  Beranda
                </span>
                <span class="break-words font-Asap font-bold text-[15px] leading-[1.333] uppercase text-[#232428]">
                  MENU
                </span>
                <span class="break-words font-Asap font-bold text-[15px] leading-[1.333] uppercase text-[#232428]">
                  LogOut
                </span>
              </div>
            </div>
            <div class="m-[0_0_0_1px] flex flex-col items-center self-center w-[fit-content] box-sizing-border">
              <div class="m-[0_0_36px_0] inline-block text-center break-words font-Poppins font-bold text-[62px] leading-[1.2] text-[#FFFFFF]">
                Selamat Datang di<br />
                Desa Lang-Lang<br />
                RW. 01
              </div>
              <div class="m-[0_0_35px_0] inline-block break-words font-Asap font-normal text-[20px] leading-[1.2] text-[#FFFFFF]">
                Portal pengelola kependudukan RW.001 Desa Lang-Lang.
              </div>
              <div class="rounded-[25px] bg-[#2A6C12] flex items-center justify-center p-[20px] w-[158px] box-sizing-border">
                <span class="break-words font-Asap font-semibold text-[20px] leading-[0.7] uppercase text-[#FFFFFF]">
                    Login
                </span>
            </div>            
            </div>
          </div>
        </div>
        {{-- Sejarah Singkat --}}
        <div class="flex flex-col items-center w-[fit-content] box-sizing-border">
          <div class="m-[0 0 60px 0] flex flex-row w-[fit-content] box-sizing-border">
              <!-- Kontainer untuk paragraf -->
              <div class="m-[8px 29.2px 8px 0] flex flex-col box-sizing-border">
                  <div class="m-[0 0 20px 0] flex flex-col self-start w-[fit-content] box-sizing-border">
                      <div class="m-[0 0 8px 0] inline-block self-start break-words font-Asap italic font-bold text-[18px] leading-[1] text-[#2A6C12]">
                          Sejarah Singkat
                      </div>
                      <div class="m-[0 0 8px 0] inline-block break-words font-Poppins font-bold text-[36px] leading-[1.3] text-[#232428]">
                          Tentang Desa Lang-Lang
                      </div>
                      <div class="bg-[#2A6C12] self-start w-[50px] h-[3px]"></div>
                  </div>
                  <div class="m-[0 0 20px 0] flex box-sizing-border"> <!-- Tambahkan margin atas di sini -->
                      <span class="break-words font-Asap font-normal text-[16px] leading-[1.875] text-[rgba(35,36,40,0.71)]">
                          Berasal dari kata ‘Alang-Alang’ atau ‘Ilalang’, nama desa ini terbentuk. Berawal dari hamparan tanah yang memiliki banyak rumput liar, ilalang dan alang-alang inilah, terbentuk salah satu dari 17 Desa yang berada di Kecamatan Singosari Kabupaten Malang. Desa Langlang terbagi menjadi 4 pedusunan dan 4 RW dan 48 RT. Desa Langlang terletak di 112,4 BT dan 7,52 LU dan berada pada ketinggian 466 mdpl. Luas wilayah Desa Langlang ± 498.398 ha.
                      </span>
                  </div>
              </div> 
              <!-- Kontainer untuk logo -->
              <div class="ml-8 mr-8 mt-6 mb-8 box-sizing-border"> <!-- Tambahkan margin atas dan bawah di sini -->
                  <div class="bg-[url('../img/logo-lang2.png')] bg-[50%_50%] bg-cover bg-no-repeat w-[280.4px] h-[300px]"></div>
              </div>
          </div>
      </div>      
          <div class="m-[0_110px_20px_110px] flex w-[1080px] box-sizing-border">
            <div class="rounded-[6px] bg-[#2A6C12] flex flex-row justify-between p-[30px_0_30px_105.1px] w-[1080px] h-[fit-content] box-sizing-border">
              <div class="m-[8px_0_8px_0] flex flex-col items-center box-sizing-border">
                <div class="m-[0_5.3px_6px_5.3px] inline-block break-words font-Poppins font-bold text-[32px] leading-[1] text-[#FFFFFF]">
                  312
                </div>
                <span class="break-words font-['Asap'] font-normal text-[16px] leading-[1] text-[rgba(255,255,255,0.6)]">
                  Laki-laki
                </span>
              </div>
              <div class="flex flex-row w-[810px] h-[fit-content] box-sizing-border">
                <div class="border-l-[1px_solid_rgba(255,255,255,0.12)] flex flex-col items-center p-[8px_0_8px_0] w-[270px] box-sizing-border">
                  <div class="m-[0_0_6px_0.1px] inline-block break-words font-Poppins font-bold text-[32px] leading-[1] text-[#FFFFFF]">
                    254
                  </div>
                  <span class="break-words font-Asap font-normal text-[16px] leading-[1] text-[rgba(255,255,255,0.6)]">
                    Perempuan
                  </span>
                </div>
                <div class="border-l-[1px_solid_rgba(255,255,255,0.12)] flex flex-col items-center p-[8px_0_8px_0] w-[270px] box-sizing-border">
                  <div class="m-[0_0px_6px_0] inline-block break-words font-Poppins font-bold text-[32px] leading-[1] text-[#FFFFFF]">
                    115
                  </div>
                  <span class="break-words font-Asap font-normal text-[16px] leading-[1] text-[rgba(255,255,255,0.6)]">
                    Keluarga
                  </span>
                </div>
                <div class="border-l-[1px_solid_rgba(255,255,255,0.12)] flex flex-col items-center p-[8px_0_8px_0] w-[270px] box-sizing-border">
                  <div class="m-[0_0_6px_0.1px] inline-block break-words font-Poppins font-bold text-[32px] leading-[1] text-[#FFFFFF]">
                    566
                  </div>
                  <span class="break-words font-Asap font-normal text-[16px] leading-[1] text-[rgba(255,255,255,0.6)]">
                    Penduduk
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-[#F1F2F3] m-[0_0_70px_0] flex flex-col items-end p-[50px_27.5px_80px_27.5px] w-[fit-content] box-sizing-border">
            <div class="m-[0_69.2px_34.5px_69.2px] flex flex-col items-center w-[893.9px] box-sizing-border">
              <div class="m-[0_212.2px_2.7px_0] inline-block break-words font-Poppins font-bold text-[17px] leading-[1.412] text-[#2A6C12]">
                Pemimpin
              </div>
              <div class="flex flex-row justify-between w-[893.9px] box-sizing-border">
                <div class="m-[0_21px_27.8px_0] inline-block w-[733.6px] break-words font-Poppins font-bold text-[32px] leading-[1.3] text-[#232428]">
                  Struktur Kepemimpinan RW 01 beserta RT
                </div>
                <div class="m-[41.8px_0_0_0] flex flex-row box-sizing-border">
                  <div class="m-[7px_8.4px_7px_0] inline-block break-words font-Asap font-bold text-[14px] leading-[1] uppercase text-[#232428]">
                    Selengkapnya
                  </div>
                  <div class="rounded-[4px] bg-[#2A6C12] flex p-[9.9px_11.2px_9.9px_11.9px] w-[32px] h-[28px] box-sizing-border">
                    <img class="w-[8.8px] h-[8.3px]" src="../img/panah2-kanan.svg" />
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-row gap-[0_25px] w-[fit-content] box-sizing-border">
              <div class="rounded-[46px] bg-[#2A6C12] m-[147px_0_147px_0] flex p-[17.2px_19.5px_17.2px_19.3px] w-[46px] h-[46px] box-sizing-border">
                <img class="w-[7.1px] h-[11.7px]" src="../assets/vectors/vector_309_x2.svg" />
              </div>
              <div class="rounded-[12px] bg-[url('../assets/images/pexels_andrea_piacquadio_874158_grid_300_x_300_jpg.jpeg')] relative flex flex-col justify-end p-[0_0_20.4px_30px] w-[351px] box-sizing-border">
                <div class="bg-[linear-gradient(0deg,#2A6C12)] absolute left-[50%] top-[247px] translate-x-[-50%] w-[351px] h-[93px]">
                </div>
                <div class="relative m-[0_0_6.6px_0] inline-block self-start break-words font-['Poppins'] font-normal text-[15px] leading-[1.3] text-[#FFFFFF]">
                  Kepala Desa
                </div>
                <span class="relative self-start break-words font-['Poppins'] font-bold text-[21px] leading-[1.3] text-[#FFFFFF]">
                  Yulianto
                </span>
              </div>
              <div class="rounded-[12px] bg-[url('../assets/images/pexels_andrea_piacquadio_874158_grid_300_x_300_jpg.jpeg')] relative flex flex-col justify-end p-[0_0_20.4px_30px] w-[351px] box-sizing-border">
                <div class="bg-[linear-gradient(0deg,#2A6C12)] absolute left-[50%] top-[247px] translate-x-[-50%] w-[351px] h-[93px]">
                </div>
                <div class="relative m-[0_0_6.6px_0] inline-block self-start break-words font-['Poppins'] font-normal text-[15px] leading-[1.3] text-[#FFFFFF]">
                  Ketua RW 01
                </div>
                <span class="relative self-start break-words font-Poppins font-bold text-[21px] leading-[1.3] text-[#FFFFFF]">
                  Sudiono
                </span>
              </div>
              <div class="rounded-[12px] bg-[url('../assets/images/pexels_andrea_piacquadio_874158_grid_300_x_300_jpg.jpeg')] relative flex flex-col justify-end p-[0_0_21px_30px] w-[351px] box-sizing-border">
                <div class="bg-[linear-gradient(0deg,#2A6C12)] absolute left-[50%] top-[247px] translate-x-[-50%] w-[351px] h-[93px]">
                </div>
                <div class="relative m-[0_0_6px_0] inline-block self-start break-words font-Poppins font-normal text-[15px] leading-[1.3] text-[#FFFFFF]">
                  Ketua RT 01
                </div>
                <span class="relative self-start break-words font-Poppins font-bold text-[21px] leading-[1.3] text-[#FFFFFF]">
                  Wahyu Dian kristanto
                </span>
              </div>
              <div class="rounded-[46px] bg-[#2A6C12] m-[147px_0_147px_0] flex p-[17.2px_19.3px_17.2px_19.5px] w-[46px] h-[46px] box-sizing-border">
                <img class="w-[7.1px] h-[11.7px]" src="../assets/vectors/vector_20_x2.svg" />
              </div>
            </div>
          </div>
          <div class="m-[0_128.9px_70px_91.1px] flex flex-col items-center w-[fit-content] box-sizing-border">
            <div class="border-b-[1px_solid_rgba(0,0,0,0.06)] m-[0_0_40px_0] flex flex-col w-[1080px] box-sizing-border">
              <div class="m-[0_0_19px_0] flex flex-row justify-between w-[1080px] box-sizing-border">
                <div class="flex flex-col box-sizing-border">
                  <div class="m-[0_0_8.9px_0] inline-block break-words font-Poppins font-bold text-[32px] leading-[1.3] text-[#232428]">
                    Agenda Kegiatan Warga RW.01 
                  </div>
                  <span class="self-start break-words font-Asap font-normal text-[16px] leading-[1.5] text-[#82858F]">
                    Jangan lewatkan kegiatan mendatang
                  </span>
                </div>
                <div class="m-[34.1px_0_12.8px_0] flex flex-row box-sizing-border">
                  <div class="m-[5.7px_8px_8.3px_0] inline-block break-words font-Asap font-bold text-[14px] leading-[1] uppercase text-[#232428]">
                    Selengkapnya
                  </div>
                  <div class="rounded-[4px] bg-[#2A6C12] flex p-[9.9px_11.2px_9.9px_11.9px] w-[32px] h-[28px] box-sizing-border">
                    <img class="w-[8.8px] h-[8.3px]" src="../img/panah2-kanan.svg" />
                  </div>
                </div>
              </div>
              <div class="bg-[#2A6C12] self-start w-[40px] h-[3px]">
              </div>
            </div>
            <div class="m-[0_9.7px_40px_0] flex flex-row gap-[0_96.5px] w-[fit-content] box-sizing-border">
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
            </div>
            <div class="m-[0_9.7px_40px_0] flex flex-row gap-[0_96.5px] w-[fit-content] box-sizing-border">
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
            </div>
            <div class="m-[0_9.7px_0_0] flex flex-row gap-[0_96.5px] w-[fit-content] box-sizing-border">
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19.1px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19.1px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
              <div class="flex flex-col box-sizing-border">
                <div class="rounded-[4px] bg-[#2A6C12] m-[0_0_19.1px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
                  <div class="bg-[#212121] flex p-[5px_10px_5px_10px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      10
                    </span>
                  </div>
                  <div class="bg-[#2A6C12] m-[0_0px_0_0] p-[5px_10px_5px_10px] w-[104.1px] box-sizing-border">
                    <span class="break-words font-['Asap'] font-normal text-[14px] leading-[1] text-[#FFFFFF]">
                      Maret 2024
                    </span>
                  </div>
                </div>
                <div class="m-[0_0_20.4px_0] flex self-start box-sizing-border">
                  <span class="break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Kerja Bakti Bersama 
                  </span>
                </div>
                <div class="flex flex-row w-[fit-content] box-sizing-border">
                  <div class="m-[0.4px_12px_0_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    07:00 - 08:30
                  </div>
                  <div class="rounded-[5px] bg-[#2A6C12] m-[7px_12.4px_3.4px_0] w-[5px] h-[5px]">
                  </div>
                  <div class="m-[0_0_0.4px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                    Jalan raya poros Lang-Lang
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-[#F1F2F3] flex flex-col items-end p-[50px_83.7px_80px_100px] w-[fit-content] box-sizing-border">
            <div class="m-[0_0_32.8px_0] flex flex-col w-[fit-content] box-sizing-border">
              <div class="m-[0_332.4px_2.7px_0] inline-block self-center break-words font-['Poppins'] font-bold text-[17px] leading-[1.412] text-[#2A6C12]">
                Dokumentasi
              </div>
              <div class="m-[0_0_0.2px_0] inline-block self-start break-words font-['Poppins'] font-bold text-[32px] leading-[1.3] text-[#232428]">
                Arsip Kegiatan Warga RW.01
              </div>
              <div class="flex flex-row self-end w-[fit-content] box-sizing-border">
                <div class="m-[7px_8.4px_7px_0] inline-block break-words font-Asap font-bold text-[14px] leading-[1] uppercase text-[#232428]">
                  Selengkapnya
                </div>
                <div class="rounded-[4px] bg-[#2A6C12] flex p-[9.9px_11.2px_9.9px_11.9px] w-[32px] h-[28px] box-sizing-border">
                  <img class="w-[8.8px] h-[8.3px]" src="../img/panah2-kanan.svg" />
                </div>
              </div>
            </div>
            <div class="m-[0_16.3px_0_0] flex flex-row gap-[0_25px] w-[1100px] box-sizing-border">
              <div class="rounded-[15px] bg-[url('../assets/images/arsip.png')] bg-[length:100%] relative flex p-[212px_26.2px_15.8px_25px] w-[350px] box-sizing-border">
                <div class="rounded-t-[15px] bg-[url('../assets/images/unsplashcw_cj_nfa_14.jpeg')] bg-[50%_50%] bg-cover bg-no-repeat absolute top-[0px] right-[-13px] w-[363px] h-[226.7px]">
                </div>
                <div class="rounded-b-[12px] bg-[#FFFFFF] flex flex-col items-center p-[15px_0_15px_0] w-[298.8px] h-[fit-content] box-sizing-border">
                  <div class="m-[0_0_11px_2px] inline-block break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Persiapan Karnaval Desa
                  </div>
                  <div class="m-[0_118.3px_0_0] flex flex-row w-[fit-content] box-sizing-border">
                    <div class="rounded-[5px] bg-[#2A6C12] m-[5px_5px_5px_0] w-[5px] h-[5px]">
                    </div>
                    <span class="break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                      10 Maret 2024
                    </span>
                  </div>
                </div>
              </div>
              <div class="rounded-[15px] bg-[url('../assets/images/arsip.png')] bg-[length:100%] relative flex p-[203px_26.2px_24.8px_25px] w-[350px] box-sizing-border">
                <div class="rounded-t-[15px] bg-[url('../assets/images/unsplashcw_cj_nfa_14.jpeg')] bg-[50%_50%] bg-cover bg-no-repeat absolute top-[0px] right-[-13px] w-[363px] h-[226.7px]">
                </div>
                <div class="rounded-b-[12px] bg-[#FFFFFF] flex flex-col items-center p-[15px_0_15px_0] w-[298.8px] h-[fit-content] box-sizing-border">
                  <div class="m-[0_0_11px_2px] inline-block break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Persiapan Karnaval Desa
                  </div>
                  <div class="m-[0_118.3px_0_0] flex flex-row w-[fit-content] box-sizing-border">
                    <div class="rounded-[5px] bg-[#2A6C12] m-[5px_5px_5px_0] w-[5px] h-[5px]">
                    </div>
                    <span class="break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                      10 Maret 2024
                    </span>
                  </div>
                </div>
              </div>
              <div class="rounded-[15px] bg-[url('../assets/images/arsip.png')] bg-[length:100%] relative flex p-[203px_26.2px_24.8px_25px] w-[350px] box-sizing-border">
                <div class="rounded-t-[15px] bg-[url('../assets/images/unsplashcw_cj_nfa_14.jpeg')] bg-[50%_50%] bg-cover bg-no-repeat absolute top-[0px] right-[-13px] w-[363px] h-[226.7px]">
                </div>
                <div class="rounded-b-[12px] bg-[#FFFFFF] flex flex-col items-center p-[15px_0_15px_0] w-[298.8px] h-[fit-content] box-sizing-border">
                  <div class="m-[0_0_11px_2px] inline-block break-words font-['Poppins'] font-bold text-[17px] leading-[1.3] text-[#232428]">
                    Persiapan Karnaval Desa
                  </div>
                  <div class="m-[0_118.3px_0_0] flex flex-row w-[fit-content] box-sizing-border">
                    <div class="rounded-[5px] bg-[#2A6C12] m-[5px_5px_5px_0] w-[5px] h-[5px]">
                    </div>
                    <span class="break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[#82858F]">
                      10 Maret 2024
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-[#2A6C12] flex flex-col items-center p-[0_0_17.4px_0] w-[1300px] box-sizing-border">
          <div class="bg-[rgba(0,0,0,0.65)] relative m-[0_0_17px_0] w-[1300px] h-[223.6px]">
            <div class="absolute left-[155px] top-[60px] flex flex-col box-sizing-border">
              <div class="m-[0_0_11px_0] inline-block self-start break-words font-['Poppins'] font-bold text-[20px] leading-[1.3] text-[#FFFFFF]">
                Tentang
              </div>
              <div class="bg-[#2A6C12] m-[0_0_18px_0] self-start w-[40px] h-[3px]">
              </div>
              <span class="break-words font-['Asap'] font-normal text-[15px] leading-[1.65] text-[rgba(255,255,255,0.6)]">
                SIWALANG, Portal kependudukan warga RW 001, Desa Lang-Lang SIngosari Malang
              </span>
            </div>
          </div>
          <div class="m-[0_122.4px_0_122px] flex flex-row justify-between w-[1055.6px] box-sizing-border">
            <p class="m-[0_10.5px_0_0] w-[940.5px] break-words font-['Asap'] font-normal text-[15px] leading-[1.4] text-[rgba(255,255,255,0.6)]">
              <span class="siwalang-2023-dorpie-sub-0"></span><span class="siwalang-2023-dorpie-sub-1"></span><span></span>
            </p>
            <div class="m-[3px_0_3px_0] inline-block break-words font-['Asap'] font-normal text-[15px] leading-[1] text-[rgba(255,255,255,0.6)]">
              Kembali ke atas
            </div>
          </div>
        </div>
      </div>
</body>
</html>