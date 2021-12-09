#!/usr/bin/python
from __future__ import print_function
import sys
import os, argparse, signal
import json
from flask import Flask, request, jsonify, Response

parser = argparse.ArgumentParser(prog='python naofm.py', description='Broadcasts WAV/MP3 file over FM using RPI GPIO #4 pin.')
parser.add_argument("-f", "--frequency", help="Set TX frequency. Acceptable range 87.1-108.2", type=float)
arg = parser.parse_args()


frequency = 0
print ("Bienvenue dans NaoFM!  \nVersion 1.0 \nGPLv3 License\n")   
if arg.frequency is None:
    frequency = raw_input("Sur quelle fréquence (Défaut 103.3 MHz) : ")
    if frequency == "":
        frequency = '103.3'
elif 87.1 >= arg.frequency >= 108.2:
    print("La fréquence est en dehors des bandes FM.")
    exit()
else:
	frequency = str(arg.frequency)

app = Flask(__name__)

list_process = []



@app.route('/run_playlist', methods=["POST", "GET"])
def run_playlist():
    print("Démarrage de la playlist...", file=sys.stdout)
    playlistfile = open("playlist.txt")
    # read the file as a list
    data = playlistfile.readlines()
    # close the file
    playlistfile.close()
    for musique in data:
        print("PLAYING: {}".format(musique.split('|')[0]), file=sys.stdout)
        try:
            if ".mp3" in musique.lower():
                #os.system("ffmpeg -i /var/www/html/musique/"+arg.song_file+" "+"-f s16le -ar 22.05k -ac 1 - | sudo /home/pi/fm_transmitter/fm_transmitter -f"+" "+frequency+" "+" - ")
                os.system("sox /var/www/html/NaoFM/musique/"+musique.split('|')[0]+" -r 22050 -c 1 -b 16 -t wav - | sudo /home/pi/fm_transmitter/fm_transmitter -f"+" "+str(frequency)+" "+" - ")
                #playlist = subprocess.Popen(args=["sox", "/var/www/html/musique/"+musique, "-r", "22050", "-c", "1", "-b", "16", "-t", "wav", "-", "|", "sudo", "/home/pi/fm_transmitter/fm_transmitter", "-f", frequency, "-"], stdout=subprocess.PIPE)
            elif ".wav" in musique.lower():	    
                os.system("sudo /home/pi/fm_transmitter/fm_transmitter -f"+" "+str(frequency)+" "+musique)
            else:
                print("That file extension is not supported.")
                print("File name provided: {}".format(musique))
                raise IOError
        except Exception as e:
            print(e)
        except IOError as e:
            print(e)
    return "1"

@app.route('/stop_playlist', methods=["POST", "GET"])
def stop_playlist():
    try:
        # iterating through each instance of the process
        for line in os.popen("ps ax | grep sox | grep -v grep"):
            fields = line.split()
             
            # extracting Process ID from the output
            pid = fields[0]
             
            # terminating process
            os.kill(int(pid), signal.SIGKILL)
        for line in os.popen("ps ax | grep fm_transmitter | grep -v grep"):
            fields = line.split()
             
            # extracting Process ID from the output
            pid = fields[0]
             
            # terminating process
            os.kill(int(pid), signal.SIGKILL)
        print("Fin de la playlist")
         
    except:
        print("Error Encountered while running script")
    return "1"
    
@app.route("/health")
def health():
    return Response("OK", status=200)
    
@app.route("/")
def index():
    return Response("Hello, world!", status=200)
    


app.run(host='0.0.0.0', port=int('5000'), debug=True, use_reloader=False)

