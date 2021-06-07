#!/usr/bin/python

import smbus
import time
bus = smbus.SMBus(1)
time.sleep(1)
address=0x2a
while True:
	data = ""
	data=bus.read_i2c_block_data(address,0);
	temperature  = ""
	for i in range (0, 2):
		temperature += chr(data[i])
	print temperature
	humidity = ""
	for i in range (2, 4):
		humidity += chr(data[i])
	print humidity	
	file = 'data.txt'
	with open(file, 'w') as filetowrite:
		filetowrite.writelines(temperature+' '+humidity)
	time.sleep(1)
