<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rincian Agenda Kegiatan| Warga</title>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,400&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="bg-[#FFFFFF] flex flex-col items-center w-[1300px] box-sizing-border">
        
        {{-- header --}}
        <div class="bg-[url('../img/DesaLangLang.png')] bg-[50%_50%] bg-cover relative p-[260px_110px_84px_110px] w-full h-427 box-sizing-border">
          <div class="bg-[rgba(0,0,0,0.5)] absolute left-[0px] top-[0px] right-[0px] bottom-[0px] h-[100%]"></div>
          <div class="absolute left-[110px] top-[0px] right-[110px] flex flex-col items-end box-sizing-border">
              <div class="m-[0_15.5px_0_15.5px] flex flex-row w-[fit-content] box-sizing-border">
              <div class="m-[24.4px_10px_21.1px_0] flex w-[12px] h-[14.5px] box-sizing-border">
                  <img class="w-[12px] h-[14.5px]" src="../icon/location.svg" />
              </div>
              <span class="break-words font-Asap font-normal text-[15px] leading-[4] text-[#FFFFFF]">
              Kec. Singosari, Kab. Malang, Jawa Timur
              </span>
              </div>

              {{-- navbar --}}
              <nav class="shadow-[0px_1px_2px_0px_rgba(0,0,0,0.12)] rounded-[13px] bg-[#FFFFFF] flex flex-row justify-between p-[0_79px_0_26px] w-[1080px] box-sizing-border ">
                <div class="m-[10px_0_10px_0] flex flex-row box-sizing-border">
                    <div class="bg-[url('../img/logo-lang2.png')] bg-[50%_50%] bg-cover bg-no-repeat m-[0_10.2px_0_0] w-[64.8px] h-[70px]"></div>
                    <div class="flex flex-row text-3xl font-black justify-center md:justify-start" style="font-family: poppins; margin-top: 18px;">
                        <p style="color: rgb(65, 184, 90)">SI</p>
                        <p style="color: rgb(0, 86, 47)">WALANG</p>
                    </div>
                </div>
                <div class="flex flex-row box-sizing-border">
                    <a href="" class="m-[0_57.3px_0_0] break-words font-Asap font-bold text-[15px] leading-[6] uppercase" style="color: #232428">Beranda</a>
                    <a href="" class="m-[35px_57.7px_35px_0] inline-block break-words font-Asap font-bold text-[15px] leading-[1.333] uppercase" style="color: #232428">MENU</a>
                    <a href="" class="m-[35px_0_35px_0] inline-block break-words font-Asap font-bold text-[15px] leading-[1.333] uppercase" style="color: #232428">LogOut</a>
                </div>
            </nav>
            
          </div>

          {{-- navigasi halaman --}}
          <div class="relative flex flex-col box-sizing-border">
              <div class="m-[0_0_15px_0] flex flex-row self-start w-[fit-content] box-sizing-border">
              <a href="#" class="m-[0_6.1px_0_0] break-words font-Asap font-normal text-[15px] leading-[1.3] text-[#FFFFFF]">
              Beranda 
              </a>
              <span class="m-[0_6.7px_0_0] break-words font-Asap font-normal text-[15px] leading-[1.3] text-[rgba(255,255,255,0.4)]">
              /
              </span>
              <a href="agenda.blade.php" class="break-words font-Asap font-normal text-[15px] leading-[1.3] text-[#FFFFFF]">
              Agenda Kegiatan
              </a>
              </div>
              <div class="flex box-sizing-border">
              <span class="break-words font-Poppins font-bold text-[37px] leading-[1.297] text-[#FFFFFF]">
              Rincian Agenda kegiatan
              </span>
              </div>
          </div>
        </div>


        {{-- main --}}
        <div class="m-[50px_110px_50px_110px] flex box-sizing-border ">
            <div class="rounded-[12px] border-[1px_solid_#EBEBEB] flex flex-col items-center p-[0_0_23px_0] box-sizing-border">
              <div class="rounded-[12px_12px_0px_0px] border-b-[1px_solid_#EBEBEB] bg-[#2A6C12] m-[0_0_12.5px_0] flex flex-row p-[16px_0_15px_29px] w-[1080px] box-sizing-border">
                <div class="rounded-[64px] border-[1px_solid_#EBEBEB] bg-[#F4F4F4] m-[0_14px_0_0] flex p-[9px_9px_9px_9px] w-[32px] h-[32px] box-sizing-border">
                  <img class="w-[12px] h-[12px]" src="../icon/panahkiri.svg" />
                </div>
                <div class="m-[4.5px_0_4.5px_0] inline-block break-words font-['SF_Pro_Display','Roboto_Condensed'] font-semibold text-[20px] text-[#FFFFFF]">
                Rincian Agenda Kegiatan
                </div>
              </div>

              
              {{-- judul kegiatan --}}
              <div class="m-[0_0_12.1px_41.9px] flex box-sizing-border">
                <span class="break-words font-Poppins font-bold text-[20px] leading-[1.105] text-[#232428]">
                Kerja Bakti Bersama Warga RW.01
                </span>
              </div>

              {{-- rincian kegiatan --}}
              <div class="m-[0_34.5px_25.5px_0] flex box-sizing-border">
                <span class="break-words font-Asap font-normal text-[17px] leading-[1.3] text-[#232428] text-center">
                Dalam rangka menjaga kebersihan desa dan sudah menjadi agenda rutin setiap 3 bulan sekali, dengan ini kami mengundang bapak/saudara untuk menghadiri kegiatan ini pada :
                </span>
              </div>

              {{-- informasi kegiatan --}}
              <div class="flex justify-center">
              <div class="flex flex-col w-[fit-content] box-sizing-border">
                <div class="border-b-[1px_solid_rgba(0,0,0,0.06)] flex flex-row justify-between p-[0_0_8px_0] w-[420px] box-sizing-border">
                    <span class="flex items-center break-words font-Asap font-normal text-[16px] leading-[1.5] text-[#232428]">
                        <span class="w-[68px]">
                            Hari    :
                        </span>
                        <span class="ml-1">
                            Jarwo Prasetya
                        </span>
                    </span>
                </div>
                <div class="border-b-[1px_solid_rgba(0,0,0,0.06)] flex flex-row justify-between p-[0_0_8px_0] w-[420px] box-sizing-border">
                    <span class="flex items-center break-words font-Asap font-normal text-[16px] leading-[1.5] text-[#232428]">
                        <span class="w-[68px]">
                            Tanggal :
                        </span>
                        <span class="ml-1">
                            12 April 2024
                        </span>
                    </span>
                </div>
                <div class="border-b-[1px_solid_rgba(0,0,0,0.06)] flex flex-row justify-between p-[0_0_8px_0] w-[420px] box-sizing-border">
                    <span class="flex items-center break-words font-Asap font-normal text-[16px] leading-[1.5] text-[#232428]">
                        <span class="w-[68px]">
                            Jam :
                        </span>
                        <span class="ml-1">
                            07:00 - 08:30 WIB
                        </span>
                    </span>
                </div>
                <div class="border-b-[1px_solid_rgba(0,0,0,0.06)] flex flex-row justify-between p-[0_0_8px_0] w-[420px] box-sizing-border">
                    <span class="flex items-center break-words font-Asap font-normal text-[16px] leading-[1.5] text-[#232428]">
                        <span class="w-[68px]">
                            Lokasi :
                        </span>
                        <span class="ml-1">
                            Jalan Raya Poros Lang-Lang 1
                        </span>
                    </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- footer --}}
        <div class="bg-[#2A6C12] m-[0_0_0px_0] flex flex-col items-center p-[0_0_17px_0] w-[1300px] box-sizing-border">
            <div class="bg-[rgba(0,0,0,0.65)] relative m-[0_0_17.4px_0] flex p-[60px_110.5px_80.6px_110.5px] w-[1300px] box-sizing-border">
                <div class="flex flex-col border-b-[1px_solid_rgba(255,255,255,0.06)]">
                    <div class="m-[0_0_11px_0] inline-block self-start break-words font-['Poppins'] font-bold text-[20px] leading-[1.3] text-[#FFFFFF]">
                        Tentang
                    </div>
                    <div class="bg-[#2A6C12] self-start w-[40px] h-[3px]"></div>
                    <div class="flex self-start">
                        <span class="break-words font-['Asap'] font-normal text-[15px] leading-[1.65] text-[rgba(255,255,255,0.6)]">
                            SIWALANG, Portal kependudukan warga RW 001, Desa Lang-Lang Singosari Malang
                        </span>
                    </div>
                </div>
            </div>
            <div class="m-[0_113.8px_0_110px] flex flex-row justify-between w-[1076.2px] box-sizing-border">
                <div class="flex flex-row">
                    <span class="m-[0_11.8px_0_0] break-words font-Asap font-normal text-[15px] leading-[1] text-[rgba(255,255,255,0.6)]">
                        Kembali ke atas
                    </span>
                    <div class="m-[6.4px_0_3.4px_0] flex w-[8.5px] h-[5.2px] box-sizing-border">
                        <img class="w-[8.5px] h-[5.2px]" src="../assets/vectors/vector_319_x2.svg" />
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>