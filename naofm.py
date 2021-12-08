#!/usr/bin/python

import os, argparse
import json
from flask import Flask, request, jsonify

parser = argparse.ArgumentParser(prog='python naofm.py', description='Broadcasts WAV/MP3 file over FM using RPI GPIO #4 pin.')
parser.add_argument("-f", "--frequency", help="Set TX frequency. Acceptable range 87.1-108.2", type=float)
arg = parser.parse_args()

app = Flask(__name__)

list_process = []

os.system('clear')
frequency = 0
print ("Bienvenue dans NaoFM!  \nVersion 1.0 \nGPLv3 License\n")   
if arg.frequency is None:
    frequency = raw_input("Sur quelle fréquence (Défaut 103.3 MHz) : ")
    if frequency == "":
        frequency = '103.3'
elif 87.1 >= arg.frequency >= 108.2:
    print "La fréquence est en dehors des bandes FM."
    exit()
else:
	frequency = str(arg.frequency)

@app.route('/run_playlist', methods=['POST'])
def run_playlist():
    playlistfile = open("playlist.txt")
    # read the file as a list
    data = playlistfile.readlines()
    # close the file
    playlistfile.close()
    for musique in data:
        try:
            if ".mp3" in arg.song_file.lower():
                print arg.song_file.lower()
                #os.system("ffmpeg -i /var/www/html/musique/"+arg.song_file+" "+"-f s16le -ar 22.05k -ac 1 - | sudo /home/pi/fm_transmitter/fm_transmitter -f"+" "+frequency+" "+" - ")
                os.system("sox /var/www/html/musique/"+arg.song_file+" -r 22050 -c 1 -b 16 -t wav - | sudo /home/pi/fm_transmitter/fm_transmitter -f"+" "+frequency+" "+" - ")
                playlist = subprocess.Popen(args=["sox", "/var/www/html/musique/"+arg.song_file, "-r", "22050", "-c", "1", "-b", "16", "-t", "wav", "-", "|", "sudo", "/home/pi/fm_transmitter/fm_transmitter", "-f", frequency, "-"], stdout=subprocess.PIPE)
            elif ".wav" in arg.song_file.lower():	    
                os.system("sudo /home/pi/fm_transmitter/fm_transmitter -f"+" "+frequency+" "+arg.song_file)
            else:
                print "That file extension is not supported."
                print "File name provided: %s" %arg.song_file
                raise IOError
        except Exception:
            print "Something went wrong. Halting."; exit()
        except IOError:
            print "There was an error regarding file selection. Halting."; exit()
    return "1"
    


app.run(debug=True)