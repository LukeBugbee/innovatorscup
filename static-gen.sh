#!bin/bash
rm -rf static
mkdir -p static
cd static
wget -k -K  -E -r -l 10 -p -N -F -nH innovators-cup.pixelsmith.co