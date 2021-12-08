# NaoFM
## Mise à jour
> sudo apt update
> sudo apt upgrade
## Installation
> sudo apt install -y sox make gcc g++ git libmp3lame-dev python-pip
## Repo clone
> git clone git@github.com:Torilen/NaoFM.git
> cd NaoFM
> git clone https://github.com/pimylifeup/fm_transmitter.git
> cd fm_transmitter
> make
## MP3 Support
>cd /usr/src sudo 
>git clone https://code.videolan.org/videolan/x264.git 
>cd x264 
>sudo ./configure --host=arm-unknown-linux-gnueabi --enable-static --disable-opencl 
>sudo make 
>sudo make install
>cd /usr/src 
>sudo git clone git://source.ffmpeg.org/ffmpeg.git ffmpeg 
>cd ffmpeg
>sudo ./configure --arch=armv7-a --target-os=linux --enable-gpl --enable-libx264 --enable-nonfree --extra-cflags='-march=armv7-a -mfpu=neon-vfpv4 -mfloat-abi=hard'
>sudo make -j4 
>sudo make install
## Lancer la radio
Dans le dossier NaoFM, vous devez créer un dossier musique dans lequel vous mettrez les sources audio que vous souhaitez
>cd /home/pi/NaoFM
>python -m pip install flask
>sudo python ./naofm.py -f 103.3
